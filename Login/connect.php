<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihan";

    $conn = mysqli_connect($localhost,$username,$password,$dbname);

    if (!$conn) die("Gagal terhubung database ".mysqli_connect_error());