<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Edit Kandang</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="/AdminPortal/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="/AdminPortal/assets/css/portal.css">

    <!-- Simbol -->
    <script src="https://kit.fontawesome.com/1c164f6dc6.js" crossorigin="anonymous"></script>
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
                    <h1 class="app-page-title mb-0">Edit Stok Kandang</h1>
                </div>
              </div> <!--//row-->

              <div class="app-card form ">
                
                <div class="app-card-body p-4">
                  <form action="{{ url('update-cage', $siCage->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
      
                    <div class="row">
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Kode Kandang</p>
                          <input disabled type="text" id=kode_kandang name=kode_kandang class="form-control" value={{ $siCage->kode_kandang }}>
                        </div>
                      </div>

                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Nama Kandang</p>
                          <input type="text" id=nama_kandang name=nama_kandang class="form-control" value={{ $siCage->nama_kandang }}>
                        </div>
                      </div>
      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Ukuran Kandang</p>
                          <select type="text" id=size_id name=size_id class="form-control" aria-label="Default select example" style="height:50px">
                            <option disabled value>Pilih Ukuran Kandang</option>
                            <option value="{{ $siCage->size_id }}">{{ $siCage->size->size }}</option>
                            @foreach ($dtSize as $item)
                            <option value="{{ $item->id }}">{{ $item->size }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Status Kandang</p>
                          <div class="form-group">
                            <select type="text" id=status_id name=status_id class="form-control" aria-label="Default select example" style="height:50px">
                              <option disabled value>Pilih Ketersediaan Kandang</option>
                              <option value="{{ $siCage->status_id }}">{{ $siCage->status->status }}</option>
                              @foreach ($dtStatus as $item)
                              <option value="{{ $item->id }}">{{ $item->status }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Harga Kandang</p>
                          <select type="text" id=harga name=harga class="form-control" aria-label="Default select example" style="height:50px">
                            <option disabled value>Pilih Harga Kandang</option>
                            <option value="{{ $siCage->size->id }}">{{ $siCage->size->size }} = Rp {{ number_format($siCage->size->harga) }}</option>
                            @foreach ($dtSize as $item)
                            <option value="{{ $item->id }}">{{ $item->size }} = Rp {{ number_format($item->harga) }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      {{-- <div class="mb-4">
                        <input class="form-control" id="gambar" name="gambar" type="file">
                      </div> --}}
                    </div>

                    <div class="d-grid gap-2 mx-auto">
                      <button type="submit" class="btn btn-success" style="color:white">Submit</button>
                    </div>

                  </form>
                </div><!--//app-card-body-->
            </div><!--//app-card-->
            </div> <!--//container-fluid-->
        </div> <!--//app-content-->
    </div> <!--//app-wrapper-->
    
    <!-- Javascript -->
    <script src="/AdminPortal/assets/plugins/popper.min.js"></script>
    <script src="/AdminPortal/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="/AdminPortal/assets/js/app.js"></script>

</body>
</html>