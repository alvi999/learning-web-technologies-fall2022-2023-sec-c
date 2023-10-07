<?php
$selectedDegrees = [];

if(isset($_POST["degree"])) {
    $selectedDegrees = $_POST["degree"];
}
?>

<html>
<head>
    <title>degree</title>
</head>
<body>

    <form method="post" action="#" enctype="">

        <table border="1">
          
           <fieldset style="height:50px;width: 200px;" >
                <legend>Degree</legend> 
                <input type="checkbox" name="degree[]" value="SSC" <?php if(in_array("SSC", $selectedDegrees)) echo "checked"; ?>> SSC
                <input type="checkbox" name="degree[]" value="HSC"<?php if(in_array("HSC", $selectedDegrees)) echo "checked"; ?>> HSC
                <input type="checkbox" name="degree[]" value="BSc"<?php if(in_array("Bsc", $selectedDegrees)) echo "checked"; ?>>BSc
          
           </fieldset>
                
         </table>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>