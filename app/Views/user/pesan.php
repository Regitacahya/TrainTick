<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>TrainTick | Pemesanan Tiket</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm ">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">
        <img src="<?= base_url() ?>/img/logo_kai.jpeg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        TrainTic
      </a>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <div class="container mb-5 mt-3 bg-light border border-secondary p-3 border-4">
    <div class="row ">
      <div class="col-6 ">
        <h2>Pemesanan Tiket Kereta Api</h2>
        <p>Selasa, 07 Desember 2021</p>
      </div>
    </div>
    <div class="row">
      <div class="col-5">
        <p>Stasiun asal :</p>
        <select class="form-select form-select-lg mb-3" aria-label="Default select example">
          <option selected disabled>Pilih Kota</option>
          <option value="1">Solo</option>
          <option value="2">Jogja</option>
          <option value="3">Kaliurang</option>
        </select>
      </div>

      <div class="col-5">
        <p>Stasiun Tujuan :</p>
        <select class="form-select form-select-lg mb-3" aria-label="Default select example">
          <option selected disabled>Pilih Kota</option>
          <option value="1">Solo</option>
          <option value="2">Jogja</option>
          <option value="3">Kaliurang</option>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-3">
        <p>Tanggal Keberangkatan</p>
        <input type="date" id="birthdaytime" name="birthdaytime" class="form-control mb-4">
      </div>

      <br>

      <div class="col-3">
        <p>Jumlah Penumpang</p>
        <input type="number" id="quantity" name="quantity" min="1" max="5" class="form-control " value="0">
      </div>
    </div>
    <a href="cari" class="btn btn-danger  m-2">Cari dan Pesan Tiket</a>
  </div>

  <!-- Footer -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#8b8b8b" fill-opacity="1" d="M0,288L80,266.7C160,245,320,203,480,186.7C640,171,800,181,960,202.7C1120,224,1280,256,1360,272L1440,288L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
  </svg>
  <footer class="text-white text-center pb-3" id="footer" style="background-color:#8b8b8b">
    <p>Created with Love by <a href="#dev" class="text-white">Us</a></p>
  </footer>
  <!-- Akhir Footer -->




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>