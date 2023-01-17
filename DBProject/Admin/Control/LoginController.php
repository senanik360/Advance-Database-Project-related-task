<?php
session_start();

include_once '../Model/dbdb.php';
$username = $pass = '';
$count = 0;

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $pass = $_POST['password'];
    $_SESSION['email'] = $username;
    $_SESSION['password'] = $pass;

    if (!empty($username) && !empty($pass)) {
        $result = login($username, $pass);

        if ($result) {
            header('location: ../view/profile.php');
            //echo 'Done';
        } else {
            echo 'Your username or password is incorrect. Try again.!';
        }
    }
}