<?php
/*session_start();
if (empty($_SESSION['email'])) {
    header('Location: ../control/login.php');
}*/
include_once '../control/salaryupdatecheck.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body background="../file/s1.jpg">
    <h3> <a href="../view/SalaryUpdateHistory.php">Tap to See the Update History </a> <br>

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
                        <th>GRADE</th>
                        <th>SALARY</th>



                    </tr>
                    <?php
                    include_once '../Model/dbdb.php';

                    $res = SalGrade();
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
                    ?>

                </table>
                <center>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <div class="sticky">
                                <center>
                                    <h1>Update Here
                                    </h1>
                                </center>
                            </div>
                            <center>
                                <table>

                                    <tr>
                                        <td>
                                            <form action="" method="post">
                                                <p class="p3" id="labels"> Grade :
                                                    <input type="number" name="grade" id="grade"
                                                        placeholder="Type grade like 1,2,3" required>
                                                <p class="p3" id="labels"> Salary :
                                                    <input type="number" name="salary" id="salary"
                                                        placeholder="Enter new salary" required>
                                                </p>
                                                </p> <br><input type="submit" class="button submitbutton " name="insert"
                                                    value="Insert">
                                                <input type="submit" class="button insertbutton" name="update"
                                                    value="Update">
                                                <input type="submit" class="button resetbutton" name="delete"
                                                    value="Delete"><br>
                                            </form>
                                        </td>
                                    </tr>
                            </center>
</body>

</html>