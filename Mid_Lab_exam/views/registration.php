<?php
include_once("../controls/registrationCheck.php")
?>

<center>
    <form action="" method="POST" enctype="">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <fieldset>
                        <legend>
                            <h3>REGISTRATION</h3>
                        </legend>
                        Id<br /><input type="text" name="id" value="<?php echo $id ?>" /><br />
                        Password<br /><input type="password" name="password" value="<?php echo $password ?>" /><br />
                        Confirm Password<br /><input type="password" name="confirmPassword" value="<?php echo $confirmPassword ?>" /><br />
                        Name<br /><input type="text" name="name" value="<?php echo $name ?>" /><br />
                        User Type
                        <hr />
                        <input type="radio" name="type" value="user" <?php if ($type && $type == "user") {
                                                                            echo 'checked="checked"';
                                                                        }  ?> />User
                        <input type="radio" name="type" value="admin" <?php if ($type && $type == "admin") {
                                                                            echo 'checked="checked"';
                                                                        } ?> />Admin
                        <hr />
                        <input type="submit" value="Sign Up" name="submit" />
                        <a href=" login.php">Sign In</a>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</center>