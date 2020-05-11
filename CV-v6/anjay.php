<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">

    <title>Admin | CV Sanjaya</title>
</head>
<body>

    <?php
        
        if($_SESSION['status'] != "login") {
            header("location:wow.php?pesan=maling");
        }
    ?>
    
    <nav class="green">
        <div class="nav-wrapper">
            <div class="container">
                <a href="" class="brand-logo">Selamat datang <?php echo $_SESSION['username']; ?></a>
                <a href="" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="logout.php" class="btn red">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <ul id="mobile" class="sidenav">
        <li><a href="logout.php" class="btn red">Logout</a></li>
    </ul>

    <div class="container">
        <div class="card-panel">
            <div class="row">
                <div class="col m6 s12">
                  <img src="img/me.jpg" alt="">  
                </div>
                <div class="col m6 s12">
                    <a href="#cek" class="modal-trigger">Cek Komentar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-fixed-footer" id="cek">
        <div class="modal-content">
            <table>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>No HP</td>
                        <td>Pesan</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once 'koneksi.php';

                        $no = 1;
                        $tbl_pesan = mysqli_query($koneksi, "SELECT * FROM pesan");

                        while($p = mysqli_fetch_array($tbl_pesan)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $p['nama']; ?></td>
                        <td><?php echo $p['email']; ?></td>
                        <td><?php echo $p['no_hp']; ?></td>
                        <td><?php echo $p['pesan']; ?></td>
                        <td><a href="hapus.php?id=<?php echo $p['id']; ?>" class="btn red">Hapus</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <a href="" class="btn modal-close">Tutup</a>
        </div>
    </div>


    <script src="js/materialize.js"></script>
    <script>
        const side = document.querySelectorAll('.sidenav')
        M.Sidenav.init(side);

        const modal = document.querySelectorAll('.modal');
        M.Modal.init(modal);
    </script>
</body>
</html>