<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Login Admin</title>
</head>
<body class="blue">

    <?php
        if(isset($_GET['pesan'])) {
            if($_GET['pesan'] == "gagal_login") {
                echo "<script>alert('Gagal Login! Username/Password salah!')</script>";
            } elseif($_GET['pesan'] == "maling") {
                echo "<script>alert('Harus Login dahulu!')</script>";
            } elseif($_GET['pesan'] == "logout") {
                echo "<script>alert('Anda telah logout!')</script>";
            }
        }
    ?>
    
    <div class="container" style="padding: 10px; margin-top: 100px;">
        <div class="row">
            <div class="col m6 s8 white offset-m3 offset-s2">
            <h4 class="center">LOGIN</h4>
            <hr style="border: 2px solid blue;">
            <form action="cek_login.php" method="post">
                <div class="row">
                    <div class="col m8 s10 offset-s1 offset-m2">
                        <div class="input-field">
                            <i class="material-icons prefix">person</i>
                            <label for="user">Username</label>
                            <input type="text" name="username" id="user" class="autocomplete">
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">vpn_key</i>
                            <label for="pass">Password</label>
                            <input type="password" name="password" id="pass" class="autocomplete">
                        </div>
                        <input type="submit" value="Login" class="btn green wave-effect">
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>


    <script src="js/materialize.js"></script>
</body>
</html>