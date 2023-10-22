<?php
   session_start();
if(isset($_REQUEST['submit'])){

    $error_message = '';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];

    if(isset($_REQUEST['gender'])){
        $gender = $_REQUEST['gender'];
    }else{
        $gender = '';
    }

    $dob = $_REQUEST['dob'];

    if($name == ''){
        $error_message .= "You must fill in your Name! <br>";
    }
    if($email == ''){
        $error_message .= "You must fill in your Email! <br>";
    }
    if($username == ''){
        $error_message .= "You must fill in your User Name! <br>";
    }
    if($password == ''){
        $error_message .= "You must fill in your Password! <br>";
    }

    if($confirm_password == '' || $confirm_password !== $password){
        $error_message .= "Your password doesn't match! <br>";
    }
    if($gender == ''){
        $error_message .= "You must fill in your Gender! <br>";
    }
    if ($dob == '') {
        $error_message .= "You must fill in your Date of Birth! <br>";
    }

    if (empty($error_message)) {
       
        $con = mysqli_connect('localhost', 'root', '', 'test');

        $sql = "INSERT INTO registration_table (Name, Email, Username, Password, Gender,dob) VALUES ('$name', '$email', '$username', '$password', '$gender', '$dob')";

        if (mysqli_query($con, $sql)) {
            echo "Registration Successful";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        mysqli_close($con);

    }
}
?>
<p><?php if(isset($error_message)){echo $error_message;} ?></p>