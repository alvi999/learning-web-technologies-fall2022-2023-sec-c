<?php
  require_once("../model/userModel.php");

    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $id = $_REQUEST['id'];
    
    $user = [
        'username' => $username, 
        'email' => $email, 
        "id" => $id];

    updateUser($user);
    header("location: ../view/view_users.php");

?>