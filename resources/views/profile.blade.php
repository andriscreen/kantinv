<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile - Paragonian Canteen</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    @include('partials.navbar')
    <div id="layoutSidenav">
        @include('partials.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="container mt-4">
                    <!-- Silakan tambahkan konten body di sini -->
                  <div class="row justify-content-center">
                    <div class="col-md-6">

                    <div class="card shadow-sm p-4">
                        <div class="text-center">
                        <img src="https://nasdemdprri.id/storage/app/uploads/public/682/32e/b41/68232eb418fd2375710109.jpeg" 
                            class="rounded-circle mb-3" width="120" height="120" alt="Profile Photo">
                        <h4>Nama Karyawan</h4>
                        <p class="text-muted">Departement</p>
                        </div>

                        <hr>

                        <p><i class="bi bi-person-badge"></i> <strong>ID:</strong> EMP001</p>
                        <p><i class="bi bi-telephone"></i> <strong>Phone:</strong> 08123456789</p>
                        <p><i class="bi bi-envelope"></i> <strong>Email:</strong> email@example.com</p>
                        <p><i class="bi bi-key"></i> <strong>Password:</strong> ********</p>

                        <div class="text-center mt-3">
                        <a href="edit_profile.html" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i> Edit Profile
                        </a>
                        </div>
                    </div>

                    </div>
                </div>  
            </main>
            @include('partials.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
