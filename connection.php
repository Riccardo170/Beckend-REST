<?php
$servername = "172.17.0.1:3306";
    $user = "root";
    $pass = "ricca";
    $db="mydb";

    // Create connection
    $conn = mysqli_connect($servername, $user, $pass, $db) or die("Connessione non riuscita". mysqli_connect_error());
?>