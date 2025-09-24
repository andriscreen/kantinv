<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ url('/') }}">Paragonian Canteen</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Ticket Icon and Notification Icon (visible on md and up) -->
    <ul class="navbar-nav ms-auto me-2 d-none d-md-flex flex-row align-items-center">
        <li class="nav-item me-3">
            <a class="nav-link" href="#"><i class="bi bi-ticket-detailed-fill fs-5"></i></a>
        </li>
        <li class="nav-item me-3">
            <a class="nav-link position-relative" href="#">
                <i class="bi bi-bell-fill fs-5"></i>
                <span class="position-absolute top-50 start-70 translate-middle badge rounded-pill bg-danger" style="font-size:0.6rem;">3</span>
            </a>
        </li>
    </ul>
    <!-- Ticket Icon and Notification Icon (dropdown on small screens) -->
    <ul class="navbar-nav d-md-none ms-auto me-2">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="iconDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-three-dots-vertical"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="iconDropdown">
                <li>
                    <a class="dropdown-item" href="#"><i class="bi bi-ticket-detailed-fill me-2"></i>Ticket</a>
                </li>
                <li>
                    <a class="dropdown-item position-relative" href="#">
                        <i class="bi bi-bell-fill me-2"></i>Notification
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size:0.6rem;">3</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ asset('profile') }}">Settings</a></li>
                <li><a class="dropdown-item" href="#">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
