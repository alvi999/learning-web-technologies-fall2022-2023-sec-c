<?php
require_once('db.php');

function login($username, $password, $remember)
{
    $con = getConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {

        while ($row = mysqli_fetch_assoc($result)) {
            $userInfo = $row;
            $userId = $row['id'];
            $userType = $row['user_type'];
            $username = $row['username'];
        }

        if ($remember) {
            $remembering_timespan = time() + 7 * 24 * 60 * 60;
            setcookie('userId', $userId,  $remembering_timespan, "/");
            setcookie('userType', $userType,  $remembering_timespan, "/");
            setcookie('username', $username,  $remembering_timespan, "/");
            setcookie('loggedIn', true,  $remembering_timespan, "/");
            setcookie('auth', true,  $remembering_timespan, "/");
            setcookie('userInfo', json_encode($userInfo),  $remembering_timespan, "/");
        } else {
            session_start();
            $_SESSION['userId'] = $userId;
            $_SESSION['userType'] = $userType;
            $_SESSION['username'] = $username;
            $_SESSION['loggedIn'] = true;
            $_SESSION['auth'] = true;
            $_SESSION['userInfo'] = json_encode($userInfo);
        }

        return ['success' => true];
    } else {

        return ['error' => "Invalid credentials!"];
    }
}
function register($name, $username, $email, $gender, $password) {

    $con = getConnection();
    $sql = "select * from users where username='{$username}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return ['error' => "Username is already taken"];
    }
    $sql = "select * from users where email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return ['error' => "The email is already in use"];
    }

    $sql = "insert into users (name, username, email, gender, password) 
    values (
        '$name',
        '$username',
        '$email',
        '$gender',
        '$password')";
    $result = mysqli_query($con, $sql);


    if ($result) {
        return ['success' => "success"];
    } else {

        return ['error' => "Database error!"];
    }
}

function getUser($id)
{
    session_start();
    if ($_SESSION['username']) {
        $id = $_SESSION['user']['id'];
    }
    $con = getConnection();
    $sql = "select * from users where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }
        $user = $users[0];
        print_r($user[0]);

        session_start();
        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'password' => $user['password']];

        $_SESSION['auth'] = "true";
        if ($user['type'] == 'admin') {
            header('location: ../views/admin_home.php');
        } else {
            header('location: ../views/user_home.php');
        }
    } else {

        return false;
    }
}


function updateUser($user)
{
    $con = getConnection();

    $id = $user['id'];
    $username = $user['username'];
    $email = $user['email'];


    $checkEmailQuery = "SELECT id FROM users WHERE email = '$email' AND id != $id";
    $result = mysqli_query($con, $checkEmailQuery);

    if (mysqli_num_rows($result) > 0) {

        return false;
    }


    $sql = "UPDATE users SET username = '$username', email = '$email' WHERE id = $id";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
?>