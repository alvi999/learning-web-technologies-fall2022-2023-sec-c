<?php 

$dbhost = '127.0.0.1';
$dbname = 'registration_db';
$dbuser = 'root';
$dbpassword = '';


function getConnection(){
    global $dbhost;
    global $dbname;
    global $dbpassword;
    global $dbuser;

    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    return $conn;
}

?>