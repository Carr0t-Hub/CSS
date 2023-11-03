<?php
include("../config/db.config.php");


//check if POST
if (isset($_POST['name'])) {

    //get all post names and display using foreach

    $sql = "INSERT INTO ss_users (fullName, emailAddress) VALUES (:name, :email)";
    $stmtsql = $conn->prepare($sql);
    $stmtsql->execute(array(
        "name" => $_POST['name'],
        "email" => $_POST['email']
    ));

    $id = $conn->lastInsertId();

    //remove name and email from POST
    unset($_POST['name']);
    unset($_POST['email']);


    foreach ($_POST as $key => $value) {

        //remove name and email from POST
        if ($key != "name" || $key != "email") {
            $sqlanswer = "INSERT INTO ss_answers (users_id, question_id, answer)
             VALUES (:users_id, :question_id, :answer)";


            $stmtanswer = $conn->prepare($sqlanswer);

            $stmtanswer->execute(array(
                "users_id" => $id,
                "question_id" => $key,
                "answer" => $value
            ));
        }
        // echo $key . " " . $value . "<br>";
    }

    echo "SUCCESS";
}
