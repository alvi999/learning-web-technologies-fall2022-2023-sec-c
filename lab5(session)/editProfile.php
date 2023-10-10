<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    $cookie_name = $_COOKIE['name'];
    $cookie_email = $_COOKIE['email'];
    $cookie_gender = $_COOKIE['gender'];
    $cookie_date_of_birth = $_COOKIE['date_of_birth'];
    
}else{
    header('location: login.php');
}


if(isset($_REQUEST['submit'])){

    $error_message = '';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $gender = $_REQUEST['gender'];
    $date_of_birth = $_REQUEST['dob'];

    if($name == ''){
        $error_message .= "Your must fill Name! <br>";
    }
    if($email == ''){
        $error_message .= "Your must fill Email! <br>";
    }
    if($gender == ''){
        $error_message .= "Your must fill Gender! <br>";
    }
    if ($date_of_birth == '') {
        $error_message .= "You must fill Date of Birth! <br>";
    }


    if ($name !== '' && $email !== '' && $gender !== '' && $date_of_birth !== '') {

        setcookie('name', $name, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        setcookie('gender', $gender, time() + (86400 * 30), "/");
        setcookie('date_of_birth', $date_of_birth, time() + (86400 * 30), "/");

        header("location: editProfile.php");
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
                    <a href="viewProfile.php"><?php echo $cookie_name; ?></a> |
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
                        (6)<a href="login.php.php">Logout</a><br>
                           
                   
                </form>
            </td>

            <td height="150px" align="center">
           
           <form method="post" action="#">
                   <fieldset>
                       <legend>Edit Profile</legend>
                       <label for="name">Name:</label>
                       <input type="text" name="name" id="name" value="<?php echo $cookie_name; ?>"><br><br>
                       <label>Email</label>
                        <input type="email" id="email" name="email" value="<?php echo $cookie_email; ?>">
                        <input type="button" value="i" title="hint: xyz@gmail.com"><br><br>
                       <label for="gender">Gender: </label>
                       <input type="radio" name="gender" value="Male" <?php if($cookie_gender == 'Male'){echo 'checked' ;} ?> /> Male
                       <input type="radio" name="gender" value="Female" <?php if($cookie_gender == 'Female'){echo 'checked'; } ?> /> Female
                       <input type="radio" name="gender" value="Other" <?php if($cookie_gender == 'Other'){echo 'checked'; } ?> /> Other<br><br>
                       <label for="dob">Date of Birth:</label>
                       <input type="date" name="dob" value="<?php echo $cookie_date_of_birth; ?>" required><br><br>
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
