<?php

	session_start();

	include "koneksi.php";

	$username = $_POST["username"];
   $password = $_POST["password"];

   $sql = "SELECT * FROM t_admin WHERE username = '$username' and password = '$password' limit 1";
   $total = mysqli_query($conn, $sql);
   $result = mysqli_num_rows($total);

   if ($result == True) {
        $data_admin = mysqli_fetch_array($total);
        $_SESSION['id_admin'] = $data_admin['id_admin'];
        $_SESSION['nm_admin'] = $data_admin['nm_admin'];

        echo "<script>alert('Anda berhasil Login');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?user=$result'>";
   } else {
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
        echo "<script>alert('Login anda gagal');</script>";
   }
