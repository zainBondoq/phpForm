<?php
    // check if the request method is POST (same as value from index.html file)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form values
    // because the request method is POST. then the values are stored in pre-defined map called $_POST
    // so to get the value just call $_POST['name'] 
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Print the values - (.) charachter is the concatination sign in php
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
    // do what ever here , as example check if the username and pass are correct
    // ....
}
?>
