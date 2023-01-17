<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        First Name: <input type="text" id="fname" name="fname"><br><br>
        <p id="errorfname"></p>
        Last Name: <input type="text" id="lname" name="lname"><br><br>
        <p id="errorlname"></p>
        Email: <input type="text" id="email" name="email"><br><br>
        <p id="errormail"></p>
        <input type="submit" value="Submit" onclick="validateForm()">
    </form>
    <script src="../js/check.js"></script>

</body>

</html>