<?php
require_once("../model/userModel.php");

if (isset($_REQUEST['submit'])) {
    $error_message = '';

    session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];
    $name = $_REQUEST['name'];

    if (isset($_REQUEST['user_type'])) {
        $userType = $_REQUEST['user_type'];
    } else {
        $userType = '';
    }

    if ($id == "" || $password == "" || $confirm_password == "" || $name == "") {
        echo "Please fill in all fields.";
    } elseif ($password != $confirm_password) {
        echo "Passwords do not match.";
    } elseif (!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '%')) {
        echo "Password must contain special characters (@, #, $, %).";
    } elseif (strlen($password) < 4) {
        echo "Password must be at least 4 characters long.";
    } else {
        $sql = RegistrationUser($id, $password, $name, $userType);

        if ($sql) {
            $_SESSION['user_id'] = $id; 

            
            setcookie("user_id", $id, time() + (86400 * 30), "/");

            $_SESSION['flag'] = "true"; 

            header('location: ../view/login.html'); 
        } else {
            echo "Invalid ";
        }
    }
}
?>