<?php
include("db.config.php");


function getOneSeminarSurvey($mysqli, $id)
{
    $sql = "SELECT * FROM ss_surveys WHERE ID = :id";
    $stmt = $mysqli->prepare($sql);

    $stmt->execute(array(
        "id" => $id
    ));

    $surveys = $stmt->fetch(PDO::FETCH_ASSOC);


    $sqlsections = "SELECT * FROM ss_sections WHERE survey_id = :id";
    $stmtsections = $mysqli->prepare($sqlsections);
    $stmtsections->execute(array("id" => $id));


    // $sectionresult = $stmtsections->fetchAll(PDO:r:FETCH_ASSOC);

    $sections = array();

    while ($row = $stmtsections->fetch(PDO::FETCH_ASSOC)) {
        $sections[] = $row;


        $sqlquestions = "SELECT * FROM ss_questions WHERE sections_id = :sectionID";

        $stmtquestions = $mysqli->prepare($sqlquestions);
        $stmtquestions->execute(array("sectionID" => $row['id']));

        $questions = array();

        while ($row2 = $stmtquestions->fetch(PDO::FETCH_ASSOC)) {
            $questions[] = $row2;


            $sqlchoices = "SELECT * FROM ss_choices WHERE question_id = :questionID";

            $stmtchoices = $mysqli->prepare($sqlchoices);

            $stmtchoices->execute(array("questionID" => $row2['id']));

            $choices = array();

            while ($row3 = $stmtchoices->fetch(PDO::FETCH_ASSOC)) {
                $choices[] = $row3;
            }

            $questions[count($questions) - 1]['choices'] = $choices;
        }

        $sections[count($sections) - 1]['questions'] = $questions;
    }


    $surveys['sections'] = $sections;

    return $surveys;
}


function getDivisions($mysqli)
{

    $sql = "SELECT * FROM division";

    $stmt = $mysqli->prepare($sql);

    $stmt->execute();

    $divisions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //remove the first element of the array
    array_shift($divisions);

    return $divisions;
}


function getServices($mysqli, $type)
{

    $sql = "SELECT * FROM cs_services WHERE status = 'active' AND type = :type";

    $stmt = $mysqli->prepare($sql);

    $stmt->execute(array("type" => $type));

    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $services;
}
