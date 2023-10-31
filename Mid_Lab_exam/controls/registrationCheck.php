<?php

include_once("../models/userModel.php");
$id = "";
$password = "";
$confirmPassword = "";
$name = "";
$type = "";
if (isset($_POST["submit"])) {

    $id = $_POST["id"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $name = $_POST["name"];
    if (isset($_POST["type"])) {

        $type = $_POST["type"];
    } else {
        echo "Please select a user type\n\n";
    }



    if (!$_POST['id'] || !$_POST['password'] || !$_POST['confirmPassword'] ||  !$_POST['name']) {
        echo "Please enter all required fields\n";
    } else if ($password != $confirmPassword) {
        echo "Password did not match";
    } else if (strlen($password) < 6) {
        echo "Password musr be at least 6 characters\n";
    } else {
        register($id, $name, $password, $type);
    }
}