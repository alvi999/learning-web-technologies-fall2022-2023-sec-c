<?php

include_once("../model/userModel.php");
$username = "";
$password = "";
$remember = "";
$error = "";
if (isset($_POST["data"])) {
    $data = json_decode($_POST["data"], true);
    if (!$data['username']) {
        $usernameError = "Please enter a username";
    }
    if (!$data['password']) {
        $passwordError = "Please enter password";
    }
    if (
        $data['username'] &&
        $data['password']
    ) {
        echo json_encode(login(
            $data['username'],
            $data['password'],
            $data['remember']

        ));
    } else echo json_encode(['error' => "data not filled"]);
}
