<?php
$bloodgroup = "";

if(isset($_POST["bloodgroup"])) {
    $bloodgroup = $_POST["bloodgroup"];
}
?>

<html lang="en">
    <head>
       <title>Blood Group</title>
    </head>
    <body>
       
       <form method="" action="#" enctype="">
           
           <label for="bloodGroup">Blood Group:</label>
           <select id="bloodGroup" name="bloodGroup">
            <option value="A+" <?php if($bloodgroup == "A+") echo "selected"; ?>>A+</option>
            <option value="A-" <?php if($bloodgroup == "A-") echo "selected"; ?>>A-</option>
            <option value="B+" <?php if($bloodgroup == "B+") echo "selected"; ?>>B+</option>
            <option value="B-" <?php if($bloodgroup == "B-") echo "selected"; ?>>B-</option>
            <option value="O+" <?php if($bloodgroup == "O+") echo "selected"; ?>>O+</option>
            <option value="O-" <?php if($bloodgroup == "O-") echo "selected"; ?>>O-</option>
            <option value="AB+" <?php if($bloodgroup == "AB+") echo "selected"; ?>>AB+</option>
            <option value="AB-" <?php if($bloodgroup == "AB-") echo "selected"; ?>>AB-</option>
           </select><br><br>
           <input type="submit" value="Submit">
       </form>
   
       
    </body>
    </html>