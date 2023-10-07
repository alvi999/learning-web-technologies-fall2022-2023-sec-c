<?php
   $gender=$_REQUEST["gender"];
  // echo $gender;
?>


<html>
<head>
    <title>Gender</title>
</head>
<body>

    <form method="post" action="#" enctype="">

        <table border="1">
          
           <fieldset style="height: 60px;width: 250px;">
                <legend >Gender</legend> 
                <input type="radio" name="gender" value="Male" <?php if(isset($gender) && $gender == "Male"){echo "checked";} ?>> Male
                <input type="radio" name="gender" value="Female" <?php if(isset($gender) && $gender == "Female"){echo "checked";} ?>> Female
                <input type="radio" name="gender" value="Other" <?php if(isset($gender) && $gender == "Other"){echo "checked";} ?>> Other
             
           </fieldset>
                
         </table>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>