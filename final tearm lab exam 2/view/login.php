<?php
 include_once("../controller/loginCheck.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
	<!-- <link rel="stylesheet" type="text/css" href="../../assets/CSS/Auth/login.css"> -->
</head>

<body>
    <table border="1" align="center">
        <tr>
            <th colspan="2">
                <h2 align="left">
                   
                    Course Managment System
                </h2>
                <h5 align="right">
                  
                    <a href="registration.php">Signup</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                
                <center>
                    <form action="" method="POST" enctype="">

                        <h3>Login</h3>
                        <hr style="margin: 20px 100px;">
                        <table class="form" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><label for="username">Username</label> </td>
                                <td> : <input id="username" type="text" name="username" value="<?php echo $username ?>" </td>
                            </tr>

                            <tr>
                                <td><label for="password">Password</label> </td>
                                <td> : <input id="password" type="password" name="password" value="<?php echo $password ?>" </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <br>
                                    <p id="error" style="color: red;"></p>
                                </td>
                            </tr>
                        </table>
                        <input id="remember" type="checkbox" name="remember" value="remember" <?= $remember ? 'checked="checked"' : '' ?>> Remember me<br>
                        <p style="margin-bottom: 20px;"><a style="margin-bottom: 20px;" href="registration.php">Dont Have an Account? Sign Up</a></p>
                        <p style="margin-bottom: 20px;"><a style="margin-bottom: 20px;" href="forgot.php">Forgot your Password?</a></p>
                        <div style="margin-top: 50px;">
                            <p style="color: red;"><?= $error ?></p>
                            <input type="button" value="Sign In" name="submit" onclick="validateForm()" />
                        </div>
                    </form>
                </center>
            </td>
        </tr>
    </table>

    <script src='../assets/JS/login.js'></script>
</body>

</html>
