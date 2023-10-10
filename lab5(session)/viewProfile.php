<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    $name = $_COOKIE['name'];
    $email = $_COOKIE['email'];
    $gender = $_COOKIE['gender'];
    $date_of_birth = $_COOKIE['date_of_birth'];
    
}else{
    header('location: login.php');
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
                    <a href="viewProfile.php"><?php echo $name; ?></a> |
                    <a href="login.php">Logout</a><br>
                </h5>
            </th>
        </tr>
        <tr>
            <td height="150px" align="center">
                <form method="post" action="forgotPasswordCheck.php">
                    <h4 align="left">&nbsp;Account</h4>
                    (1) <a href="dashboard.php">Dashboard</a><br>
                    (2)<a href="viewProfile.php">View Profile</a><br>
                    (3) <a href="editProfile.php">Edit Profile</a><br>
                    (4) <a href="changePicture.php">Change Profile Picture</a><br>
                    (5)<a href="changePass.php">Change Password</a><br>
                    (6)<a href="login.php">Logout</a><br>
                </form>
            </td>
            <td height="150px" align="center">
                <form method="post" action="#">
                    <fieldset>
                        <legend>Profile</legend>
                        <img src="download.png" alt="Profile Picture" width="150" height="150"><br><br>
                        <label for="name">Name:</label>
                        <span><?php echo $name; ?></span><br><br>
                        <label for="email">Email:</label>
                        <span><?php echo $email; ?></span><br><br>
                        <label for="gender">Gender:</label>
                        <span><?php echo $gender; ?></span><br><br>
                        <label for="dob">Date of Birth:</label>
                        <span><?php echo $date_of_birth; ?></span><br><br>
                        <a href="changePicture.php">Change Profile Picture</a><br><br>
                        <a href="editProfile.php">Edit Profile</a><br>
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

</body>
</html>
