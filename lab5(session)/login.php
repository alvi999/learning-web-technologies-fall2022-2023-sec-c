<?php
session_start();
if (isset($_POST['submit'])) {
    $error_message = '';
    $login_success = false;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '') {
        $error_message .= "You must fill in the User Name! <br>";
    }
    if ($password == '') {
        $error_message .= "You must fill in the Password! <br>";
    }

    // Retrieve cookie values (assuming they were set during registration)
    $cookie_username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
    $cookie_password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';

    // Check if the provided username and password match the stored cookie values
    if ($username == $cookie_username && $password == $cookie_password) {
        $login_success = true;
    }

    if ($login_success) {
        $_SESSION["user_login"] = "login_success";
        header('location: dashboard.php');
        exit();
    } else {
        $error_message = "Invalid login details! Try Again!";
    }
}
?>


<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
            <table border=1 align="center">
               
                <tr >
                <th width=600px height=80px>
                           <h2 align="left"><br>&nbsp;X Company</h2>
                           <h5 align="right">
                           <a href="publicHome.php">Home</a>|
                           <a href="registration.php">Register</a>|
                           <a href="login.php">Login</a>
                           </h5>
                       
                    </th>
                  

                   
                </tr>
                   
                <tr>
                    <td height=150px align="center">
                    <form method="post" action="#">
            <fieldset >
            <legend>Login</legend>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value=""><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value=""><br><br>
            <input type="checkbox" name="remember_me" id="remember_me">
            <label for="remember_me">Remember Me</label><br><br>
            <input type="submit" name="submit" value="Submit">
            <a href="forgotPassword.php">Forgot Password</a><br><br>
           
        </fieldset>
    </form>
                    </td>
                
                </tr>
                <tr >
                    <td height=50px align="center">
                        Coopyright ©2017
                    </td>
                
                </tr>
        
            </table>
     
</body>
</html>