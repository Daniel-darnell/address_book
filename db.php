<?php 
// mysql database connection using MySQLi
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "address_book";

    // creates the connection to the database
    $conn = mysqli_connect($serverName, $userName, $password, $dbname);

    if (!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    echo "Connection Success!!"
?>