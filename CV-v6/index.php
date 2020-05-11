<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Material Design-->
  <link rel="stylesheet" href="css/materialize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Custom CSS-->
  <link rel="stylesheet" href="style.css">

  <!--AOS-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  <title>My CV - Sanjaya</title>
</head>
<body id="home" class="scrollspy">

  <?php
    if(isset($_GET['pesan'])) {
      if($_GET['pesan'] == "terkirim" ) {
        echo "<script>alert('Pesan Terkirim! Terima kasih sudah mengirim pesan!')</script>";
      }
    }
  ?>
  

  <div class="navbar-fixed">
    <nav class="green">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#home" class="brand-logo">SNJY</a>
          <a href="" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT ME</a></li>
            <li><a href="#portfolio">PORTFOLIO</a></li>
            <li><a href="#certificate">CERTIFICATE</a></li>
            <li><a href="#contact">CONTACT US</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>


  <ul id="mobile" class="sidenav">
    <li><a href="#home">HOME</a></li>
    <li><a href="#about">ABOUT ME</a></li>
    <li><a href="#portfolio">PORTFOLIO</a></li>
    <li><a href="#certificate">CERTIFICATE</a></li>
    <li><a href="#contact">CONTACT US</a></li>
  </ul>

  <!--Parallax-->
  <div class="parallax-container">
    <div class="parallax">
      <img src="img/saya.jpg" data-aos="zoom-in" data-aos-duration="1000">
    </div>
    <h3 data-aos="fade-right" data-aos-duration="1000">Halo, Saya Sanjaya</h3>
    <p data-aos="fade-left" data-aos-duration="1000" class="bg">Seorang Web Developer & Network Administrator</p>
  </div>


  <!--About Me-->
  <section id="about" class="section scrollspy about">
    <h3 class="center light" data-aos="fade-up" data-aos-duration="1000">Tentang Saya</h3>
      <div class="container">
        <div class="card-panel hoverable">
          <div class="row">
            <div class="col m4 s12">
              <img src="img/me.jpg" data-aos="fade-right" data-aos-duration="1200">
            </div>
            <div class="col m8 s12">
              <h5 class="center light" data-aos="fade-up">Mohammad Ricky Sanjaya</h5>
              <p data-aos="fade-right" data-aos-duration="1000">Halo semuanya, perkenalkan nama saya Mohammad Ricky Sanjaya. Saya adalah Pengembang Situs Web. Saya tinggal di Bekasi, Indonesia dan menyukai perkembangan teknologi, khususnya di bidang Pengembangan Web dan Administrasi Jaringan</p>
              <p data-aos="fade-left" data-aos-duration="1000">Seorang laki-laki yang selalu belajar dan suka dengan perkembangan teknologi. Disiplin, pekerja keras, pekerja cepat, teliti, ulet adalah kemampuan yang saya miliki.</p>
              <p data-aos="fade-right" data-aos-duration="1000">Lahir pada tanggal 4 Juni 2002 di daerah Kabupaten Brebes Indonesia, dibesarkan oleh orang tua dan dibawa rantau ke Kabupaten Bekasi sejak kecil. Menempuh pendidikan formal sampai SMK jurusan Teknik Komputer dan Jaringan..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="skill">
    <div class="parallax-container">
      <div class="parallax">
        <img src="img/bg.jpg">
      </div>
      <div class="container">
        <div class="row">
          <div class="col m4 s12">
            <div class="card-panel center" data-aos="fade-up" data-aos-duration="1000">
              <i class="material-icons medium">laptop</i>
              <h5>Troubleshoot Pc/Laptop</h5>
              <p>Profesional memperbaiki kerusakan pada PC maupun Laptop</p>
            </div>
          </div>

          <div class="col m4 s12">
            <div class="card-panel center" data-aos="fade-up" data-aos-duration="1000">
              <i class="material-icons medium">devices_other</i>
              <h5>Web Developer</h5>
              <p style="padding-top: 25px;">Profesional membangun website interaktif dan dinamis</p>
            </div>
          </div>

          <div class="col m4 s12">
            <div class="card-panel center" data-aos="fade-up" data-aos-duration="1000">
              <i class="material-icons medium">network_wifi</i>
              <h5>Network Administrator</h5>
              <p>Profesional membangun jaringan skala kecil - menengah dengan Mikrotik dan Cisco</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="blue darken-1" style="padding: 10px;">
    <h3 class="center light white-text" data-aos="fade-up" data-aos-duration="1000">Portfolio</h3>
    <div class="container">
      <div class="row">
        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/portfolio/cv1.png">
            <h6 class="center">Front End Design CV</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/portfolio/cv2.png">
            <h6 class="center">Front End Design CV</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/portfolio/cv3.png">
            <h6 class="center">Front End Design CV</h6>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/portfolio/cv4.png">
            <h6 class="center">Front End Design CV</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/portfolio/ecommerce.png">
            <h6 class="center">Front End Design E-Commerce</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/portfolio/olpres.png">
            <h6 class="center">Front End Design Landing Page</h6>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/portfolio/sans.png">
            <h6 class="center">Front End Design Landing Page</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/portfolio/steel.png">
            <h6 class="center">Front End Design Landing Page</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/portfolio/kelas.png">
            <h6 class="center">Fullstack Web App Kelas</h6>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="certificate" style="padding: 10px;">
    <h3 class="center light">Certificate</h3>
    <div class="container">
      <div class="row">
        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/actra.jpg">
            <h6 class="center">Web Developer from Global Actra Jkt</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/build.jpeg">
            <h6 class="center">Building Website from Programming Hub</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/css.jpeg">
            <h6 class="center">Course CSS from Sololearn</h6>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/css_p.jpeg">
            <h6 class="center">Course CSS From Programming Hub</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/gunnebo.jpg">
            <h6 class="center">Internship PT. Chubb Safes as IT Support</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/html.jpg">
            <h6 class="center">Course HTML from Sololearn</h6>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/html_p.jpeg">
            <h6 class="center">Course HTML from Programming Hub</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/htmla_p.jpeg">
            <h6 class="center">Course HTML Advanced from Programming Hub</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/sekolah.jpg">
            <h6 class="center">Internship of School</h6>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/ubuntu.jpg">
            <h6 class="center">Workshop Ubuntu Server STMIK Bani Saleh</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/cisco.jpg">
            <h6 class="center">Junior Network Administrator with Cisco</h6>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/js.jpg">
            <h6 class="center">Course Javascript from Programming Hub</h6>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col m4 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/cer/php.jpg">
            <h6 class="center">Course PHP from Sololearn</h6>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="contact" class="blue">
    <div class="container">
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <h5 class="center">Kontak saya</h5>
            <p>Halo teman-teman, mungkin jika kalian ingin tahu saya lebih lanjut atau sekedar hanya ingin menambah teman, silahkan hubungi saya lewat akun saya dibawah ini ya atau kalian bisa mengisi form disamping!</p>
            <a href="https://www.instagram.com/sanjaya_411/?hl=id"><i class="fab fa-instagram"></i>@sanjaya_411</a><br> <br>
            <a href="https://api.whatsapp.com/send?phone=6281213490755"><i class="fab fa-whatsapp"></i>081213490755</a> <br> <br>
            <a href="https://t.me/m_ricky_sanjaya"><i class="fab fa-telegram-plane"></i>081213490755</a>
          </div>
        </div>

        <div class="col m7 s12">
          <div class="card-panel hoverable" data-aos="fade-up" data-aos-duration="1000">
            <h5 class="center light">Apa pesan kamu?</h5>
            <form action="komen_aksi.php" method="post">
              <div class="input-field">
                <label for="nama">Nama Kamu</label>
                <input type="text" class="autocomplete" id="nama" name="nama" required>
              </div>
              <div class="input-field">
                <label for="email">Email Kamu</label>
                <input type="email" class="autocomplete" id="email" name="email" required>
              </div>
              <div class="input-field">
                <label for="hp">No HP Kamu</label>
                <input type="text" class="autocomplete" id="email" name="no_hp" required>
              </div>
              <div class="input-field">
                <label for="pesan">Pesan Kamu</label>
                <input type="text" class="autocomplete" id="email" name="pesan" required>
              </div>
              <input type="submit" value="Kirim" class="btn">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="green" style="padding: 10px; margin-top: -20px;">
    <h6 class="center white-text">Build by Sanjaya</h6>
  </footer>


  <!--JS-->
  <script src="js/materialize.js"></script>
  <script src="js/script.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>