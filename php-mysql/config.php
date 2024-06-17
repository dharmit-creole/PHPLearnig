<?php
    $host = "localhost";
    $username = "root";
    $password = null;
    $database = "college";

   $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "connection Done";
   echo "<br>";

?>