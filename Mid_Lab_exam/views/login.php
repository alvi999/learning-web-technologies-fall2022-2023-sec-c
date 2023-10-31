<?php
include_once("../controls/loginCheck.php")
?>


<center>
	<form action="" method="POST" enctype="">
		<table border=" 0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend>
							<h3>LOGIN</h3>
						</legend>
						User Id<br />
						<input type="text" name="id" value="<?php echo $id ?>" /><br />
						Password<br />
						<input type="password" name="password" value="<?php echo $password ?>" />
						<br />
						<hr />
						<input type="submit" value="Login" name="submit">
						<a href="registration.php">Register</a>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>