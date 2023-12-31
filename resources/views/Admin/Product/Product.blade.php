<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Product</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="AdminPortal/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="AdminPortal/assets/css/portal.css">
</head>

<body class="app">
    <header class="app-header fixed-top">
        @include('Layout.Admin-Layout.Navbar')
        <!-- Navbar -->
        @include('Layout.Admin-Layout.Sidebar')
        <!-- Sidebar -->
    </header>

    {{-- UTAMA --}}
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Halaman Stok Barang</h1>
                    </div>
                    <div class="col-auto">
                        <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center">
                                        
                                        
                                        <div class="col-auto">
                                            <a href="create-product" class="btn app-btn-secondary">
                                                <i class="fa-solid fa-plus"></i> Tambah Barang 
                                            </a>
                                        </div>
                                        {{-- <div class="col-auto">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Launch demo modal
                                            </button>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </form>
                                </div>
								
								{{-- Tombol Download --}}
                                {{-- <div class="col-auto">
                                    <a class="btn app-btn-secondary" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path fill-rule="evenodd"
                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                        </svg>
                                        Download CSV
                                    </a>
                                </div> --}}

                            </div>
                            <!--//row-->
                        </div>
                        <!--//table-utilities-->
                    </div>
                    <!--//col-auto-->
                </div>
                <!--//row-->


                {{-- <nav id="orders-table-tab"
                    class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
                        href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
                        href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
                        href="#orders-pending" role="tab" aria-controls="orders-pending"
                        aria-selected="false">Pending</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled"
                        aria-selected="false">Cancelled</a>
                </nav> --}}


                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                        aria-labelledby="orders-all-tab">

                        {{-- FILTER --}}
                        {{-- <div>
                            <p>
                                <a class="btn btn-primary" style="color:white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                  Filter
                                </a>
                            </p>

                            <div class="collapse" id="collapseExample">
                                <input class="form-control" list="datalistKategori" id="exampleDataList" placeholder="Kategori">
                                <datalist id="datalistKategori">
                                    <option disabled value>Pilih Kategori</option>
                                        @foreach ($dtktgr as $item)
                                        <option value="{{ $item->kategori }}"></option>
                                        @endforeach
                                </datalist>
                            </div>

                            <div class="collapse" id="collapseExample">
                                <input class="form-control" list="datalistSatuan" id="exampleDataList" placeholder="Satuan">
                                <datalist id="datalistSatuan">
                                    <option disabled value>Pilih Satuan</option>
                                    @foreach ($dtstn as $item)
                                    <option value="{{ $item->satuan }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                        </div> --}}

                            <div class="row g-3 mb-2 align-items-center justify-content-between">
                                <div class="col-auto"></div>
                                <div class="col-auto">
                                    <div class="page-utilities">
                                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                            <div class="col-auto">
                                                <form action="/product" method="GET" class="table-search-form row gx-1 align-items-center">
                                                    <div class="col-auto">
                                                        <input type="search" id="search-orders" name="search"
                                                            class="form-control search-orders" placeholder="Search">
                                                    </div>  
                                                </form>
                                            </div>
                                        </div> <!--//row-->
                                    </div> <!--//table-utilities-->
                                </div> <!--//col-auto-->
                            </div> <!--//row-->


                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive rounded">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Kode Barang</th>
                                                <th class="cell">Nama</th>
                                                <th class="cell">Kategori</th>
                                                <th class="cell">Satuan</th>
                                                <th class="cell">Stok Barang</th>
                                                <th class="cell">Harga Jual</th>
                                                <th class="cell">Gambar</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dtPrdct as $item)
                                            <tr>
                                                <td class="cell">{{ $item->kode_barang }}</td>
                                                <td class="cell">{{ $item->nama_barang }}</td>
                                                <td class="cell">{{ $item->kategori->kategori}}</td>
                                                <td class="cell">{{ $item->satuan->satuan}}</td>
                                                <td class="cell">{{ number_format($item->stok) }}</td>
                                                <td class="cell">Rp {{ number_format($item->harga_jual) }}</td>
                                                <td width=20% class="cell"> <img src="{{ asset('img-Product/'. $item->gambar) }}" height="10%" width="40%" alt="" srcset=""> </td>                                     
                                                <td class="cell">
                                                    <div class="dropdown">
                                                        <a class="btn-sm app-btn-secondary" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                          View
                                                        </a>
                                                      
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                          <li><a class="dropdown-item" href="{{ url('edit-product', $item->id) }}">Edit</a></li>
                                                          <li><a class="dropdown-item" href="{{ url('delete-product', $item->id) }}">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!--//table-responsive-->
                            </div> <!--//app-card-body-->
                        </div> <!--//app-card-->

                        {{-- <nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav> <!--//app-pagination--> --}}
                       

                    </div> <!--//tab-pane-->
                </div> <!--//tab-content-->
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
    </div>
    <!--//app-wrapper-->

    <!-- Javascript -->
    <script src="AdminPortal/assets/plugins/popper.min.js"></script>
    <script src="AdminPortal/assets/plugins/bootstrap/js/bootstrap.min.js"></script>


    <!-- Page Specific JS -->
    <script src="AdminPortal/assets/js/app.js"></script>

</body>

</html>
