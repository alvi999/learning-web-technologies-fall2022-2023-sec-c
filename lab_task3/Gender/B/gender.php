<?php
   $gender=$_REQUEST["gender"];
   echo $gender;
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
                <input type="radio" name="gender" value="" /> Male
                <input type="radio" name="gender" value=""/> female
                <input type="radio" name="gender" value=""/>other
             
           </fieldset>
                
         </table>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>