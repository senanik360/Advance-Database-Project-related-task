<?php
session_start();
include_once '../Model/dbdb.php';
$grade = $salary = '';

if (isset($_POST['insert'])) {
    $grade = $_POST['grade'];
    $e_id = $_POST['e_id'];

    $result = InsertSalDetail($e_id, $grade);
}

if (isset($_POST['update'])) {
    $grade = $_POST['grade'];
    $e_id = $_POST['e_id'];

    $result = UpdateSalDetail($e_id, $grade);
}
if (isset($_POST['delete'])) {
    $grade = $_POST['grade'];
    $e_id = $_POST['e_id'];

    $result = DeleteSalDetail($e_id);
}

?>