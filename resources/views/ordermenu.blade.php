<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Order Menu</title>
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
                        <h4 class="mb-4"><i class="bi bi-calendar-week"></i> Select Week & Year</h4>
                        <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Week</label>
                            <select class="form-select" id="weekSelect">
                            <option>Week 1</option>
                            <option>Week 2</option>
                            <option>Week 3</option>
                            <option>Week 4</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Year</label>
                            <input type="number" id="yearSelect" class="form-control" value="2025" />
                        </div>
                        </div>

                        <div class="mt-4">
                        <div class="row g-3">
                            <?php
                            $days = [
                            "Monday" => "Grilled Chicken Salad",
                            "Tuesday" => "Beef Stir Fry",
                            "Wednesday" => "Fish and Chips",
                            "Thursday" => "Vegetarian Pasta",
                            "Friday" => "BBQ Pork Ribs",
                            "Saturday" => "Salmon Teriyaki",
                            "Sunday" => "Roast Beef"
                            ];
                            foreach ($days as $day => $menu) {
                            echo '
                            <div class="col-md-4">
                                <div class="card h-100 meal-card">
                                <div class="card-body">
                                    <h5>'.$day.'</h5>
                                    <p>'.$menu.'</p>
                                    <div class="form-check mt-2">
                                    <input class="form-check-input meal-checkbox" type="checkbox">
                                    <label class="form-check-label">Select</label>
                                    </div>
                                </div>
                                </div>
                            </div>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Plant Dropdown -->
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <label class="form-label">Plant</label>
                            <select class="form-select" id="plantSelect">
                                <option>Jatake 1</option>
                                <option>Jatake 2</option>
                                <option>Jatake 3</option>
                                <option>Jatake 4</option>
                                <option>Jatake 5</option>
                                <option>Jatake 6</option>
                                <option>Jatake 7</option>
                            </select>
                        </div>
                    </div>

                                        <!-- detail canteen Dropdown -->
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <label class="form-label">Plant</label>
                            <select class="form-select" id="plantSelect">
                                <option>Canteen J6 Depan</option>
                                <option>Canteen J6 Belakang</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <span id="summary"><b>0 days selected</b></span>
                        <button class="btn btn-warning">Save Order</button>
                    </div>
                </div>
            </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
