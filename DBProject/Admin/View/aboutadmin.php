<?php
/*session_start();
if (empty($_SESSION['email'])) {
    header('Location: ../control/login.php');
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body background="../file/s1.jpg">
    <form action="" method="post" enctype="multipart/form-data">


        <div class="body">
            <div class="sticky">
                <marquee>
                    <h1><i>General Info.</i>
                    </h1>
                </marquee>
            </div>
            <center>
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
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>MOBILE</th>
                            <th>JOIN_DATE</th>
                            <th>NID</th>
                            <th>PASSWORD</th>


                        </tr>
                        <?php
                                include_once '../Model/dbdb.php';
                                session_start();
                                $res = admin_self_search($_SESSION['password']);
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
                                                ? htmlentities(
                                                    $item,
                                                    ENT_QUOTES
                                                )
                                                : '&nbsp') .
                                            '</td>';
                                    }
                                    echo '</tr>';
                                }
                                ?>

                </center>
                <h3> <a href="../view/adminsdetail.php"> About Admins </a><br>
                    <h3> <a href="../view/adminUpdate.php"> Update Your Information </a><br>
</body>

</html>