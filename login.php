<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
    
}
?>
