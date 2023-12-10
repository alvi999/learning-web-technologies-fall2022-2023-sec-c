<?php

include_once("../model/userModel.php");

if (isset($_POST["data"])) {
    $error = "";
    $data = json_decode($_POST["data"], true);

    if (!$data['name']) {
        $error .= "Please enter your name<br>";
    }
    if (!$data['username']) {
        $error .= "Please enter your username<br>";
    }
    if (!$data['email']) {
        $error .= "Please enter a valid email<br>";
    } else {
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error .= "Enter a valid email address<br>";
        }
    }
    if (!$data['gender']) {
        $error .= "Please enter your gender<br>";
    }
    if (!$data['password']) {
        $error .= "Please enter your password<br>";
    } else if (strlen($data['password']) < 6) {
        $error .= "Password must be at least 6 characters long<br>";
    }
    if (!$error) {
        echo json_encode(register(
            $data['name'],
            $data['username'],
            $data['email'],
            $data['gender'],
            $data['password']
        ));
    } else {
        echo json_encode(['error' => $error]);
    }
}
?>