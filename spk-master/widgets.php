<?php
        include("koneksi.php");
		$sql = "SELECT * FROM datalaptop";
        $datalaptop = mysqli_query($db,$sql) or die(mysqli_error()); 
?>
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
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<body>
   <?php include("side.php");?>

    <div id="right-panel" class="right-panel">
    <?php include("header.php");?>
        <!-- Header-->
                <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                        </div>
                    </div>
                  
                        <div class="page-header float-right">
                        </div>
                    </div>
                    <div class="card card-default mb-5">
      		<div class="card-header h4">
      			Daftar Laptop
      		</div>
      		<div class="car-body">
      			<div class="table-responsive">
      				<table class="table table-stripped table-hover" id="datatables">
      					<tr class="">
      						<th>No</th>
		      				<th>MERK</th>
                              <th>JENIS</th>
                              <TH> TYPE LAPTOP</TH>
                              <TH>RAM</TH>
                              <TH> VGA</Th>
                              <TH> HARDISK</TH>
                              <TH>SSD</TH>
                              <TH>KRITERIA PROCESSOR</TH>
                              <TH>KECEPATAN PROCESSOR</TH>
                              <TH>HARGA</TH>
					</tr>
      			</div>
      		</div>
      	</div>
      </div>
    </div>
        </div>
                </div>
            </div>
        </div>
        
        <div class="clearfix"></div>
        
    </div>
    </div>


    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <!--Flot Chart-->
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
    <!-- local -->
    <script src="assets/js/widgets.js"></script>
        <?php
                  $id=1;
                  foreach ($datalaptop as $key => $value) { ?>
                  <tr>
                    <td><?= $id++ ?></td>
                    <td><?= $value['merk'] ?></td>
                    <td><?= $value['jenis'] ?></td>
                    <td><?= $value['vtype'] ?></td>
                    <td><?= $value['ram'] ?> GB</td>
                    <td><?= $value['vga'] ?></td>
                    <td><?= $value['hdd'] ?> GB</td>
                    <td><?= $value['ssd'] ?> GB</td>
                    <td><?= $value['processor'] ?></td>
                    <td><?= $value['kprocessor'] ?>GHz</td>
                    <td>Rp.<?=$value['harga'] ?></td>
                  </tr>
                  <?php }
        ?>
     

</table>
</body>
</html>
