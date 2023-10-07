<?php
    $selectedDegrees = $_REQUEST["degree"];
    foreach ($selectedDegrees as $degree) {
        echo $degree . "<br>";
    }
?>