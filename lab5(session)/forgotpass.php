

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th width="600px" height="80px">
                <h2 align="left"><br>&nbsp;X Company</h2>
                <h5 align="right">
                    <a href="publicHome.php">Home</a>|
                    <a href="registration.php">Register</a>|
                    <a href="login.php">Login</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td height="150px" align="center">
                <form method="post" action="forgotPasswordCheck.php">
                    <fieldset>
                        <legend>Forgot Password</legend>
                        <label for="email">Enter Email:</label>
                        <input type="email" name="email" id="email" required><br><br>
                        <input type="submit" name="submit" value="Submit">
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td height="50px" align="center">
                &copy;  Coopyright ©2017
            </td>
        </tr>
    </table>
</body>
</html>
