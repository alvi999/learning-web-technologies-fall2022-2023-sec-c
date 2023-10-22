



<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        table {
            width: 500px;
        }
        fieldset {
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
          
            <td height="150px" align="center">
                <form action="../controller/registrationC.php" method="post">
                    <fieldset>
                        <legend>Registration</legend>
                        <label>Name</label>
                        <input type="text" name="name" required><br><br>
                        <label>Email</label>
                        <input type="email" id="email" name="email">
                        <input type="button" value="i" title="hint: xyz@gmail.com"><br><br> 
                        <label>Username</label>
                        <input type="text" name="username" required><br><br>
                        
                        <label>Password</label>
                        <input type="password" name="password" required><br><br>
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" required><br><br>
                        <fieldset>
                            <legend>Gender</legend> 
                            <input type="radio" name="gender" value="Male" /> Male
                            <input type="radio" name="gender" value="Female" /> Female
                            <input type="radio" name="gender" value="Other" /> Other<br><br>
                        </fieldset>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="date" name="dob" required><br><br>
                        </fieldset>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </fieldset>

                    
                </form>
            </td>
        </tr>
     
    </table>
</body>
</html>




