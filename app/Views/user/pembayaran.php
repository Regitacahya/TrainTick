<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="row">
            <div class="col-6">
                <h3 class="m-3">Pembayaran</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <p>Media Pembayaran :</p>
                <select class="form-select form-select-lg mb-3" aria-label="Default select example">
                    <option selected disabled>Pilih Pembayaran</option>
                    <option value="1">AlfaMaret</option>
                    <option value="2">IndoMaret</option>
                    <option value="3">AlfaMidi</option>
                    <option value="4">COD</option>
                </select>
            </div>

            <div class="col-6 ">
                <div class="container mb-5 mt-1 bg-light border border-secondary p-3 border-4 ">
                </div>
            </div>

            <div class="col-3">
                <div class="container mb-5 mt-1 bg-light border border-secondary p-3 border-4 ">
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
                                1 Dewasa <br>
                                1 Regita
                                <div class="d-grid gap-2 d-md-flex justify-content-sm-end">
                                    <a href="#" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">Pilih Kursi</a>
                                </div>

                                <br>
                                <h6>Keberangkatan :</h6>
                                Solo Balapan <br>
                                04:14 <br>
                                11 Des 2021 <br>

                                <br>
                                <h6>Tujuan :</h6>
                                Yogyakarta <br>
                                05:35 <br>
                                11 Des 2021 <br>
                                <br>
                                <div class="d-grid gap-2 col-10 mx-auto m-3 ">
                                    <div class="container">
                                        <form method="post" action="data">
                                            <div class="row justify-content-end mb-2">
                                                <a href="" class="btn btn-success btn-sm" tabindex="-1" role="button" aria-disabled="true" data-bs-toggle="modal" data-bs-target="#example">Lanjut ke Pembayaran</a>
                                            </div>
                                        </form>
                                        <!-- Modal -->
                                        <div class="modal fade" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content text-center">
                                                    <div class="modal-header text-center">
                                                        <h5 class="modal-title text-center" id="exampleModalLabel" style="text-align: center;">Pemesanan Berhasil !!</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="d-grid gap-2 col-6 mx-auto ">
                                                                <a href="pembayaran" class="btn btn-secondary text-center" tabindex="-1" role="button" aria-disabled="true">OK</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-danger btn-sm" tabindex="-1" role="button" aria-disabled="true">Batalkan Pemesanan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

</body>

</html>