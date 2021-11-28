<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/css/admin/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
                <a class="nav-link"  href="/" role="button" aria-expanded="false"><i class="fas fa-home"></i></a>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Beranda
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="{{route('about.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-info"></i></div>
                                About Us
                            </a>
                            <a class="nav-link" href="{{route('laundrykat.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Kategori Laundry
                            </a>
                            <a class="nav-link" href="pelanggan">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Pelanggan
                            </a>
                            <a class="nav-link" href="{{route('transaksi.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-money-check-alt"></i></div>
                                Transaksi
                            </a>
                            <a class="nav-link" href="rekap">
                                <div class="sb-nav-link-icon"><i class="fas fa-money-check-alt"></i></div>
                                Rekap Hasil Transaksi
                            </a>
                            <a class="nav-link" href="{{route('pickup.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck-pickup"></i></div>
                                Pick Up
                            </a>
                            <a class="nav-link" href="{{route('testimoni.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck-pickup"></i></div>
                                Testimoni
                            </a>
                        </div>
                    </div>
            </div>
            <div id="layoutSidenav_content">
                
                @yield('content')
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/css/admin/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/css/admin/assets/demo/chart-area-demo.js"></script>
        <script src="/css/admin/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/css/admin/js/datatables-simple-demo.js"></script>

        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'deskripsi' );
            CKEDITOR.replace( 'isi' );
        </script>
        @yield('chart')
    </body>
</html>
