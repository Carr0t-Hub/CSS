<?php
include('../config/function.php');

if (isset($_POST['division'])) {

    $divisionID = $_POST['division'];

    $sql = "SELECT * FROM section WHERE division = :divisionID";

    $stmt = $mysqli->prepare($sql);
    $stmt->execute(['divisionID' => $divisionID]);


    $sections = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $output = '';

    foreach ($sections as $section) {
        $output .= '<option value="' . $section['sectionID'] . '">' . $section['section'] . '</option>';
    }


    echo $output;
}
