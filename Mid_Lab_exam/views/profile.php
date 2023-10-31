<?php
include_once("../controls/SessionCheck.php");
include_once("../controls/userData.php");

?>


<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td colspan="2" align="CENTER">Profile</td>
		</tr>
		<tr>
			<td>ID</td>
			<td><?php echo $user['id'] ?>
		</tr>
		<tr>
			<td>NAME</td>
			<td><?php echo $user['name'] ?></td>
		</tr>
		<tr>
			<td>USER TYPE</td>
			<td><?php echo $user['type'] ?></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><a href="home.php">Go Home</a></td>
		</tr>
	</table>
</center>