<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/register.css">
    <title>Register</title>
    <script>
        function checkEmailAvailability() {
            let email = document.getElementById('email').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../controller/emailCheck.php', true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4) {
                    if (xhttp.status === 200) {
                        let response = this.responseText;
                        if (response === 'available') {
                            document.getElementById('email-message').innerHTML = 'Email is available.';
                        } else {
                            document.getElementById('email-message').innerHTML = 'Email is not available.';
                        }
                    } else {
                        console.error('Request failed with status:', this.status);
                    }
                }
            };
            console.log('aaaaa')
            xhttp.send('email=' + email);
        }
    </script>
   <?php
include_once("../model/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = getConnection();

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO persons (name, phone, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $phone, $email, $password);

    // Execute the statement
    $result = $stmt->execute();

    if ($result) {
        // Registration successful, redirect to login page
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

</head>
<body>
    <form method="post" action="register.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br>
        
        <label for="email">Email:</label>
        <input type="text" name="email" onblur="checkEmailAvailability()" id="email">
        <span id="email-message"></span><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" name="confirm_password" required><br>
        
        <input type="submit" value="Register">
    </form>
    <script src="../assets/js/registerValidation.js" ></script>
</body>
</html>
