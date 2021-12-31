<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d91b832182.js" crossorigin="anonymous"></script>
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
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-9 ">
                <div class="container mb-5 mt-3 bg-light border border-secondary p-3 border-4 shadow bg-body rounded">
                    <h1 class="mb-3">Data Pemesanan</h1>
                    Nama Pemesan : <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Nama Sesuai NIK" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    Nomor Hp Pemesan : <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="08xx-xxxx-xxxx" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    Email : <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="me@contoh.co.id" aria-label="no" aria-describedby="basic-addon1">
                    </div>
                    Alamat : <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Nama Daerah" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="container mb-5 mt-3 bg-light border border-secondary p-3 border-4 shadow bg-body rounded">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h4>Total Rp 165.000-</h4>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col">
                                Sabtu, 11Desember 2021 <br>
                                Mutiara Timur (173) <br>
                                Ekonomi - P <br>
                                <br>

                                <h6>Keberangkatan :</h6>
                                Solo Balapan <br>
                                04:14 <br>
                                11 Des 2021 <br>

                                <h6> Tujuan :</h6>
                                Yogyakarta <br>
                                05:35 <br>
                                11 Des 2021 <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Pnumpang -->
    <div class="container">
        <div class="row">
            <div class="container mb-3 mt-3 bg-light border border-secondary p-3 border-4 shadow bg-body rounded">
                <div class="container">
                    <div class="row">
                        <h1 class="mb-3">Data Penumpang 1</h1>
                        <div class="col-6">
                            Nama Pemesan: <br>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Nama Sesuai NIK" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            Nomor Identitas : <br>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Nomor Sesuai NIK" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>


                        <!-- Button trigger modal -->
                        <div class="form-check m-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Dengan ini saya setuju dan mematuhi <a href="#" class="link-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Persyaratan dan Ketentuan</a>
                            </label>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Syarat dan Ketentuan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Scrollable modal -->
                                <div class="modal-dialog modal-dialog-scrollable m-4">
                                    <h4>1. Reservasi dapat dilakukan 3 jam sebelum kereta berangkat</h4>
                                    <h4>2. Harga dan ketersediaan tempat duduk sewaktu-waktu dapat berubah.</h4>
                                    <h4>3. Pastikan anda telah menerima email konfirmasi pembataran dari PT. Kereta Api Indonesia (Pesero) untuk ditukarkan dengan boarding pass di stasiun online</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ya, Saya Sudah Baca</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <form method="post" action="data">
                            <div class="row justify-content-end mb-2">
                                <div class="d-grid gap-2  ">
                                    <button type="button" class="btn btn-outline-danger btn-lg pt-4 pb-4 " data-bs-toggle="modal" data-bs-target="#batal">Batal</button>
                                </div>
                            </div>
                    </div>
                    </form>
                    <form method="post" action="data">
                        <div class="row justify-content-end mb-2">
                            <div class="d-grid gap-2  ">
                                <button type="button" class="btn btn-outline-success btn-lg pt-4 pb-4 " data-bs-toggle="modal" data-bs-target="#pesan">Pesan</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="batal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header text-center">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Apakah Anda yakin untuk Membatalkan ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="d-grid gap-2 d-md-flex justify-content-sm-center">
                            <a href="table" class="btn btn-secondary text-center" tabindex="-1" role="button" aria-disabled="true">OK</a>
                            <button type="button" class="btn btn-secondary text-center" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->


    <!-- Modal -->
    <div class="modal fade" id="pesan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header text-center">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Apakah Anda yakin untuk Melanjutkan ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="d-grid gap-2 d-md-flex justify-content-sm-center">
                            <a href="ringkasan" class="btn btn-secondary text-center" tabindex="-1" role="button" aria-disabled="true">OK</a>
                            <button type="button" class="btn btn-secondary text-center" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#8b8b8b" fill-opacity="1" d="M0,288L80,266.7C160,245,320,203,480,186.7C640,171,800,181,960,202.7C1120,224,1280,256,1360,272L1440,288L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
    <footer class="text-white text-center pb-3" id="footer" style="background-color:#8b8b8b">
        <p>Created with Love by <a href="#dev" class="text-white">Us</a></p>
    </footer>
    <!-- Akhir Footer -->


    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>


</html>