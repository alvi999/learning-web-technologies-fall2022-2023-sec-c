<?php
require_once("../model/userModel.php");

session_start();

if (isset($_POST['submit'])) {
    $userId = $_POST['userId'];
    $password = $_POST['password'];

  
    $userData = login($userId, $password);

    if ($userData) {
        $_SESSION['user_id'] = $userId;

        if ($userData['user_type'] === 'Admin') {
            
            $_SESSION['user_type'] = 'Admin';
            setcookie("user_id", $userId, time() + (86400 * 30), "/");
            header('Location: ../view/admin_home.html');
        } else {
           
            $_SESSION['user_type'] = 'User';
            setcookie("user_id", $userId, time() + (86400 * 30), "/");
            header('Location: ../view/user_home.html');
        }
        exit();
    } else {
        echo "Invalid credentials. Please try again or register.";
    }
}
?>