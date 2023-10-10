<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){
    session_destroy();
    header('location: login.php');
    
}else{
    header('location: login.php');
}


?>