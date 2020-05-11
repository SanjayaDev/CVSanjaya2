<?php
    session_start();
    session_destroy();
    header("location:wow.php?pesan=logout");
?>