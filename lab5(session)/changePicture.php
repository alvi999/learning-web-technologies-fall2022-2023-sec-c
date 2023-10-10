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
                        (2)<a href="viewProfile.php">ViewProfile</a><br>
                        (3) <a href="editProfile.php">EditProfile</a><br>
            
                        (4) <a href="changePicture.php">ChangeProfilePicture</a><br>
                        (5)<a href="changePass.php">ChancePassword</a><br>
                        (6)<a href="login.php">Logout</a><br>
                           
                   
                </form>
            </td>

            <td height="150px" align="center">
           
            <form method="" action="" enctype="">
           
           <fieldset style="height: 150px;width: 350;">
              <legend>Profile picture</legend>
              <img src="download.png" alt="Profile Picture" width="60" height="60"><br><br>
              <label for="picture"> Picture </label>
              <input type="file" id="picture" name="picture"><br><br>
              <input type="submit" value="Submit">
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
