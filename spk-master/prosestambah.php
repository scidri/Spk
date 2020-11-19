
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
    <!-- Left Panel -->

 <?php include("side.php"); ?>
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
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.php">Dashboard</a></li>
                                   
                                </ol>
                            </div>
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
                                    <form action="post.php" method="post">
                                    <div class="card-body-bobot">
                                    <div class="form-group row" >
                                                <label class="col-md-2 col-form-label h5">Kode Laptop</label>
                                                <div class="col-md-10">
                                                <input type="text" name="id" class="form-control" required placeholder="-Kode Laptop-">
                                                </div>
                                            </div>
                                    <div class="form-group row" >
                                                <label class="col-md-2 col-form-label h5">Merk</label>
                                                <div class="col-md-10">
                                                <select name="merk" class="form-control" required>
                                                    <option value="">- Merk -</option>        
                                                    <option value="Apple">Apple</option>
                                                    <option value="Asus">Asus</option>
                                                    <option value="HP">HP</option>
                                                    <option value="Del">Del</option>
                                                    <option value="Lenovo">Lenovo</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group row" >
                                                <label class="col-md-2 col-form-label h5">Jenis</label>
                                                <div class="col-md-10">
                                                <input type="text" name="jenis" class="form-control" required placeholder="-Kriteria jenis-">
                                                </div>
                                            </div>
                                            <div class="card-body-bobot">
                                            <div class="form-group row" >
                                                <label class="col-md-2 col-form-label h5">Type Laptop</label>
                                                <div class="col-md-10">
                                                <input type="text" name="vtype" class="form-control" required placeholder="-Kriteria Laptop-">
                                                </div>
                                            </div>
                                        </div>	
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label h5">RAM</label>
                                            <div class="col-md-10">
                                            <select name="ram" class="form-control" required>
                                        <option value="">- kriteria RAM -</option>
                                                <option value="2">2 GB</option>
                                        <option value="4">4 GB</option>
                                        <option value="6">6 GB</option>
                                        <option value="8">8 GB</option>
                                        <option value="16"> 16 GB</option>
                                            </select>
                                        </div>
                                        </DIV>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label h5">VGA</label>
                                            <div class="col-md-10">
                                            <select name="vga" class="form-control" required>
                                        <option value="">- kriteria VGA -</option>
                                                <option value="NVidia_Geforce_MX150">NVidia Geforce MX150</option>
                                        <option value="Nvidia_GeForce_GTX940 MX">Nvidia GeForce GTX940 MX</option>
                                        <option value="Nvidia_GeForce_GT930MX">Nvidia GeForce GT930MX</option>
                                        <option value="Intel_Ultra_HD_Graphics_600">Intel Ultra HD Graphics 600</option>
                                        <option value="AMD_Radeon_R3">AMD Radeon R3</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label h5">Memori</label>
                                            <div class="col-md-10">
                                            <select name="hdd" class="form-control" required>
                                        <option value="">- kriteria Hardisk -</option>
                                        <option value="240">240 GB</option>
                                        <option value="320">320 GB</option>
                                        <option value="500">500 GB</option>
                                        <option value="750">750 GB</option>
                                        <option value="10000">1 TB</option>
                                            </select>
                                            <select name="ssd" class="form-control" required>
                                        <option value="">- kriteria SSD-</option>
                                        <option value="0">0 </option>
                                        <option value="128">128 GB</option>
                                        <option value="256">256 GB</option>
                                        <option value="512">512 GB<option>
                                            </select>
                                        </div>
                                        </div>	
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label h5">Processor</label>
                                            <div class="col-md-10">
                                            <select name="processor" class="form-control" required>
                                        <option value="">- kriteria Processor -</option>
                                                <option value="Intel_Celeron">Intel Celeron</option>
                                                <option value="Intel_Core_I3">Intel Core I3</option>
                                        <option value="Intel_Core_I5">Intel Core I5</option>
                                        <option value="Intel_Core_I7">Intel Core I7</option>
                                            </select>
                                        </div>
                                        </div>	
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label h5">Kecepatan Processor</label>
                                            <div class="col-md-10">
                                        <input type="text" name="kprocessor"  class="form-control" required placeholder="-Kepatan Processor-">
                                    </div>
                                    </div>	
                                        <div class="card-body-bobot">
                                            <div class="form-group row" >
                                                <label class="col-md-2 col-form-label h5">Kriteria Harga</label>
                                                <div class="col-md-10">
                                                <input type="text" name="harga" class="form-control" required placeholder="-Kriteria Harga-">
                                                </div>
                                            </div>
                                        </div>	
                                        </div>
                                        </div>		
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" name="input">INPUT</button>
                                        </div>

                                    </form>
                                                

                                     </div>
    </body>
    </html>
