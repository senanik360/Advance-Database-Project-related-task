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
    function InsertData($notice, $tablename, $conn)
    {
        $sqlstr = "INSERT INTO $tablename (notice,date) VALUES ('$notice',now())";
        if ($conn->query($sqlstr) == true) {
            echo 'Data inserted successfully.<br>';
        } else {
            echo "Data Can't insert.!" . $conn->error . '<br>';
        }
    }
    function deleteData($tablename, $conn, $nid)
    {
        $sqlstr = "DELETE FROM $tablename WHERE nid = '$nid'";
        if ($conn->query($sqlstr) == true) {
            echo 'deleted successfuly';
        } else {
            echo "can't delete";
        }
    }
}

?>