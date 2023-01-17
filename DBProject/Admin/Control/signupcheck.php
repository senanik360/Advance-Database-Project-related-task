<?php

$error_count = 0;
$niderr = '';
$emailerr = '';
$passerr = '';
$conpasserr = '';
$namerr = '';
$namerr = '';
$phonerr = '';
$admincodeerr = '';
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) and !empty($_POST['name'])) {
        if (is_numeric($_POST['name'])) {
            $namerr = '*Name cannot be numeric.!';
            $error_count++;
        } else {
            $name = $_POST['name'];
        }
    }

    if (isset($_POST['mobile_no']) and !empty($_POST['mobile_no'])) {
        $mobile_no = $_POST['mobile_no'];
        if (strlen($mobile_no) != 11) {
            $error_count++;
            $phonerr = '*Invalid mobile number!';
        }
        if (substr($mobile_no, 0, 2) != '01') {
            $error_count++;
            $phonerr = '*Country code error!';
        }
    }

    if (isset($_POST['nid']) and !empty($_POST['nid'])) {
        $nid = $_POST['nid'];
        if (strlen($nid) != 13) {
            $error_count++;
            $niderr = '*Invalid NID! <br>';
        }
    }
    $email = $_POST['email'];
    if (
        empty($email) ||
        !preg_match(
            '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            $email
        )
    ) {
        $emailerr = '*Invalid email';
        $error_count++;
    } elseif (
        isset($email) ||
        preg_match(
            '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            $email
        )
    ) {
        $data = file_get_contents('../View/data.json');
        $mydata = json_decode($data);
        foreach ($mydata as $myobject) {
            if ($myobject->email == $email) {
                $emailerr = '*Email already exist. Try with another.!';
                $error_count++;
            }
        }
    }

    $date_of_birth = '';
    if (isset($_POST['date_of_birth']) and !empty($_POST['date_of_birth'])) {
        $date_of_birth = $_POST['date_of_birth'];
    }
    $admin_code = '';
    if (isset($_POST['admin_code']) and !empty($_POST['admin_code'])) {
        $admin_code = $_POST['admin_code'];
        if (strlen($admin_code) != 5) {
            $error_count++;
            $admincodeerr = '*Wrong Admin Code! <br>';
        }
    }
    if (isset($_POST['password']) and !empty($_POST['password'])) {
        $password = $_POST['password'];
    }

    if (
        isset($_POST['confirm_password']) and !empty($_POST['confirm_password'])
    ) {
        $confirm_password = $_POST['confirm_password'];
    }

    if ($password != $confirm_password) {
        $error_count++;
        $conpasserr = '*Password mismatch !';
    }

    $uppercase = preg_match('@[A-Z]@', $password);

    $lowercase = preg_match('@[a-z]@', $password);

    $number = preg_match('@[0-9]@', $password);

    $specialChars = preg_match('@[^\w]@', $password);

    if (
        !$uppercase ||
        !$lowercase ||
        !$number ||
        !$specialChars ||
        strlen($password) < 6
    ) {
        $passerr = '*Weak password.!';
        $error_count++;
    }
    if ($error_count == 0) {
        $formdata = [
            'first_name' => $first_name,
            'Last_name' => $last_name,
            'date_of_birth' => $date_of_birth,
            'email' => $email,
            'mobile_no' => $mobile_no,
            'nid' => $nid,
            'password' => $password,
        ];
        $existingdata = file_get_contents('data.json');
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] = $formdata;
        //Convert updated array to JSON
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        //write json data into data.json file
        if (file_put_contents('data.json', $jsondata)) {
            echo 'Successfully signed up <br>';
        } else {
            echo '404 error.!';
        }

        if ($_FILES['myfile']['size'] < 1000000 * 2) {
            if (
                move_uploaded_file(
                    $_FILES['myfile']['tmp_name'],
                    '../File/' . $first_name . '.jpg'
                )
            ) {
                echo 'file uploaded. <br>';
            }
        } else {
            echo 'File size must be less than 2Mb';
        }
    }

    /*if ($count == 0) {
        header('location: ../View/login.php');
    }*/
} /*session_start();
$hasserror = 0;

if (isset($_POST['submit'])) {
    $uname = $_REQUEST['uname'];
    if (empty($uname)) {
        echo 'Enter a valid name.<br>';
    } else {
        $hasserror = 1;
        //$_SESSION['uname'] = $uname; // session variable
        echo 'Name is : ' . $uname . '<br>';
    }
    $pass = $_REQUEST['pass'];
    if (strlen($pass) < 3) {
        echo 'Enter a valid password.<br>';
    } else {
        $hasserror = 1;
        //$_SESSION['pass'] = $pass; // session variable
        echo 'OK <br> ';
    }

    $dob = $_REQUEST['dob'];
    //$_SESSION['dob'] = $dob;
    echo 'Date of birth : ' . $dob;

    $phone = $_REQUEST['phone'];
    //$_SESSION['phone'] = $phone;
    echo 'Phone : ' . $phone;

    $location = $_REQUEST['location'];
    //$_SESSION['location'] = $location;
    echo 'Location : ' . $location;

    /*
   if(isset($_POST["radio"])){
      echo " You have selected ".$_POST["radio"]."<br>";
   }else{
      echo "You have not selected yet <br>";
   }

   if(isset($_POST["cricket"]) || isset($_POST["football"]) || isset($_POST["hockey"])){
      echo "You have selected : ";
      if(isset($_POST["cricket"])){
         echo $_POST["cricket"];
      }
      if(isset($_POST["football"])){
         echo $_POST["football"];
      }
      if(isset($_POST["hockey"])){
         echo $_POST["hockey"];
      } 
   }
   else {
      echo "You have not selected any box yet. <br>";
   }
   echo "<br>";
if($_FILES["myfile"]["size"] < 1000000*2){
   if(move_uploaded_file($_FILES["myfile"]["tmp_name"] , "../Files/".$_FILES["myfile"]["name"])){
      echo "file uploaded. <br>";
   } 
   else {
      echo "file is not upoaded. <br>";
   }
}
else {
   echo "File size is less than 2Mb";
}
*/

//Get form data
/*$formdata = [
        'Name ' => $_POST['uname'],
        'Password ' => $_POST['pass'],
        'Date of Birth ' => $_POST['dob'],
        'Phone ' => $_POST['phone'],
        'Email ' => $_POST['email'],
        'Location ' => $_POST['location'],
        'Date of Birth ' => $_POST['dob'],
    ];
    $existingdata = file_get_contents('data.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] = $formdata;
    //Convert updated array to JSON
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

    //write json data into data.json file
    if (file_put_contents('data.json', $jsondata)) {
        echo 'Data successfully saved <br>';
    } else {
        echo 'no data saved';
    }

    $data = file_get_contents('data.json');
    $mydata = json_decode($data); */

//echo "my value: ".$mydata[0]->Name;
/*	 foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
echo "your ".$key." is ".$value."<br>";
} 
}

} 
if (isset($_POST['submit'])) {
    //session_destroy();
    header('location: ../View/login.php');
} */

?>