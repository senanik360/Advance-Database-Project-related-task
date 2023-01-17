<?php
include_once '../Model/dbdb.php';
$error_count = 0;
$niderr = '';
$emailerr = '';
$passerr = '';
$conpasserr = '';
$namerr = '';
$namerr = '';
$phonerr = '';
$admincodeerr = '';
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) and !empty($_POST['name'])) {
        if (is_numeric($_POST['name'])) {
            $namerr = '*Name cannot be numeric.!';
            $error_count++;
        } else {
            $name = $_POST['name'];
        }
    }

    if (isset($_POST['mobile_no']) and !empty($_POST['mobile_no'])) {
        $mobile_no = $_POST['mobile_no'];
        if (strlen($mobile_no) != 11) {
            $error_count++;
            $phonerr = '*Invalid mobile number!';
        }
        if (substr($mobile_no, 0, 2) != '01') {
            $error_count++;
            $phonerr = '*Country code error!';
        }
    }

    if (isset($_POST['nid']) and !empty($_POST['nid'])) {
        $nid = $_POST['nid'];
        if (strlen($nid) != 13) {
            $error_count++;
            $niderr = '*Invalid NID! <br>';
        }
    }
    $email = $_POST['email'];
    if (
        empty($email) ||
        !preg_match(
            '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            $email
        )
    ) {
        $emailerr = '*Invalid email';
        $error_count++;
    } elseif (
        isset($email) ||
        preg_match(
            '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            $email
        )
    ) {
        //*Email already exist. Try with another.!
    }

    $date_of_birth = '';
    if (isset($_POST['date_of_birth']) and !empty($_POST['date_of_birth'])) {
        $date_of_birth = $_POST['date_of_birth'];
    }
    $admin_code = '';
    if (isset($_POST['admin_code']) and !empty($_POST['admin_code'])) {
        $admin_code = $_POST['admin_code'];
        if (strlen($admin_code) != 5) {
            $error_count++;
            $admincodeerr = '*Wrong Admin Code! <br>';
        }
    }
    if (isset($_POST['password']) and !empty($_POST['password'])) {
        $password = $_POST['password'];
    }

    if (
        isset($_POST['confirm_password']) and !empty($_POST['confirm_password'])
    ) {
        $confirm_password = $_POST['confirm_password'];
    }

    if ($password != $confirm_password) {
        $error_count++;
        $conpasserr = '*Password mismatch !';
    }

    $uppercase = preg_match('@[A-Z]@', $password);

    $lowercase = preg_match('@[a-z]@', $password);

    $number = preg_match('@[0-9]@', $password);

    $specialChars = preg_match('@[^\w]@', $password);

    if (
        !$uppercase ||
        !$lowercase ||
        !$number ||
        !$specialChars ||
        strlen($password) < 6
    ) {
        $passerr = '*Weak password.!';
        $error_count++;
    }
    if ($error_count == 0) {
        /*
        $formdata = [
            'first_name' => $first_name,
            'Last_name' => $last_name,
            'date_of_birth' => $date_of_birth,
            'email' => $email,
            'mobile_no' => $mobile_no,
            'nid' => $nid,
            'password' => $password,
        ];
        */
        $result = Registration(
            $name,
            $email,
            $mobile_no,
            $date_of_birth,
            $nid,
            $password
        );

        if ($result) {
            echo '           Successfully Signed up.!';
        } else {
            echo 'Error.!';
        }

        if ($_FILES['myfile']['size'] < 1000000 * 2) {
            if (
                move_uploaded_file(
                    $_FILES['myfile']['tmp_name'],
                    '../File/' . $name . '.jpg'
                )
            ) {
                echo 'file uploaded. <br>';
            }
        } else {
            echo 'File size must be less than 2Mb';
        }
    }

    /*if ($count == 0) {
        header('location: ../View/login.php');
    }*/
}
?>
<?php/*
include_once '../Model/dbdb.php';
$username = $pass = $email = $mobile = $nid = '';
$count = 0;

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $nid = $_POST['nid'];

    if (!empty($username) && !empty($pass)) {
        $result = Registration($username, $email, $mobile, $nid, $pass);

        if ($result) {
            echo '           Successfully Signed up.!';
        } else {
            echo 'Error.!';
        }
    }
}*/