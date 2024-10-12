<?php
require_once 'dbConfig.php';


function insertIntoStudentRecords($pdo, $first_name, $last_name, $gender, $yearLevel, $section, $adviser, $religion){
    $sql = "INSERT INTO student_records (first_name, last_name, gender, year_level, section, adviser, religion) VALUES(?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $yearLevel, $section,$adviser,$religion]);

    if ($executeQuery){
        return True;
    }
}

function seeAllStudentRecords($pdo){
    $sql = "SELECT * FROM student_records";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery){
        return $stmt->fetchAll();
    }
}
?>