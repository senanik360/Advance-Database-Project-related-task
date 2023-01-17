<?php
session_start();
if (empty($_SESSION['email'])) {
    header('Location: ../control/login.php');
}
setcookie('user_detect', 'visited', time() + 86400 * 2, '/');
if (isset($_COOKIE['user_detect'])) {
    echo 'Nice to see you again. <br>';
} else {
    echo 'Nice to see. <br>';
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body background="../file/w1.jpg">
    <br>
    <h1 align="center">
        <div class="heading">
            <font color="white" size="" face="cursive">
                <marquee> Hello Admin.</marquee>
            </font>
        </div>

        <h3>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <table border="1" align="center" width="150">
                <br><br><br>
                <tr>

                    <td>
                        <img src="../file/profiledp.jpg" class="img-border" width="200px" height="200px">

                        <h3> <a href="aboutadmin.php"> About You </a><br>
                    </td>
                    <td>
                        <img src="../file/profiledp.jpg" class="img-border" width="200px" height="200px">
                        <h3> <a href="guideinfo.php"> Guide info </a> <br>
                    </td>

                    <td> <img src="../file/profiledp.jpg" class="img-border" width="200px" height="200px">

                        <h3> <a href="touristinfo.php"> Tourist info </a> <br>
                    </td>

                    <td> <img src="../file/profiledp.jpg" class="img-border" width="200px" height="200px">

                        <h3> <a href="employeeinfo.php"> Employee info </a> <br>
                    </td>
                    <td> <img src="../file/reviewdp1.jpg" class="img-border" width="200px" height="200px">

                        <h3> <a href="reviewboard.php"> Review </a> <br>
                    </td>


                </tr>
            </table>
            <br><br><br>
            <br><br><br>
            <center>
                <h3> <a href="../view/noticeboard.php">Post Notice </a> <br>
                    <h3> <a href="../Control/logout.php">Log out </a> <br>


            </center>


</body>

</html>