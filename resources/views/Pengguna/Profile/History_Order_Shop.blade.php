<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aurora Petshop</title>

    @laravelPWA

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

            <div class="mb-4 mt-4">
                <h4>History Order Shop</h4>
            </div>

            <div class="row">
                
                <div class="col-lg-12 mt-2">
                    <div class="card border-light">

                        

                            <div class="row mt-3">

                                


                                
                            </div> <!-- End isi Cart -->
                        
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