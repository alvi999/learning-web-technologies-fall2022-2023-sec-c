<?php
    require_once('db.php');

    function login($userId, $password){
        $con = getConnection();
        $sql = "select * from users where id='{$userId}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
   
    function RegistrationUser($id, $password, $name, $userType) {
        $con = getConnection();
        
        // Check if the ID already exists in the database
        $checkQuery = "SELECT id FROM users WHERE id = '$id'";
        $checkResult = mysqli_query($con, $checkQuery);
        
        if (mysqli_num_rows($checkResult) > 0) {

            echo "User ID already exists. Please choose a different ID.";
            return false;
        } else {
            
            $sql = "INSERT INTO users (id, password, name, user_type) VALUES ('$id', '$password', '$name', '$userType')";
            
            if (mysqli_query($con, $sql)) {
                return true; 
            } else {
                return false; 
            }
        }
    }
    
    

    function getUser($id){
        $con = getConnection();
        $sql = "select * from users where id = '$id'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            echo "Invalid User";
            return false;
        }
    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function updateUser($user){

       
        $con = getConnection();


        $id = $user['id'];
        $username = $user['username'];
        $email = $user['email'];

        $sql = "UPDATE users SET username = '$username', email = '$email' WHERE id = $id";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function deleteUser($id){

        $con = getConnection();
        $sql = "DELETE FROM users WHERE id = $id";
        
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }


?>