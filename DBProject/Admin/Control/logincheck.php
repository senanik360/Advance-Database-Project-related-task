<?php
session_start();
$email = $password = $loginerr = $emailerr = $passerr = '';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email) || empty($password)) {
        if (empty($email)) {
            $emailerr = '*Empty field.!';
        } else {
            $passerr = '*Empty field.!';
        }
    } else {
        $user_found = false;
        $data = file_get_contents('../View/data.json');
        $mydata = json_decode($data);
        foreach ($mydata as $myobject) {
            if (
                $myobject->email == $email &&
                $myobject->password == $password
            ) {
                $user_found = true;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $_POST['password'];
            }
        }
        if ($user_found) {
            header('location: ../view/profile.php');
        } else {
            $loginerr = 'Your email or password is incorrect.!';
        }
    }
}
/*
    if ($_POST['uname'] == 'abc' && ($_POST['pass'] = '123')) {
        $_SESSION['uname'] = $_POST['uname'];
        $_SESSION['pass'] = $_POST['pass'];

        $data = file_get_contents('data.json');
        $mydata = json_decode($data);

        //echo "my value: ".$mydata[0]->Name;
        foreach ($mydata as $myobject) {
            foreach ($myobject as $key => $value) {
                if ($key == $_POST['uname'] && $value == $_POST['pass']) {
                }
            }
        }
        header('location: profile.php');
    } else {
        echo 'You are not a valid user.';
    }*/
?>