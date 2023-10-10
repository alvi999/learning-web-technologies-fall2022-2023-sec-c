<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    $name = $_COOKIE['name'];
    
}else{
    header('location: login.php');
}


?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
</head>
<body>
    <table border="1" align="center">
        <tr >
            <th colspan="2" width="600px" height="80px">
                <h2 align="left"><br>&nbsp;X Company</h2>
                <h5 align="right">
                    Logged in as
                    <a href="viewProfile.php"><?php echo $name; ?></a>|
                    <a href="login.php">Logout</a><br>
                    
                </h5>
            </th>
        </tr>
        <tr>
            <td height="150px" align="center">
                <form method="post" action="forgotPasswordCheck.php">
                    
                        <h4 align="left">&nbsp;Account<hr></h4>
                        (1) <a href="dashboard.php">Dashboard</a><br>
                        (2)<a href="viewProfile.php">ViewProfile</a><br>
                        (3) <a href="editProfile.php">EditProfile</a><br>
            
                        (4) <a href="changePicture.php">ChangeProfilePicture</a><br>
                        (5)<a href="changePass.php">ChancePassword</a><br>
                        (6)<a href="login.php">Logout</a><br>
                           
                   
                </form>
            </td>
            <td width="400px">
                <h4 >&nbsp;Welcome Bob</h4>
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
