<?php
include_once("../controls/admin_homeCheck.php");
include_once("../controls/userData.php");
?>
<center>
	<h1>Welcome <?php echo $user['name'] ?>!</h1>
	<a href="profile.php">Profile</a>
	<br />
	<a href="change_password.html">Change Password</a>
	<br />
	<a href="view_users.php">View Users</a>
	<br />
	<a href="logout.php">Logout</a>
</center>