<?php
    include 'koneksi.php';

    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $hp     = $_POST['no_hp'];
    $pesan  = $_POST['pesan'];

    mysqli_query($koneksi, "INSERT INTO pesan VALUES(NULL, '$nama', '$email', '$hp', '$pesan')");

    header("location:index.php?pesan=terkirim");
?>