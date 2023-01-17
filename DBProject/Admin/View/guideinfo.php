<?php
/*session_start();
if (empty($_SESSION['email'])) {
    header('Location: ../control/login.php');
}*/
?>
<?php include '../control/guideinfocheck.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body background="../file/s1.jpg">
    <div class="body">
        <div class="sticky">
            <marquee>
                <h1><i>Guide's Info.</i>
                </h1>
            </marquee>
        </div>
        <center>
            <table>

                <form action="" method="post"><br>
                    <input type="text" name="searchData" placeholder="Type NID">
                    <input type="submit" class="button searchbutton" name="search" value="Search"><br><br>

                </form>
                <tr>
                    <td>
                        <form action="" method="post">
                            <p class="p3" id="labels"> First Name :
                                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                            <p id="errorfname"></p>
                            <p class="p3" id="labels"> Last Name :
                                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                            <p id="errorlname"></p>
                            <p class="p3" id="labels"> Phone :
                                <input type="number" name="phone" id="phone" value="<?php echo $phone; ?>">
                            <p id="errorphone"></p>
                            <p class="p3" id="labels"> Address :
                                <input type="text" name="address" value="<?php echo $address; ?>"><br>
                            <p class="p3" id="labels"> Salary :
                                <input type="salary" name="salary" value="<?php echo $salary; ?>"><br>
                            <p class="p3" id="labels"> NID :
                                <input type="number" name="nid" id="nid" value="<?php echo $nid; ?>">
                            <p id="errornid"></p><br><br>
                            <input type="submit" class="button submitbutton" name="insert" value="Insert"
                                onclick="validateForm()">
                            <input type="submit" class="button resetbutton" name="delete" value="Delete">
                            <input type="submit" class="button updatebutton" name="update" value="Update"><br>
                        </form>
                    </td>
                </tr>
        </center>
        <script src="../js/myjs1.js"></script>
</body>

</html>