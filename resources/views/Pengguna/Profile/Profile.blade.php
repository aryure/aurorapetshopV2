<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aurora Petshop</title>

    {{-- @laravelPWA --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="/Zay/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Zay/assets/css/templatemo.css">
    <link rel="stylesheet" href="/Zay/assets/css/custom.css">
    
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/Zay/assets/css/fontawesome.min.css">

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

    <!-- Open Content -->
    <section>
        <div class="container mt-5 pb-5">
            <div class="row">
                
                <div class="col-lg-12 mt-2">
                    <div class="card border-light">

                        <div class="row mt-3">

                            <nav id="profile-table-tab" class="profile-table-tab app-nav-tabs nav shadow-sm flex-sm-row mb-4">
                                <a  class="flex-sm-fill text-sm-center nav-link active" id="profile-biodata-tab" data-bs-toggle="tab"
                                    href="#profile-biodata" role="tab" aria-controls="profile-biodata" aria-selected="true">
                                    Biodata
                                </a>
                                {{-- <a class="flex-sm-fill text-sm-center nav-link" id="profile-order-history-tab" data-bs-toggle="tab"
                                    href="#profile-order-history" role="tab" aria-controls="profile-order-history" aria-selected="false">
                                    Order Histori
                                </a> --}}
                                <a class="flex-sm-fill text-sm-center nav-link" id="profile-petcare-history-tab" data-bs-toggle="tab"
                                    href="#profile-petcare-history" role="tab" aria-controls="profile-petcare-history"
                                    aria-selected="false">
                                    PetCare Histori
                                </a>
                                {{-- <a class="flex-sm-fill text-sm-center nav-link" id="informasi-pembayaran-tab" data-bs-toggle="tab"
                                    href="#informasi-pembayaran" role="tab" aria-controls="informasi-pembayaran"
                                    aria-selected="false">
                                    Informasi Rekening Pembayaran
                                </a> --}}
                            </nav>


                            <div class="tab-content" id="profile-table-tab-content">
                                
                                <div class="tab-pane fade show active" id="profile-biodata" role="tabpanel" aria-labelledby="profile-biodata-tab">
                                    <div class="app-card app-card-profile-table mt-5">
                                        <div class="app-card-body">
                                            
                                            <div>
                                                <P class="fs-5 fw-bold">Biodata Diri</P>

                                                @foreach ($dtUser as $item)
                                                <div class="row">
                                                    <div class="col-5 col-md-2">
                                                        <P class="fs-6">Nama</P>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <P class="fs-6">: {{ $item->nama_user }}
                                                        </P>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5 col-md-2">
                                                        <P class="fs-6">Jenis Kelamin</P>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <P class="fs-6">: {{ $item->gender->gender }}</P>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5 col-md-2">
                                                        <P class="fs-6">Alamat</P>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <P class="fs-6">: {{ $item->alamat }}</P>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>

                                            <div class="mt-5">
                                                <P class="fs-5 fw-bold">Akun</P>

                                                @foreach ($dtUser as $item)
                                                <div class="row">
                                                    <div class="col-5 col-md-2">
                                                        <P class="fs-6">Email</P>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <P class="fs-6">: {{ $item->email }}</P>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-5 col-md-2">
                                                        <P class="fs-6">Nomor HP</P>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <P class="fs-6">: {{ $item->no_tlpn }}</P>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                
                                        </div> <!--//app-card-body-->
                                    </div> <!--//app-card-->
                                </div> <!--//tab-pane-->

                                {{-- ORDER BARANG --}}
                                {{-- <div class="tab-pane fade mt-5" id="profile-order-history" role="tabpanel" aria-labelledby="profile-order-history-tab">
                                    <div class="app-card app-card-profile-table mb-5">
                                        <div class="app-card-body">
                                            <div class="table-responsive">

                                                <table class="table mb-3 text-left">
                                                    <thead>
                                                        <tr>
                                                            <th class="cell">Order</th>
                                                            <th class="cell">Date</th>
                                                            <th class="cell">Status</th>
                                                            <th class="cell">Total Barang</th>
                                                            <th class="cell">Total Harga</th>
                                                            <th class="cell"></th>
                                                        </tr>
                                                    </thead>

                                                    @foreach ($dtOdrShp as $item)
                                                    <tbody>
                                                        <tr>
                                                            <td class="cell"># {{ $item->kode_resi }}</td>
                                                            <td class="cell">
                                                                <span>{{ $item->tanggal_transaksi }}</span>
                                                                <span class="note">2:16 PM</span>
                                                            </td>
                                                            <td class="cell">
                                                                <span class="badge bg-success">Paid</span>
                                                                <span class="badge bg-danger">Unpaid</span>
                                                                {{ $item->paystat->paystat }}
                                                            </td>
                                                            <td class="cell">{{ $item->total_barang }}</td>
                                                            <td class="cell">Rp {{ number_format($item->total_bayar) }}</td>
                                                            <td class="cell">
                                                                <a class="btn btn-sm btn-outline-success" type="button" href="{{ url('/profile/history-order-shop', $item->id) }}">
                                                                    Detail
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    @endforeach
                                                </table>
                                            </div> <!--//table-responsive-->
                                        </div> <!--//app-card-body-->
                                    </div> <!--//app-card-->
                                </div> <!--//tab-pane--> --}}

                                {{-- ORDER PETCARE --}}
                                <div class="tab-pane fade mt-5" id="profile-petcare-history" role="tabpanel" aria-labelledby="profile-petcare-history-tab">
                                    <div class="app-card app-card-profile-table mb-5">
                                        <div class="app-card-body">
                                            <div class="table-responsive">

                                                <table class="table mb-4 text-left">
                                                    <thead>
                                                        <tr>
                                                            <th class="cell">Kode Resi</th>
                                                            <th class="cell">Tanggal Transaksi</th>
                                                            <th class="cell">Status</th>
                                                            <th class="cell">Total</th>
                                                            <th class="cell"></th>
                                                        </tr>
                                                    </thead>

                                                    @foreach ($dtOdrPtcr as $item)
                                                    <tbody>
                                                        <tr>
                                                            <td class="cell"># {{ $item->kode_resi }}</td>
                                                            <td class="cell">{{ $item->tanggal_transaksi }}</td>
                                                            <td class="cell">
                                                                {{ $item->paystat->paystat }}
                                                                
                                                                {{-- Masih Eror IF ELSE --}}
                                                                {{-- @if ($paystat==1) 
                                                                    <span class="badge bg-success">Paid</span>
                                                                @else
                                                                    <span class="badge bg-danger">Unpaid</span>
                                                                @endif --}}
                                                            </td>
                                                            <td class="cell">Rp {{ number_format($item->total_bayar) }}</td>
                                                            <td class="cell">
                                                                <a class="btn btn-sm btn-outline-success" type="button" href="{{ url('/profile/history-order-petcare', $item->id) }}">
                                                                    Detail
                                                                </a>
                                                            </td>
                                                            {{-- <td class="cell">
                                                                <div class="dropdown">
                                                                    <button type="button"  class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalDetailPetCare">
                                                                        Detail
                                                                    </button>
                                                                </div>
                                                            </td> --}}
                                                        </tr>
                                                    </tbody>
                                                    @endforeach
                                                </table>

                                                {{-- UNTUK POPUP SELANJUTNYA --}}
                                                <!-- Modal Detail Transaksi -->
                                                {{-- <div class="modal fade" id="ModalDetailPetCare" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Detail Histori Order</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('postlogin_user') }}" method="post" enctype="multipart/form-data">

                                                                    {{ csrf_field() }}
                                                    
                                                                    <div class="mb-4">
                                                                        <input class="form-control" id="gambar" name="gambar" type="file">
                                                                    </div>
                                                                    <div class="d-grid mx-auto">
                                                                        <button class="btn btn-outline-success" type="submit">Submit</button>
                                                                    </div>
                                                                    <div class="d-grid mx-auto">
                                                                        <p class="fs-6">Belum Punya Akun? <a href="/register" class="fs-6">Daftar Disini</a></p>
                                                                    </div>
                                                                </form>

                                                                @foreach ($siOdrPtcr as $item)
                                                                    <div>
                                                                        <div class="row">
                                                                            <div class="col-6 col-md-4">
                                                                                <P class="fs-6">Ukuran Kandang</P>
                                                                            </div>
                                                                            <div class="col-6 col-md-6">
                                                                                <P class="fs-6">: {{ $item->ukuran_kandang }}</P>
                                                                            </div>
                                                                        </div>                  
                                                                        <div class="row">
                                                                            <div class="col-6 col-md-4">
                                                                                <P class="fs-6">Tanggal Checkin</P>
                                                                            </div>
                                                                            <div class="col-6 col-md-6">
                                                                                <P class="fs-6">: {{ $item->tanggal_checkin }}</P>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 col-md-4">
                                                                                <P class="fs-6">Tanggal Checkout</P>
                                                                            </div>
                                                                            <div class="col-6 col-md-6">
                                                                                <P class="fs-6">: {{ $item->tanggal_checkout }}</P>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                            </div> <!--//table-responsive-->
                                        </div> <!--//app-card-body-->
                                    </div> <!--//app-card-->
                                </div> <!--//tab-pane-->
                                
                            </div><!--//tab-content-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Footer -->
    <div class="mt-3">
        @include('Layout.Pengguna-Layout.Footer')
    </div>
    
    <!-- End Footer -->

    <!-- Start Style -->
    <style>
        a{
            text-decoration: none;
            color: black
        }
        a:hover{
            color: #59ab6e
        }
    </style>
    <!-- End Style -->

    <!-- Start Script -->
    <script src="/Zay/assets/js/jquery-1.11.0.min.js"></script>
    <script src="/Zay/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/Zay/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/Zay/assets/js/templatemo.js"></script>
    <script src="/Zay/assets/js/custom.js"></script>
    <script src="https://kit.fontawesome.com/1c164f6dc6.js" crossorigin="anonymous"></script>
    <!-- End Script -->
</body>

</html>