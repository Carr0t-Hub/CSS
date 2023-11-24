<?php
include('../config/db.config.php');
if (isset($_POST['clientType'])) {


    $sql = "INSERT INTO cs_basicinfo (clientType, gender,age,region,service,division,section,type)
            VALUES (:clientType, :gender, :age, :region, :service, :division, :section, :type)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        'clientType' => $_POST['clientType'],
        'gender' => $_POST['gender'],
        'age' => $_POST['age'],
        'region' => $_POST['region'],
        'service' => $_POST['service'],
        'division' => $_POST['division'],
        'section' => $_POST['section_unit'],
        'type' => $_POST['type'],
    ]);

    //last inserted id
    $id = $conn->lastInsertId();

    $sql = "INSERT INTO cs_answers (info_id, cc1,cc2,cc3,sqd0,sqd1, sqd2,sqd3,sqd4,sqd5,sqd6,sqd7,sqd8,cc3_explanation,remarks)
            VALUES (:info_id, :cc1, :cc2, :cc3, :sqd0, :sqd1,:sqd2, :sqd3, :sqd4, :sqd5, :sqd6, :sqd7, :sqd8, :cc3_explanation, :remarks)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        'info_id' => $id,
        'cc1' => $_POST['cc1'],
        'cc2' => $_POST['cc2'] ?? null,
        'cc3' => $_POST['cc3'] ?? null,
        'sqd0' => isset($_POST['sqd0']) ? $_POST['sqd0'] : null,
        'sqd1' => $_POST['sqd1'],
        'sqd2' => $_POST['sqd2'],
        'sqd3' => $_POST['sqd3'],
        'sqd4' => $_POST['sqd4'],
        'sqd5' => $_POST['sqd5'],
        'sqd6' => $_POST['sqd6'],
        'sqd7' => $_POST['sqd7'],
        'sqd8' => $_POST['sqd8'],
        'cc3_explanation' => $_POST['cc3_explanation'] ?? null,
        'remarks' => $_POST['remarks'],
    ]);



    header('Location: ../success.php');
}
