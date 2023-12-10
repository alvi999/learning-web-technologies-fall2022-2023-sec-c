<?php
include_once("../controller/registrationCheck.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="../../assets/CSS/Auth/registration.css"> -->
</head>

<body>
    <table  border="1" align="center">
        <tr>
            <th colspan="2">
            <h2 align="left">
                   
                   Course Managment System
               </h2>
                <h5 align="right">
                    <a href="/login.php">Login</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <center>
                    <form name="registrationForm" action="" method="POST" onsubmit="validateForm(e)">
                        <h3>REGISTRATION</h3>
                        <hr class="hr-style">
                        <table class="form" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><label for="name">Name</label></td>
                                <td>: <input type="text" id="name" name="name"></td>
                            </tr>
                            <tr>
                                <td><label for="name">Username</label></td>
                                <td>: <input type="text" id="username" name="username"></td>
                            </tr>
                            <tr>
                                <td><label for="email">Email</label></td>
                                <td>: <input type="text" id="email" name="email"></td>
                            </tr>
                            <tr>
                                <td><label>Gender</label></td>
                                <td>:
                                    <input type="radio" id="male" name="gender" value="Male"> Male
                                    <input type="radio" id="female" name="gender" value="Female"> Female
                                </td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label></td>
                                <td>: <input type="password" id="password" name="password"></td>
                            </tr>
                            <tr>
                                <td><label for="confirmPassword">Confirm Password</label></td>
                                <td>: <input type="password" id="confirmPassword" name="confirmPassword"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <br>
                                    <p id="error" class="error-text"></p>
                                </td>
                            </tr>
                        </table>
                        <div>
                            <input type="button" value="Sign Up" name="submit" onclick="validateForm()" />
                        </div>
                    </form>
                </center>
            </td>
        </tr>
    </table>
    <script src='../assets/JS/registration.js'></script>
</body>

</html>