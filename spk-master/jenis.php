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

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
   <?php include("side.php");?>

    <div id="right-panel" class="right-panel">
        <?php include("header.php");?>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
                            <div class="card-body" >
                            <div class="card-header" >
                             <h4>Pilih Laptop</h4>
                                </div>
                                    <div class="default-tab">
                                    <form action="pilih.php" method="post">
                                        <div class="card-body-bobot">
                                            <div class="form-group row" >
                                                <label class="col-md-2 col-form-label h5">Merk</label>
                                                <div class="col-md-10">
                                                <select name="harga" class="form-control" required>
                                                    <option value="">- Merk -</option>        
                                                    <option value="5">Apple</option>
                                                    <option value="4">Asus</option>
                                                    <option value="3">HP</option>
                                                    <option value="2">Del</option>
                                                    <option value="1">Lenovo</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>	
                                        
                                        
                                        </div>	
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label h5">Jenis</label>
                                            <div class="col-md-10">
                                            <select name="processor" class="form-control" required>
                                        <option value="">- Jenis Laptop -</option>
                                              
                                        <option value="3">Gaming</option>
                                        <option value="5">kantor</option>
                                        <option value="5">2 in 1</option>

                                            </select>
                                        </div>
                                        </div>	
                                        
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">pilih</button>
                                        </div>
                                    </form>
                                                

                                            </div>

    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>
<?php

?>
</body>
</html>
