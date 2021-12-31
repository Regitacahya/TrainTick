<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/css.css'); ?>">
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

    <div class="container mb-5 mt-3 bg-light border border-secondary p-3 border-4 shadow p-3 mb-5 bg-body rounded">
        <div class="row ">
            <div class="col-6 ">
                <h2>Tujuan 1 -> Tujuan 2</h2>
                <p>Selasa, 07 Desember 2021</p>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <p>Stasiun asal :</p>
                <select class="form-select form-select-lg mb-3" aria-label="Default select example" disabled>
                    <option selected disabled>Pilih Kota</option>
                    <option value="1">Solo</option>
                    <option value="2">Jogja</option>
                    <option value="3">Kaliurang</option>
                </select>
            </div>

            <div class="col-5">
                <p>Stasiun Tujuan :</p>
                <select class="form-select form-select-lg mb-3" aria-label="Default select example" disabled>
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
                <input type="datetime-local" id="birthdaytime" name="birthdaytime" class="form-control mb-4" disabled>
            </div>

            <br>

            <div class="col-3">
                <p>Jumlah Penumpang</p>
                <input type="number" id="quantity" name="quantity" min="0" max="5" class="form-control " value="0">
            </div>
            <div class="col-3">
                <p>Bayi (< 2 tahun)</p>
                        <input type="number" id="quantity" name="quantity" min="0" class="form-control " value="0">
            </div>
        </div>
        <a href="cari" class="btn btn-danger  m-2">Cari dan Pesan Tiket</a>
    </div>


    <div class="container mb-5 mt-3 bg-light border border-secondary p-3 border-4 shadow p-3 mb-5 bg-body rounded">
        <div class="row text-center">
            <h3>Desember 2021 </h3>
        </div>
    </div>

    <!-- <div class="container mb-5 mt-3 bg-light border border-secondary p-3 border-4 shadow p-3 mb-5 bg-body rounded">
        <div class="row text-center">
            <div class="container">
                <div class="scrollmenu row justify-content-around text-center bg-body ">

                    <div class="scrollmenu">
                        <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                            <h2>Senin</h2>
                            <h5>07 desember 2021</h5>
                        </a>
                        <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                            <h2>Senin</h2>
                            <h5>07 desember 2021</h5>
                        </a>
                        <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                            <h2>Senin</h2>
                            <h5>07 desember 2021</h5>
                        </a>
                        <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                            <h2>Senin</h2>
                            <h5>07 desember 2021</h5>
                        </a>
                        <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                            <h2>Senin</h2>
                            <h5>07 desember 2021</h5>
                        </a>
                        <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                            <h2>Senin</h2>
                            <h5>07 desember 2021</h5>
                        </a>
                    </div>





                </div>
            </div>
        </div>
    </div> -->

    <div class="container mb-5 mt-3 bg-light border border-secondary p-3 border-4 p-3 mb-5 shadow bg-body rounded">
        <div class="menu-wrapper row justify-content-around text-center bg-body">
            <ul class="menu">
                <li class="item">
                    <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                        <h2>Senin</h2>
                        <h5>07 desember 2021</h5>
                    </a>
                </li>
                <li class="item">
                    <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                        <h2>Senin</h2>
                        <h5>07 desember 2021</h5>
                    </a>
                </li>
                <li class="item">
                    <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                        <h2>Senin</h2>
                        <h5>07 desember 2021</h5>
                    </a>
                </li>
                <li class="item">
                    <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                        <h2>Senin</h2>
                        <h5>07 desember 2021</h5>
                    </a>
                </li>
                <li class="item">
                    <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                        <h2>Senin</h2>
                        <h5>07 desember 2021</h5>
                    </a>
                </li>
                <li class="item">
                    <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                        <h2>Senin</h2>
                        <h5>07 desember 2021</h5>
                    </a>
                </li>
                <li class="item">
                    <a href="table" class="btn btn-outline-secondary btn-lg m-4">
                        <h2>Senin</h2>
                        <h5>07 desember 2021</h5>
                    </a>
                </li>
            </ul>
            <div class="paddles">
                <button class="left-paddle paddle hidden btn btn-secondary">
                    < </button>
                        <button class="right-paddle paddle btn btn-secondary">
                            >
                        </button>
            </div>
        </div>
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
    <script type="text/javascript" src="<?php echo base_url('js/script.js'); ?>"></script>
</body>

</html>