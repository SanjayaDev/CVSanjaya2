<?php
    include_once 'koneksi.php';

    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM pesan WHERE id='$id'");

    header("location:anjay.php");
?>