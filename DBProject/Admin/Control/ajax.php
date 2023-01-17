<?php
include '../model/model.php';
if ($_POST['fname'] == '') {
    echo 'empty input';
} else {
    $mydb = new DB();
    $conobj = $mydb->opencon();

    $mydata = $mydb->searchUser($conobj, 'person', $_POST['fname']);
    if ($mydata->num_rows > 0) {
        while ($row = $mydata->fetch_assoc()) {
            echo $row['fname'];
        }
    } else {
        echo 'no data found';
    }
}

?>