<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Tambah User Admin</title>

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
                    <h1 class="app-page-title mb-0">Tambah User Admin</h1>
                </div>
              </div> <!--//row-->

              <div class="app-card form ">
                
                <div class="app-card-body p-4">
                  <form action="simpan-create-admin" method="post">
                    {{ csrf_field() }}
      
                    <div class="row">
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Nama</p>
                          <input type="text" id=nama_admin name=nama_admin class="form-control">
                        </div>
                      </div>
      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Level</p>
                          <select type="text" id=level name=level class="form-control" aria-label="Default select example">
                            <option value="Superadmin">Superadmin</option>
                            <option value="Admin">Admin</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Jenis Kelamin</p>
                          <div class="form-group">
                            <select type="text" id=gender_id name=gender_id class="form-control" aria-label="Default select example">
                              @foreach ($dtGender as $item)
                              <option value="{{ $item->id }}">{{ $item->gender }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>No Telepon</p>
                          <input type="text" id=no_tlpn name=no_tlpn class="form-control">
                        </div>
                      </div>
      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Alamat</p>
                          <textarea type="text" id=alamat name=alamat class="form-control" style="height:100px"></textarea>
                        </div>
                      </div>
      
                      <div class="col-6 mb-4">
                        <div class="form-group">
                          <p>Email</p>
                          <input type="text" id=email name=email class="form-control" placeholder="example@gmail.com">
                        </div>
                      </div>
      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Password</p>
                          <input type="text" id=password name=password class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-row-reverse bd-highlight">
                      <div class="p-2 bd-highlight">
                        <button type="submit" class="btn btn-success" style="color:white">Submit</button>
                      </div>
                    </div>

                  </form>
                </div><!--//app-card-body-->
            </div><!--//app-card-->            
            </div> <!--//container-fluid-->
        </div> <!--//app-content-->
    </div> <!--//app-wrapper-->
    
    <!-- Javascript -->
    <script src="AdminPortal/assets/plugins/popper.min.js"></script>
    <script src="AdminPortal/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="AdminPortal/assets/js/app.js"></script>

</body>
</html>