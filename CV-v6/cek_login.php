<?php
    session_start();
    include_once 'koneksi.php';

    $user   = $_POST['username'];
    $pass   = $_POST['password'];

    $data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$user' AND pass='$pass'");

    $cek = mysqli_num_rows($data);

    if($cek > 0) {
        $_SESSION['username'] = $user;
        $_SESSION['status'] = "login";
        header("location:anjay.php");
    } else {
        header("location:wow.php?pesan=gagal_login");
    }
?>