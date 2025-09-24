<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Menu</title>
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
                <!-- Silakan tambahkan konten body di sini -->
             <div class="container mt-4">
                <div class="card shadow-sm p-4">
                    <h4><i class="bi bi-journal-text"></i> Weekly Menu</h4>
                    <hr>
                    <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-warning">
                        <tr>
                            <th>Day</th>
                            <th>Menu</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr><td>Monday</td><td>Grilled Chicken Salad</td><td>$8.5</td></tr>
                        <tr><td>Tuesday</td><td>Beef Stir Fry</td><td>$9</td></tr>
                        <tr><td>Wednesday</td><td>Fish and Chips</td><td>$10</td></tr>
                        <tr><td>Thursday</td><td>Vegetarian Pasta</td><td>$7.5</td></tr>
                        <tr><td>Friday</td><td>BBQ Pork Ribs</td><td>$11</td></tr>
                        <tr><td>Saturday</td><td>Salmon Teriyaki</td><td>$12</td></tr>
                        <tr><td>Sunday</td><td>Roast Beef</td><td>$10.5</td></tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>    
            </main>
            @include('partials.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
