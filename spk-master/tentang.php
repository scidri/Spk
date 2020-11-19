<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    <?php include("side.php");?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><h4>Tanya Laptop</h4></a>
                    <a class="navbar-brand hidden" href="./"><img src="img/acer.jpg" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        
                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary"></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="img/profil.jpeg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a> -->

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><a class="nav-link" href="index.html">Dashboard</a></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">

                <div class="badges">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-header">
                                    <strong>Apple</strong>
                                </div>

                                <div class="card-body">
                                    <img class="img rounded-circle" src="img/apple.jpg" alt="img" height="180">
                                    <br> Kelebihan</br>
                                   <ul>
                                       <li>Daya Tahan Mesin Kuat</li>
                                       <li>Keamanan Sistem Operasi Baik</li>
                                       <li>Design Keren Macbook</li>
                                       <li>Hardware Berkualitas Tinggi</li>
                                       <li>User Friendly</li>
                                   </ul>
                                   <br>Kekurangan Laptop</br>
                                   <ul>
                                       <li>Harga Perbaikan/Repair Mahal</li>
                                       <li>Service Center / Tempat Service Langka</li>
                                       <li>Harga Aksesoris Mahal</li>
                                       <li>Dukungan Software & Game Kurang</li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Asus</strong>
                                </div>
                                <div class="card-body">
                                    <img class="img rounded-box" src="img/asus.jpg" alt="img"width="70%">
                                    <ul>
                                        <li>Merk IT yang terkenal sejak jaman PC</li>
                                        <li>Sebagian besar laptop Asus menggunakan VGA seperti ATI Radeon & Nvidia GForce,</li>
                                        <li>Harga yang murah </li>
                                        <li>Masalah Garansi Asus memberikan Garansi paling lama yaitu 2 tahun</li>
                                        
                                    </ul>
                                    <br>Kekurangan Laptop</br>
                                    <ul>
                                        <li> untuk seri Netbook tidak dilengkapi dengan Softcase</li>
                                        <li>Service Center / Tempat Service Langka</li>
                                        <li> Terlalu cepat mengeluarkan seri2 terbaru dengan spesifikasi lebih tinggi dan harga yg lebih murah,</li>
                                        <li>Untuk seri 12" sering terjadi error touchpad dan seri K43u AMD E350 error Harddisk </li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>HP</strong>
                                </div>
                                <div class="card-body">
                                    <img class="img rounded-BOX" src="img/hp.jpg" alt="img">
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>ACER</strong>
                                </div>
                                <div class="card-body">
                                    <img class="img rounded-circle"src="img/laptopacer.jpeg" alt="img">
                                </div>
                                
                            </div>
                        </div>


                    </div> 
                </div><!-- .row -->
            </div><!-- .animated -->
        </div>
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
