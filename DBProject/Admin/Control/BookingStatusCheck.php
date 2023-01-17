<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body background="../file/s1.jpg">
    <div class="body">

        <style>
        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .content-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
        </style>
        <center>
            <table border="2" width=1000 class="content-table">
                <tr class="active-row">
                    <th>TOURIST ID</th>
                    <th>NAME</th>
                    <th>PAYMENT NO</th>
                    <th>BOOK TYPE</th>



                </tr>


                <?php if (isset($_POST['search'])) {
                    include_once '../Model/dbdb.php';
                    $res = HighestPayement();
                    while (
                        $row = oci_fetch_array(
                            $res,
                            OCI_RETURN_NULLS + OCI_ASSOC
                        )
                    ) {
                        echo '<tr >';
                        foreach ($row as $item) {
                            echo '<td>' .
                                ($item !== null
                                    ? htmlentities($item, ENT_QUOTES)
                                    : '&nbsp') .
                                '</td>';
                        }
                        echo '</tr>';
                    }
                } ?>
            </table>

            <center>

                <body>

</html>
<?php
/*include '../model/touristdb.php';
$fname = $lname = $phone = $dob = $email = $nid = $address = '';

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
if (isset($_POST['insert'])) {
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
        $mydb->InsertData(
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
        $mydb->opencon($conobj);
    }
}
if (isset($_POST['delete'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->deleteData('tourist', $conobj, $_POST['nid']);
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
    }
}*/
?>