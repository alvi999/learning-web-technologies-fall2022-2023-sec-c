<?php
if (isset($_POST['submit'])) {
    $error_messages = [];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    // Validation rules for username
    if (strlen($username) < 2 || !isValidUsername($username)) {
        $error_messages[] = "Username is invalid. It must contain at least two alphanumeric characters, period, dash, or underscore only.";
    }

    // Validation rules for password
    if (strlen($password) < 8 || !isValidPassword($password)) {
        $error_messages[] = "Password is invalid. It must not be less than eight characters and contain at least one of the special characters (@, #, $, %).";
    }

    if ($password !== $confirm_pass) {
        $error_messages[] = "Password and confirm password do not match.";
    }

    if (empty($error_messages)) {
        // Validation passed, and no errors
        // You can save the registration data here
        // For simplicity, we'll just display a success message
        echo "Registration successful!";
    } else {
        // Display error messages in black color
        foreach ($error_messages as $error_message) {
            echo '<font color="black">' . $error_message . '</font><br>';
        }
    }
}

function isValidUsername($username) {
    $validCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789.-_';

    if (strlen($username) < 2) {
        return false;
    }

    for ($i = 0; $i < strlen($username); $i++) {
        if (strpos($validCharacters, $username[$i]) === false) {
            return false;
        }
    }

    return true;
}

function isValidPassword($password) {
    if (strlen($password) < 8) {
        return false;
    }

    if (strpbrk($password, '@#$%') === false) {
        return false;
    }

    return true;
}
?>



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
                <form action="#" method="post">
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
                        <input type="password" name="confirm_pass" required><br><br>
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




