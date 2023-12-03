<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
    // Check if the URL parameters are set
    if (isset($_GET['name']) && isset($_GET['phone']) && isset($_GET['email'])) {
        // Get values from URL parameters
        $name = $_GET['name'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];

        // Display the values
        echo "Welcome<br>";
        echo "Name: $name<br>";
        echo "Phone: $phone<br>";
        echo "Email: $email<br>";
    } else {
        echo "Invalid URL parameters.";
    }
    ?>
</body>
</html>
