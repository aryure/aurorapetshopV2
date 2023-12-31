<!DOCTYPE html>
<html lang="en">
  
<head>
  <title>Aurora Petshop | Login</title>

  {{-- @laravelPWA --}}

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('StrapDashUser/assets/css/login.css')}}">

</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            {{-- <img src="{{ asset('StrapDashUser/assets/images/logo.svg')}}" alt="logo" class="logo"> --}}
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Daftar</h1>

            <form action="simpan-create-user" method="post">

              {{ csrf_field() }}

              <div class="form-group">
                <label for="nama">Nama <span style="color: red">*</span></label>
                <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="">
              </div>

              <div class="form-group">
                <label for="nama">Jenis Kelamin <span style="color: red">*</span></label>
                <select type="text" id=gender_id name=gender_id class="form-control" aria-label="Default select example">
                  @foreach ($dtGender as $item)
                  <option value="{{ $item->id }}">{{ $item->gender }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="email">Email <span style="color: red">*</span></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
              </div>

              {{-- <div class="form-group">
                <label for="email">Nomor Handphone</label>
                <input type="email" name="nama_pengguna" id="nama_pengguna" class="form-control" placeholder="">
              </div>

              <div class="form-group">
                <label for="email">Alamat </label>
                <input type="email" name="nama_pengguna" id="nama_pengguna" class="form-control" placeholder="">
              </div> --}}

              <div class="form-group mb-4">
                <label for="password">Password <span style="color: red">*</span></label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
              </div>

              <div class="mb-1">
                <button type="submit" class="btn btn-block btn-outline-success">Submit</button>
              </div>
            </form>
            
            {{-- <a href="#!" class="forgot-password-link">Lupa password?</a> --}}
            <p class="login-wrapper-footer-text">Sudah Punya Akun? <a href="/login" class="text-reset">Masuk Disini</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{ asset('StrapDashUser/assets/images/login-cus.jpg')}}" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>