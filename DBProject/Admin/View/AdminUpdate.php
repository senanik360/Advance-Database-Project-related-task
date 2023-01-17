<?php
/*session_start();
if (empty($_SESSION['email'])) {
    header('Location: ../control/login.php');
}*/
include_once '../control/adminupdatecheck.php'; ?>

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
                    <h1><i>Update your info</i>
                    </h1>
                </marquee>
            </div>
            <center>
                <table>

                    <tr>
                        <td>
                            <form action="" method="post">
                                <p class="p3" id="labels"> Name :
                                    <input type="text" name="fname" id="fname" placeholder="Type Your Name" required
                                        value="<?php echo $fname; ?>">
                                <p class="p3" id="labels"> Email :
                                    <input type="email" name="email" id="email" placeholder="Type Your Email" required
                                        value="<?php echo $email; ?>">
                                <p class="p3" id="labels"> Phone :
                                    <input type="number" name="phone" id="phone" placeholder="Type Your Phone" required
                                        value="<?php echo $phone; ?>">
                                <p class="p3" id="labels"> NID :
                                    <input type="number" name="nid" id="nid" placeholder="Type Your NID" required
                                        value="<?php echo $nid; ?>">
                                <p>
                                    <input type="submit" class="button submitbutton" name="update" value="Update"><br>
                            </form>
                        </td>
                    </tr>
            </center>
</body>

</html>