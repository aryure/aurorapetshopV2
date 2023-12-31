<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aurora Petshop</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="Zay/assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Start Top Nav -->
    {{-- @include('Layout.Pengguna-Layout.TopNav') --}}
    <!-- Close Top Nav -->

    <!-- Header -->
    @include('Layout.Pengguna-Layout.Navbar')
    <!-- Close Header -->

    <!-- Modal -->
    {{-- <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div> --}}

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="img/pet_01.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-5 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Aurora</b> Petshop</h1>
                                <h3 class="h2">Tempat Aman dan Nyaman untuk hewan kesayangan anda </h3>
                                <p>
                                    Aurora Petshop sudah berdiri sejak tahun 2018. Sudah banyak yang puas atas kinerja kami.

                                    Anda dapat mencari kami dangan cara, menghubungi <a rel="sponsored" class="text-success" target="_blank">0857-1578-0142</a> 
                                    Atau dapat mengujingi kami langsung <a rel="sponsored" class="text-success" href="https://goo.gl/maps/srJLoywY6FRVPrRx9" target="_blank">Disini</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="/img/pet_02.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-5 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Banyak Pelanggan Puas!</h1>
                                <h3 class="h2">Pengerjaan Sepenuh Hati</h3>
                                <p>
                                    Sejak petshop ini berdiri kami bertekad untuk menjaga dan memelihara binatang dengan sepenuh hati.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" style="margin-left: 60%" width="55%" src="img/pet_03.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-5 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">OH IYA!!!</h1>
                                <h3 class="h2">KITA JUGA MEMBUKA TEMPAT PENITIPAN HEWAN LHO!</h3>
                                <p>
                                    Jangan ragu untuk menitipkan anabul anda kepada kami.
                                </p>
        
                                <a href="/petcare" class="btn btn-outline-success" role="button">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Kategori -->
    <div class="container">
        <div class="row align-items-md-stretch">
            <div class="col-md-5 py-2">
                <div class="p-5 h-100 divktg" style="background-color: rgba(92, 234, 234, 0.504)">
                    <div class="row mt-3">
                        <div class="col-5">
                            <img class="img-fluid" src="/img/ktg1.png" alt="">
                        </div>
                        <div class="col-7 mt-2 mt-md-4">
                            <a>Never make your pet hungry</a>
                            <h2>Pet Food</h2>
                            <a class="btn btn-success" type="button">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 py-2">
                <div class="p-5 h-100 divktg" style="background-color: rgba(234, 218, 92, 0.508)">
                    <div class="row mt-md-4">
                        <div class="col-5">
                            <img class="img-fluid imgktg" src="/img/ktg2.png" alt="">
                        </div>
                        <div class="col-7 mt-3">
                            <a>Help Them to find happiness</a>
                            <h2>Adoption</h2>
                            <a class="btn btn-success" type="button">New Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-md-stretch">
            <div class="col-md-7 py-2">
                <div class="p-5 h-100 divktg" style="background-color: rgba(194, 234, 92, 0.503)">
                    <div class="row">
                        <div class="col-5 mt-md-3">
                            <img class="imgktg2 img-fluid" src="/img/ktg3.png" alt="">
                        </div>
                        <div class="col-7 mt-md-5 mt-3">
                            <a>Your pet need staycation too</a>
                            <h2>Pet Hotel</h2>
                            <a class="btn btn-success" type="button">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 py-2">
                <div class="p-5 h-100 divktg" style="background-color: rgba(234, 92, 92, 0.505)">
                    <div class="row mt-3">
                        <div class="col-5">
                            <img class="img-fluid" src="/img/ktg4.png" alt="">
                        </div>
                        <div class="col-7 mt-md-5 mt-3">
                            <a>Always be aware of your animal health </a>
                            <h2>Pet Health</h2>
                            <a class="btn btn-success" type="button">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Kategori -->

    <!-- Start Banner 2 -->
    <div class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6">
                            <img class="img-fluid" src="img/pet_04.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-5 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Kenapa</b> harus memilih kami?</h1>
                                <h3 class="h2">Tempat yang sayang dan mengurus peliharaan kesayangan anda</h3>
                                <p>
                                    kami sudah berkomitmen untuk menjaga hewan anda dengan sepenuh hati dengan amanah yang sudah dipercayakan, tidak lupa
                                    orang yang kami pekerjakan juga yang sudah kami latih dan pastinya berkopeten.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner 2 -->
    

    <!-- Start Footer -->
    {{-- @include('Layout.Pengguna-Layout.Footer') --}}
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="https://kit.fontawesome.com/1c164f6dc6.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- End Script -->
</body>

</html>