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
    <div class="body">
        <div class="sticky">
            <marquee>
                <h1><i>Search Employee</i>
                </h1>
            </marquee>
        </div>
        <center>
            <table>

                <form action="" method="post"><br>
                    <input type="text" name="e_id" placeholder="Type ID">
                    <input type="submit" class="button searchbutton" name="search" value="Search"><br><br>

                </form>


        </center>
        <script src="../js/myjs1.js"></script>
</body>

</html>
<?php include '../control/empsearchcheck.php'; ?>