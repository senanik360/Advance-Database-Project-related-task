<?php
include '../model/noticedb.php';
$notice = '';

if (isset($_POST['search'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->searchData('tourist', $conobj, $_POST['searchData']);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $fname = $row['fname'];
            $lname = $row['lname'];
            $phone = $row['phone'];
            $dob = $row['dob'];
            $email = $row['email'];
            $address = $row['address'];
            $nid = $row['nid'];
        }
    } else {
        echo 'no data found';
    }
}
if (isset($_POST['submit'])) {
    $notice = $_POST['notice'];
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $mydb->InsertData($notice, 'notice', $conobj);
    $mydb->opencon($conobj);
}
?>