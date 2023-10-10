<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){
    $cookie_name = $_COOKIE['name'];
    $cookie_password = $_COOKIE['password'];
    
}else{
    header('location: login.php');
}


if(isset($_REQUEST['submit'])){

    $error_message = '';

    $current_password = $_REQUEST['current_password'];
    $new_password = $_REQUEST['new_password'];
    $retype_password = $_REQUEST['retype_password'];

    if($current_password == ''){
        $error_message .= "Your must enter Current Password! <br>";
    }
    if($new_password == ''){
        $error_message .= "Your must fill New Password! <br>";
    }
    if($retype_password == ''){
        $error_message .= "Your must fill Retype Password! <br>";
    }


    if ($current_password !== '' && $new_password !== '' && $retype_password !== '' && $current_password == $cookie_password) {

        setcookie('password', $new_password, time() + (86400 * 30), "/");

        header("location: logout.php");
    }else{
        echo "Wrong Current Password!";
    }
    

    
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th colspan="2" width="600px" height="80px">
                <h2 align="left"><br>&nbsp;X Company</h2>
                <h5 align="right">
                    Logged in as
                    <a href="viewProfile.php">Bob</a> |
                    <a href="login.php">Logout</a><br>
                </h5>
            </th>
        </tr>
        <tr>
           
        <td height="150px" align="center">
                <form method="post" action="forgotPasswordCheck.php">
                    
                        <h4 align="left">&nbsp;Account</h4>
                        (1) <a href="dashboard.php">Dashboard</a><br>
                        (2)<a href="viewProfile.php">ViewProfile</a><br>
                        (3) <a href="editProfile.php">EditProfile</a><br>
            
                        (4) <a href="changePicture.php">ChangeProfilePicture</a><br>
                        (5)<a href="changePass.php">ChancePassword</a><br>
                        (6)<a href="login.php">Logout</a><br>
                           
                   
                </form>
            </td>

            <td height="150px" align="center">
           
           <form method="post" action="#">
                   <fieldset>
                       <legend>Change Password</legend>
                       <label for="Curent Password">Curent Password:</label>
                            <input type="text" name="current_password" id="Curent Password" value=""><br><br>
                            <label for="New Password">New Password:</label>
                            <input type="New Password" name="new_password" id="New Password" value=""><br><br>
                            <label for="Retype New Password">Retype New Password:</label>
                            <input type="Retype New Password" name="retype_password" id="Retype New Password" value=""><hr><br><br>
                       <input type="submit" name="submit" value="Submit">
                   </fieldset>
               </form>
           </td>
        </tr>
        <tr>
            <td colspan="2" height="50px" align="center">
                &copy;  Coopyright ©2017
            </td>
        </tr>
    </table>
</body>
</html>
