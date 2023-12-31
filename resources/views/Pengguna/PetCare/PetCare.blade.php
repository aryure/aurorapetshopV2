<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aurora Petshop</title>

    @laravelPWA

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="Zay/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Zay/assets/css/templatemo.css">
    <link rel="stylesheet" href="Zay/assets/css/custom.css">
    
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="Zay/assets/css/fontawesome.min.css">

</head>

<body style="background-color: #F9F9F9">
    <!-- Start Top Nav -->
    {{-- @include('Layout.Pengguna-Layout.TopNav') --}}
    <!-- Close Top Nav -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container d-flex justify-content-between align-items-center">
    
            <a class="navbar-brand text-success logo h1 align-self-center" href="/beranda">
                Aurora
            </a>
    
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/shop">Shop</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/petcare">PetCare</a>
                        </li>
                    </ul>
                </div>
                
                <div class="navbar align-self-center d-flex">
    
                    <!-- Search Handphone View -->
                    {{-- <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div> --}}
    
                    <!-- Ikon Search -->
                    {{-- <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a> --}}
    
                    @if (Auth::guest())
                        
                    <div>
                        <a type="button" class="btn btn-md btn-outline-success" style="color: white; background-color: #198754; border-radius: 6px" href="/register">
                            Daftar
                        </a>
                        <button type="button"  class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Masuk
                        </button>
                    </div>

                    @else
                        {{-- <div>
                            <a class="nav-icon position-relative text-decoration-none" href="/cart" role="button" aria-expanded="false">
                                <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-white text-dark"></span>
                            </a>
                        </div> --}}
                        <div class="dropdown">
                            <a class="nav-icon position-relative text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-fw fa-user text-dark mr-3"></i>
                                {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                            </a>
                        
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/profile">Profil</a>
                                <li><a class="dropdown-item" href="{{ route('postlogout_user') }}">Logout</a></li>
                            </ul>
                        </div>
                    @endif
      
                    <!-- Modal Login -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Masuk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('postlogin_user') }}" method="post">
    
                                        {{ csrf_field() }}
                        
                                        <div class="form-group mb-3">
                                          <label for="email" class="sr-only">Email</label>
                                          <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                                        </div>
                                        <div class="form-group mb-3">
                                          <label for="password" class="sr-only">Password</label>
                                          <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                                        </div>
                                        <div class="d-grid mx-auto">
                                            <button class="btn btn-outline-success" type="submit">Submit</button>
                                        </div>
                                        <div class="d-grid mx-auto">
                                            <p class="fs-6">Belum Punya Akun? <a href="/register" class="fs-6">Daftar Disini</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal Search Bar -->
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

    <section class="container">
        <div class="row mt-3">

            <nav id="pet-care-table-tab" class="pet-care-table-tab app-nav-tabs nav shadow-sm flex-sm-row mb-4">
                <a  class="flex-sm-fill text-sm-center nav-link active" id="info-kandang-tab" data-bs-toggle="tab"
                    href="#info-kandang" role="tab" aria-controls="info-kandang" aria-selected="true">
                    Data Kandang
                </a>
                <a class="flex-sm-fill text-sm-center nav-link" id="informasi-cara-pembayaran-tab" data-bs-toggle="tab"
                    href="#informasi-cara-pembayaran" role="tab" aria-controls="informasi-cara-pembayaran"
                    aria-selected="false">
                    Informasi Cara Pembayaran
                </a>
            </nav>

            <div class="tab-content" id="pet-care-table-tab-content">
                
                {{-- INFORMASI KANDANG YANG TERSEDIA --}}
                <div class="tab-pane fade show active" id="info-kandang" role="tabpanel" aria-labelledby="info-kandang-tab">
                    <div class="app-card app-card-profile-table">
                        <div class="app-card-body">
                            
                             <!-- Start Tabel 1 -->
                            <form action="{{ url('/add-order-petcare') }}" method="POST">

                                {{ csrf_field() }}
                                
                                {{-- <div class="col-12 col-md-12">
                                    <div class="d-grid mx-auto">
                                        <button class="btn btn-outline-success" type="submit">Lanjutkan</button>
                                    </div>
                                </div> --}}

                                <!-- LOOPING KANDANG -->
                                <div class="row">
                                    @foreach ($dtCage as $item)
                                    <div class="col-12 col-md-6">
                                        <div class="card mb-4" style=" border-radius: 25px">
                                            <div class="row g-0">
                                                <div class="col-6 col-md-4">
                                                    <img src="{{ asset('img-Cage/'. $item->gambar) }}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-6 col-md-8">
                                                    <div class="card-body">
                                                    <a href="{{ url('detail-petcare', $item->id) }}">
                                                        <h5 class="card-title">{{ $item->nama_kandang }}</h5>
                                                        <p class="col-6" class="card-text">{{ $item->size->size }}</p>  
                                                        <p class="col-6" class="card-text text-end">Rp {{ number_format($item->size->harga) }}</p>
                                                        <p class="card-text text-end"><small class="text-muted">Status {{ $item->status->status }}</small></p>
                                                    </a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </form>
                            <!-- End Tabel 1 -->
                
                        </div> <!--//app-card-body-->
                    </div> <!--//app-card-->
                </div> <!--//tab-pane-->

                {{-- INFORMASI CARA PEMBAYARAN --}}
                <div class="tab-pane fade mt-2" id="informasi-cara-pembayaran" role="tabpanel" aria-labelledby="informasi-cara-pembayaran-tab">
                    <div class="app-card app-card-profile-table mb-4">
                        <div class="app-card-body">
                           
                            <form class="row" action="" method="POST" style="background-color: #F9F9F9">
            
                                <div class="col-lg-8 mt-2">
                                    <div class="card border-light">
                                        
                                        <div class="row" style="background-color: #F9F9F9">
                                        
                                            <div class="col-12 col-md-10" style="background-color: #F9F9F9" >
            
                                                <div class="row">
                                                    <div class="col-12 col-md-11">
                                                        <p class="text-uppercase text-center fs-5 fw-bold">Tata Cara Pemesanan di Aurora Petshop</p>
                                                    </div>
                                                    
                                                </div>
            
                                                <div class="row mt-4">
                                                    <div class="col-3 col-md-3">
                                                        <p class="fs-6 fw-bold">Tahap 1</p>
                                                    </div>
                                                    <div class="col-9 col-md-9">
                                                        <p class="fs-6">Pilihlah kandang yang masih tersedia di Data Kandang</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p class="fs-6 fw-bold">Tahap 2</p>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="fs-6">Isi Form yang tersedia</p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-3">
                                                        <p class="fs-6 fw-bold">Tahap 3</p>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="fs-6">Kirim Bukti Transfer ke no Whatsapp 
                                                            <a class="text-decoration-none fs-6" href="tel:0857-1578-0142">0857-1578-0142</a></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p class="fs-6 fw-bold"></p>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="fs-6">dengan format : Nama & No Order</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p class="fs-6 fw-bold"></p>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="fs-6">dari jam 08:00 hingga 21:00 untuk memverifikasi pembayaran</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr class="mt-3 mb-4">
                                           
                                        </div>
                                    </div>
                                </div>
            
                                {{-- Tab Kanan --}}
                                <div class="col-lg-4 mt-2">
                                    <div class="card border-light" style="background-color: #F3F3F3; border-radius:20px">
                                        <div class="card-body">
                                            
                                            <div class="row">
                                                <div class="col-12 mt-2">
                                                    <p class="fs-5 fw-bold text-center"> Pilihan Bank Yang Tersedia </p>
                                                </div>
                                                <hr>
                                            </div>
            
                                            @foreach ($dtBank as $item)
                                            <div class="row">
                                                <div class="col-5 col-md-6">
                                                    <p> {{ $item->bank }} </p>
                                                </div>
                                                <div class="col-7 col-md-6">
                                                    <p> : {{ $item->no_rekening }} </p>
                                                </div>
                                            </div>
                                            @endforeach
            
                                            <div class="row">
                                                <hr class="mt-1">
                                                <div class="col-6">
                                                    <h5> Pilihan Lain </h5>
                                                </div>
                                                <div class="col-6"></div>
                                            </div>
            
                                            <p class="fs-6">Aurora Petshop hanya menerima pembayaran Cash On Delivery<p class="fs-5 fw-bold">
                                            <div class="mt-1 d-grid center">
                                                {{-- <button type="button"  class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> Beli ({{ $item->sum('jumlah_barang') }}) </button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div> <!--//app-card-body-->
                    </div> <!--//app-card-->
                </div> <!--//tab-pane-->
                
            </div><!--//tab-content-->
        </div>

    </section>
  
    <!-- Start Style -->
    <style>
        a{
            text-decoration: none;
            color: black
        }
        a:hover{
            color: black
        }
        .accordion-button:not(.collapsed) {
            color: black;
            background-color: white;
            border-color: #F2F2F2;
        }
    </style>
    <!-- End Style -->

    <!-- Start Footer -->
    @include('Layout.Pengguna-Layout.Footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="https://kit.fontawesome.com/1c164f6dc6.js" crossorigin="anonymous"></script>
    <script src="Zay/assets/js/jquery-1.11.0.min.js"></script>
    <script src="Zay/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="Zay/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Zay/assets/js/templatemo.js"></script>
    <script src="Zay/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>