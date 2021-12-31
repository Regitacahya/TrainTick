<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?= base_url() ?>/css/style.css ">
  <link rel="stylesheet" href="<?= base_url() ?>/css/darkmode.css ">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script type="text/javascript">
    $(window).on('scroll', function() {
      if ($(window).scrollTop()) {
        $('nav').addClass('black');
      } else {

        $('nav').removeClass('black');
      }
    })

    function change() {
      if (document.getElementById("bd").src == "<?= base_url() ?>/img/sec2.jpg") {
        document.getElementById("bd").src = "<?= base_url() ?>/img/sec4.png";
      } else {
        document.getElementById("bd").src = "<?= base_url() ?>/img/sec2.jpg";

      }
    }
  </script>


  <style>
    section#bd {
      width: 100%;
      height: 100vh;
      background: url("<?= base_url() ?>/img/sec1.png");
      background-size: cover;
    }

    .jumbotron {
      padding-top: 6rem;
      background-color: #8b8b8b;

    }

    #footer {
      background-color: #8b8b8b;
    }

    #dev {
      background-color: #8b8b8b;
    }

    .center img-liquid {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }

    .card {
      width: 75%;
    }
  </style>

  <title>TrainTick </title>
</head>

<body id="home">
  <!-- navbar responsive-->
  <!-- <nav class="navbar navbar-expand-lg rounded fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">TRAINTIC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mt-1">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link" href="#dev">Develpopers</a>
          </li>
          <li class="nav-item mt-1">
            <a class=" nav-link" href="#kontak">Contact Us</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-info btn-sm pb-1"><a class="nav-link text-white" href="/user/pesan">Pesan Tiket</a></button>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  <!-- Akhir Navbar -->

  <!-- navbar baru -->

  <nav>
    <div class="kiri">
      <h3> <a href="home">TRAIN TICKET</a></h2>
    </div>
    <ul>
      <li><a href="home">Home</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#dev">Developers</a></li>
      <li><a href="#kontak">Contact Us</a></li>
      <li><a href="/user/pesan">Pesan Tiket</a></li>
    </ul>
  </nav>

  <!-- Akhir navbar -->


  <!-- coursel -->
  <p>
    <img src="<?= base_url() ?>/img/sec2.jpg" alt="" id="bd" style="height: 100%; width: 100%">
  </p>
  <!-- akhir coursel -->

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#8b8b8b" fill-opacity="1" d="M0,256L48,266.7C96,277,192,299,288,298.7C384,299,480,277,576,245.3C672,213,768,171,864,154.7C960,139,1056,149,1152,181.3C1248,213,1344,267,1392,293.3L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>

  <!-- jumvotron -->
  <section class="jumbotron text-center">
    <div class="container text-white">
      <img src="<?= base_url() ?>/img/logo_kai.jpeg" alt="" width="400" data-aos="zoom-out" class="img-fluid border border-3" data-aos-duration="750">
      <h1 class="display-4 mt-3"></h1>
      <p class="lead" data-aos="zoom-in-up" data-aos-duration="1000">Aplikasi ini dibuat dengan tujuan untuk memudahkan konsumen dalam pemesanan dalam mendapatkan informasi mengenai tiket dan memberikan efisiensi waktu sehingga tidak perlu datang ke lokasi pembelian.</p>
      <hr class="my-4" data-aos="zoom-in" data-aos-duration="3000">
      <div class="d-flex justify-content-center">
        <p class="col-10 " data-aos="zoom-out" data-aos-duration="750" data-aos-offset="150">Dalam era globalisasi saat ini, kebutuhan akan teknologi komputer dan informasi telah berkembang pesat. Hal ini ditunjukkan dengan semakin mudahnya mendapatkan informasi , apapun bentuknya dan dimana pun berada, seolah-olah tidak dibatasi oleh ruangan dan waktu karena informasi itu sendiri didapat hanya dengan duduk di depan komputer dan hanya menekan mouse atau keyboard Keberadaan teknologi informasi, khususnya Internet yang membawa suatu era sistem komputasi terdistribusi yang sangat luas menuju ke suatu sistem komputasi ubiguitas dimana-mana.
        </p>
      </div>
      <a class="btn btn-light btn-lg" href="/user/pesan" role="button" data-aos="zoom-out-up" data-aos-offset="150" data-aos-duration="750">Pesan Tiket Sekarang</a>
    </div>

  </section>
  <!-- akhir jumbotron -->

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#8b8b8b" fill-opacity="1" d="M0,256L48,256C96,256,192,256,288,250.7C384,245,480,235,576,240C672,245,768,267,864,256C960,245,1056,203,1152,176C1248,149,1344,139,1392,133.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
  </svg>


  <!-- About US -->
  <section id="about">
    <div class="container mb-2">
      <div class="row text-center mb-2">
        <div class="col mt-5" data-aos="fade-down" data-aos-duration="1000">
          <h1 class="mt-lg-5">ABOUT US</h1> <br>
        </div>
      </div>
      <div class="row">
        <img src="<?= base_url() ?>/img/AU.png" alt="" style="width: 87%;" height="200" class="rounded mx-auto d-block" data-aos="fade-down" data-aos-delay="150" data-aos-duration="1000">
      </div>
      <div class="row fs-5 text-center">
        <div class="col" data-aos="fade-right" data-aos-delay="150" data-aos-duration="750">
          <h3>Background</h3>
          <p>Tiket sebagai bukti pembayaran berperan penting sebagai informasi reservasi bangku transportasi umum.
          </p>
        </div>
        <div class="col" data-aos="fade-up" data-aos-delay="300" data-aos-duration="750">
          <h3>Problem Definition</h3>
          <p>Sulit mendapatkan informasi reservasi tiket dan kurang efisien waktu jika konsumen harus datang langsung.
          </p>
        </div>
        <div class="col" data-aos="fade-left" data-aos-delay="450" data-aos-duration="750">
          <h3>Proposed Solution</h3>
          <p>Pembuatan aplikasi pemesanan tiket agar mempermudah konsumen dalam pemesanan dan mendapatkan informasi mengenai tiket.

          </p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#8b8b8b" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,80C384,96,480,128,576,138.7C672,149,768,139,864,154.7C960,171,1056,213,1152,218.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>
  <!-- Akhir About -->

  <!-- Developerrs -->
  <section id="dev">
    <div class="container  ">
      <div class="row text-center">
        <div class="col mb-3 me-5 " data-aos="fade-down" data-aos-duration="1000">
          <h1 class="me-5 mb-5 text-white mt-lg-5">DEVELOPERS</h1>
        </div>
      </div>
      <div class="row d-flex justify-content-center mb-5 text-center ">
        <div class="col-3" data-aos="flip-right" data-aos-duration="1500" data-aos-delay="100">
          <div class="card">
            <img src="<?= base_url() ?>/img/sabil.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Sabila Hayati Nur Ramadhani </p>
              <p>- V3420067 -</p>
              <p>- UI/UX - </p>
            </div>
          </div>
        </div>
        <div class="col-3" data-aos="flip-right" data-aos-duration="1500" data-aos-delay="400">
          <div class=" card">
            <img src="<?= base_url() ?>/img/sam2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text ">Samuel Steven P. H.</p>
              <p>- V3420069 -</p>
              <p>- Front End -</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center ms-5">
        <div class="col-3" data-aos="flip-right" data-aos-duration="1500" data-aos-delay="200" data-aos-offset="">
          <div class="card">
            <img src="<?= base_url() ?>/img/regita.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Regita Cahya Wulan </p>
              <p>- V3420057 -</p>
              <p>- OP -</p>
            </div>
          </div>
        </div>
        <div class="col-3" data-aos="flip-right" data-aos-duration="1500" data-aos-delay="500" data-aos-offset="">
          <div class=" card">
            <img src="<?= base_url() ?>/img/cewe.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Salsabila Qurrotul 'Aini</p>
              <p>- V3420068 -</p>
              <p>- BackEnd -</p>
            </div>
          </div>
        </div>
        <div class="col-3" data-aos="flip-right" data-aos-duration="1500" data-aos-delay="800" data-aos-offset="">
          <div class="card">
            <img src="<?= base_url() ?>/img/cowo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Reza Richard Michael Sitorus </p>
              <p>- V3420060 -</p>
              <p>- Testing -</p>
            </div>
          </div>
        </div>
      </div>
    </div>



  </section>
  <!-- Akhir Develpoers -->

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#8b8b8b" fill-opacity="1" d="M0,256L21.8,234.7C43.6,213,87,171,131,176C174.5,181,218,235,262,240C305.5,245,349,203,393,160C436.4,117,480,75,524,85.3C567.3,96,611,160,655,170.7C698.2,181,742,139,785,149.3C829.1,160,873,224,916,218.7C960,213,1004,139,1047,122.7C1090.9,107,1135,149,1178,181.3C1221.8,213,1265,235,1309,202.7C1352.7,171,1396,85,1418,42.7L1440,0L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
  </svg>

  <!-- kontak -->
  <section id="kontak">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col mt-lg-5" data-aos="fade-down" data-aos-duration="1000" data-aos-offset="300">
          <h2 class="mt-lg-5">CONTACT US</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form>
            <div class="mb-3 " data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300">
              <label for=" name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control shadow-sm" id="name" aria-describedby="name">
            </div>
            <div class="mb-3" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control shadow-sm" id="email" aria-describedby="email">
            </div>
            <div class="mb-3" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3"></textarea>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
              <button type="submit" class="btn btn-primary shadow-sm">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#8b8b8b" fill-opacity="1" d="M0,288L80,266.7C160,245,320,203,480,186.7C640,171,800,181,960,202.7C1120,224,1280,256,1360,272L1440,288L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
  </section>

  <!-- akhir kontak -->

  <!-- Footer -->
  <footer class=" text-white text-center pb-3" id="footer">
    <p>Created with Love by <a href="#dev" class="text-white">Us</a></p>
  </footer>
  <!-- Akhir Footer -->


  <!-- Dark Mode Enable -->
  <div class="position-fixed py-2 px-3 bg-dark text-white rounded-pill" style="bottom:1rem;right:1rem;">
    <label id="darkMode">
      <input type="checkbox" id="DarkModeButton" checked onclick="change()">
      <div class="planet">
      </div>
      <div class="elements">
        <svg version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <circle cx="250" cy="250" r="200" />
        </svg>
        <svg version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <circle cx="250" cy="250" r="200" />
        </svg>
        <svg version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <circle cx="250" cy="250" r="200" />
        </svg>
        <svg version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <circle cx="250" cy="250" r="200" />
        </svg>
        <svg version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <circle cx="250" cy="250" r="200" />
        </svg>
        <svg version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <circle cx="250" cy="250" r="200" />
        </svg>
        <svg version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <circle cx="250" cy="250" r="200" />
        </svg>
        <svg version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <circle cx="250" cy="250" r="200" />
        </svg>
      </div>
    </label>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/TextPlugin.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script>
    gsap.registerPlugin(TextPlugin);
    gsap.to('.display-4', {
      duration: 3,
      text: 'TrainTick'
    })
  </script>
  <script type="text/javascript" src="<?php echo base_url('js/system.js'); ?>"></script>

</body>

</html>