<?php
     require ("../controller/registerCheck.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
      
    <h2>Register New Employee</h2>
    <form id="registrationForm"  action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="contact">Contact Number:</label>
        <input type="text" id="contact" name="contact" required><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Register</button> 
        <a herf="logIn.php">LogIn</a>
    </form>

    <script src="../assets/js/registerValidation.js"></script>
</body>
</html>
