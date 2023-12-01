<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <a href="logout.php">Logout</a>

    <ul>
        <li><a href="register.php">Register New Employee</a></li>
        <li><a href="update.php">Update Employee Info</a></li>
        <li><a href="delete.php">Delete Employee Info</a></li>
        <li><a href="search.php">Search Employee</a></li>
    </ul>
</body>
</html>
