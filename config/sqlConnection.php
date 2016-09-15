<?php
if ($_SERVER['HTTP_HOST'] == 'localhost'){
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "abc";


    $conn = mysqli_connect($hostname, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
}

?>