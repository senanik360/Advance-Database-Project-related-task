<?php
session_start();
include_once '../Model/dbdb.php';
$fname = $lname = $phone = $nid = $address = $salary = $email = $pass = '';

if (isset($_POST['insert'])) {
    $grade = $_POST['grade'];
    $salary = $_POST['salary'];

    $result = InsertSalGrade($grade, $salary);
}

if (isset($_POST['update'])) {
    $grade = $_POST['grade'];
    $salary = $_POST['salary'];

    $result = UpdateSalGrade($grade, $salary);
}
if (isset($_POST['delete'])) {
    $grade = $_POST['grade'];
    $salary = $_POST['salary'];

    $result = DeleteSalGrade($grade);
}

?>