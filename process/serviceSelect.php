<?php
include('../config/function.php');
if (isset($_POST['section_unit'])) {

    $sectionUnit = $_POST['section_unit'];
    $type = $_POST['type'];

    $sql = "SELECT * FROM cs_services WHERE section = :section AND type = :type AND status = 'active'";

    $stmt = $conn->prepare($sql);
    $stmt->execute(['section' => $sectionUnit, 'type' => $type]);


    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $output = '';

    foreach ($services as $service) {
        $output .= '<option value="' . $service['id'] . '">' . $service['name'] . '</option>';
    }


    echo $output;
}
