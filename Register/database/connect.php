<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihan";

    $conn = mysqli_connect($localhost,$username,$password,$dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";
?>