<?php 
include 'koneksi.php';       
$sql = "SELECT * FROM login";
$query = mysqli_query($db, $sql);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TANYA LAPTOP</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">
<form>

<div class="card card-default mb-5">
      		<div class="card-header h4">
        <div class="container">
            <div class="login-content">

                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>KELOLA LAPTOP</label>
                            <ol class="breadcrumb text-right">
                                    <li><a href="index.php">Dashboard</a></li>
                                   
                                </ol>
                        </div>
                        <div class="social-login-content">
                            <div class="social-button">
                            <div class="card card-default mb-3">
                               <P><a href="prosestambah.php" class="btn btn-primary pull-right" ste="float: right;"><i class="fa fa-clipboard" style="font-size:28px;"></i>Tambah</a></P>
                               </div>
                               <div class="card card-default mb-3">
                               <P><a href="edit.php?" class="btn btn-primary pull-right" style="float: right;"><i class="fa fa-edit" style="font-size:28px"></i>EDIT</a></P>
                               <!-- </DIV>
                               <div class="card card-default mb-3">
                               <P> <a href="hapus.php?" class="btn btn-danger" style="float: right;"><i class="fa fa-trash" style="font-size:28px"></i>HAPUS</a></P>
                                </DIV> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                      
      		</div>
</div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
