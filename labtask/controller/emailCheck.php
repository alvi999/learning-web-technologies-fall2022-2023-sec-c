<?php
include('../model/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];
    $conn = getConnection();
    $sql = "SELECT * FROM persons WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo 'not_available';
    } else {
        echo 'available';
    }
}
?>
