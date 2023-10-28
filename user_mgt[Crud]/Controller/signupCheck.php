<?php
    session_start();
    require_once('../model/userModel.php');
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];

    if($username == "" || $password == "" || $email == "" ){
        echo "null username/password/email!";
    }else{
        $user = [
                    'username'=> $username, 
                    'password'=>$password, 
                    'email'=>$email
                ];
        
        $status = createUser($username, $password, $email);
        if($status){
            $_SESSION['user'] = $user;
            header('location: ../view/login.php');
        }else{
                echo "invalid user!";
            }
    }
?>