<?php
include '../control/RegistrationController.php'; ?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body background="11.jpg">
    <br>
    <h1 align="center">
        <font color="white" size="" face="cursive"> Welcome Admin.</font> <br>
        <h3>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="login.php"> Log in </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br><br>
            <div class="bodynocolor">

                <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

                    <center>
                        <h1>Sign up</h1>
                    </center>


                    <center>
                        <table>
                            <tr>
                                <td>
                                    <p class="p2" id="labels">Name :
                                </td>
                                <td><input type="text" name="name" id="name" placeholder="Enter your Name">
                                    <p id="errorname"></p><?php echo $namerr; ?>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Email :
                                </td>
                                <td><input type="text" name="email" id="email" placeholder="ex: abc1@gmail.com"
                                        required>
                                    <p id="erroremail"></p>
                                    <?php echo $emailerr; ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Mobile Number :
                                </td>
                                <td><input type="number" name="mobile_no" id="mobile_no" placeholder="01...." required>
                                    <p id="errorphone"></p><?php echo $phonerr; ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">NID :
                                </td>
                                <td><input type="number" name="nid" id="nid" placeholder="Enter your valid NID number"
                                        required>
                                    <p id="errornid"></p><?php echo $niderr; ?>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Password :
                                </td>
                                <td><input type="password" name="password" placeholder="Enter a strong password"
                                        required><?php echo $passerr; ?></td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Confirm Password :
                                </td>
                                <td><input type="password" name="confirm_password" placeholder="Retype password"
                                        required><?php echo $conpasserr; ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Upload your picture :
                                </td>
                                <td><input type="file" name="myfile">
                                </td>
                            </tr>
                        </table><br>
                        <input type="submit" name="submit" class="button submitbutton" value="Submit"
                            onclick="validateForm()">
                        <input type="reset" class="button searchtbutton" name="Reset">
                    </center>
                </form>
                <script src="../myjs.js"></script>

</body>

</html>
<?php
//include '../Control/RegistrationController.php';
?>