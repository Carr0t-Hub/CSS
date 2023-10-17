<?php
include('config/db.config.php');
if (isset($_POST['clientType'])) {

    $sql = "INSERT INTO answers (dateSurvey,clientType,gender, age, residence, service, cc1,cc2,cc3,sqd0,sqd1,sqd2,sqd3,sqd4,sqd5,sqd6,sqd7,sqd8)
            VALUES (:dateSurvey,:clientType,:gender, :age, :residence, :service, :cc1,:cc2,:cc3,:sqd0,:sqd1,:sqd2,:sqd3,:sqd4,:sqd5,:sqd6,:sqd7,:sqd8)";

    $stmt = $conn->prepare($sql);
    $stmt->execute(array(
        ':dateSurvey' => $_POST['dateSurvey'],
        ':clientType' => $_POST['clientType'],
        ':gender' => $_POST['gender'],
        ':age' => $_POST['age'],
        ':residence' => $_POST['residence'],
        ':service' => $_POST['service'],
        ':cc1' => $_POST['cc1'],
        ':cc2' => $_POST['cc2'],
        ':cc3' => $_POST['cc3'],
        ':sqd0' => $_POST['sqd0'],
        ':sqd1' => $_POST['sqd1'],
        ':sqd2' => $_POST['sqd2'],
        ':sqd3' => $_POST['sqd3'],
        ':sqd4' => $_POST['sqd4'],
        ':sqd5' => $_POST['sqd5'],
        ':sqd6' => $_POST['sqd6'],
        ':sqd7' => $_POST['sqd7'],
        ':sqd8' => $_POST['sqd8']
    ));

    header('Location: success.php');
}
