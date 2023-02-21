<?php
    include "../database/connect.php";

    $namaLengkap = $_POST['namaLengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);
    
     // Verify the hash code against the unencrypted password entered 
//   $verify = password_verify($unencrypted_password, $hash); 
  
  // Print the result depending if they match 
//   if ($verify) {
//        echo 'Correct Password!'; 
//        }
 
//   else { 
//       echo 'Password is Incorrect';
//        }




    $query = "INSERT INTO tb_user(nama_lengkap, email, alamat) VALUE('$namaLengkap','$email','$alamat')";
    $result = mysqli_query($conn, $query);
    $query = "INSERT INTO users(username, password) VALUE('$username','$hash')";
    $result1 = mysqli_query($conn,$query);

    if($result){
        echo "Berhasil disimpan";
    }else {
        echo "gagal disimpan".$result."<br>". mysqli_error($conn);
    }


    mysqli_close($conn);
?>