<?php
class DB
{
    function opencon()
    {
        $DBHostname = 'localhost';
        $DBUsername = 'root';
        $DBpass = '';
        $DBName = 'project';

        $conn = new mysqli($DBHostname, $DBUsername, $DBpass, $DBName);
        if ($conn->connect_error) {
            echo "can't connection object" . $conn->connect_error . '<br>';
        }
        return $conn;
    }
    function closecon($conn)
    {
        $conn->close();
    }
    function searchData($tablename, $conn, $nid)
    {
        $sqlstr = "SELECT * FROM $tablename WHERE nid='$nid'";
        $results = $conn->query($sqlstr);
        return $results;
    }
    function InsertData(
        $fname,
        $lname,
        $phone,
        $address,
        $salary,
        $nid,
        $tablename,
        $conn
    ) {
        $sqlstr = "INSERT INTO $tablename (fname,lname,phone,address,salary,NID) VALUES ('$fname','$lname' ,$phone, '$address', $salary, $nid)";
        if ($conn->query($sqlstr) == true) {
            echo 'Data inserted successfully.<br>';
        } else {
            echo "Data Can't insert.!" . $conn->error . '<br>';
        }
    }
    function deleteData($tablename, $conn, $nid)
    {
        $sqlstr = "DELETE FROM $tablename WHERE nid = $nid";
        if ($conn->query($sqlstr) == true) {
            echo 'deleted successfuly';
        } else {
            echo "can't delete";
        }
    }

    function updateData(
        $fname,
        $lname,
        $phone,
        $address,
        $salary,
        $nid,
        $tablename,
        $conn
    ) {
        $sqlstr = "UPDATE $tablename SET fname='$fname', lname='$lname', phone=$phone, salary=$salary email='$email', address='$address' WHERE nid = $nid";
        if ($conn->query($sqlstr) == true) {
            echo 'Updated successfuly';
        } else {
            echo "can't update";
        }
    }
}

?>