<?php
session_start();
//session_destroy();
//session_unset($_SESSION['flag']);
unset($_SESSION['auth']);
header('location: ../views/login.php');