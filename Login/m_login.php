<?php
    session_start();
    include "connect.php";

    if (!empty($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (isset($username) && isset($password)) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
            $stmt->bind_param('s',$username);
            $stmt->execute();
            $hasil = $stmt->get_result();
            $user = $hasil->fetch_object();
            
            $passVerify = password_verify($password,$user->password);

            if ($passVerify) {
                $_SESSION["user_id"] = $user->id;
                $_SESSION["username"] = $user->username;
                header("location: home.php");
            } else {
                header("location: index.php");
            }

        }
    }
?>