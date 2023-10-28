<?php
require_once('../controller/sessionCheck.php');
require_once('../model/userModel.php');
    $id =$_GET['id'];
    $user = getUser($id);
?>

<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
<table border>
    <tr>
        <td>Username</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    <tr>
        <form method="post" action="../controller/editCheck.php">
            <td> <input type="hidden" name="id" value="<?= $user['id'] ?>" />
                    <input type="text" name="username" value="<?= $user['username'] ?>" />
            </td>       
            <td><input type="email" name="email" value="<?= $user['email'] ?>" /></td>
            <td><input type="submit" name="submit" value="Edit" /></td> 
        </form>    
    </tr>
</table>
</body>
</html>