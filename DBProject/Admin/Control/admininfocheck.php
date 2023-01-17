<?php
include_once '../Model/dbdb.php';
$fname = $lname = $phone = $nid = $address = $salary = $email = $pass = '';

if (isset($_POST['search'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->searchData('guide', $conobj, $_POST['searchData']);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $fname = $row['fname'];
            $lname = $row['lname'];
            $phone = $row['phone'];
            $address = $row['address'];
            $salary = $row['salary'];
            //$nid = $row['nid'];
            $nid = $row['NID'];
        }
    } else {
        echo 'no data found';
    }
}
if (isset($_POST['insert'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    //$nid = $row['nid'];
    $nid = $_POST['nid'];
    if (
        empty($fname) ||
        empty($lname) ||
        empty($phone) ||
        empty($address) ||
        empty($salary) ||
        empty($nid)
    ) {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData(
            $fname,
            $lname,
            $phone,
            $address,
            $salary,
            $nid,
            'guide',
            $conobj
        );
        $mydb->opencon($conobj);
    }
}
if (isset($_POST['delete'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->deleteData('guide', $conobj, $_POST['nid']);
}
if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $nid = $_POST['nid'];
    $address = $_POST['address'];
    if (
        empty($fname) ||
        empty($lname) ||
        empty($phone) ||
        empty($dob) ||
        empty($email) ||
        empty($nid) ||
        empty($address)
    ) {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $results = $mydb->updateData(
            $fname,
            $lname,
            $phone,
            $dob,
            $email,
            $nid,
            $address,
            'tourist',
            $conobj
        );
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $fname = $row['fname'];
                $lanme = $row['lname'];
                $phone = $row['phone'];
                $dob = $row['dob'];
                $email = $row['email'];
                $nid = $row['nid'];
                $address = $row['address'];
            }
        } else {
            echo 'no data found';
        }
    }
}


?>