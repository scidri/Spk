<?php 
include "koneksi.php";
$W1=$_POST['harga'];  
$W2=$_POST['ram'];
$W3=$_POST['vga'];
$W4=$_POST['hdd'];
$W5=$_POST['ssd'];
$W6=$_POST['processor'];
$W7=$_POST['kprocessor'];                                                                
//Pembagi Normalisasi
function pembagiNM($matrik){

  for($i=0;$i<5;$i++){
    $pangkatdua[$i] = 0;
    for($j=0;$j<sizeof($matrik);$j++){
      $pangkatdua[$i] = $pangkatdua[$i] + pow($matrik[$j][$i],2);
    }
    $pembagi[$i] = sqrt($pangkatdua[$i]);
  }
  return $pembagi;
}

//Normalisasi
function Transpose($squareArray) {

  if ($squareArray == null) { return null; }
  $rotatedArray = array();
  $r = 0;

  foreach($squareArray as $row) {
      $c = 0;
      if (is_array($row)) {
          foreach($row as $cell) { 
              $rotatedArray[$c][$r] = $cell;
              ++$c;
          }
      }
      else $rotatedArray[$c][$r] = $row;
      ++$r;
  }
  return $rotatedArray;
}

?>
<!DOCTYPE html>
<html lang="en">
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
<header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><h4>Dashboard</h4></a>
                </div>
            </div>
</header>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
        <div class="alert alert-default"><h3>Hasil Rekomendasi</h3></div>
      	<div class="card card-default mb-5">
      		<div class="card-header h4">
      			Matrik Laptop
      		</div>
      		<div class="car-body">
      			<div class="table-responsive">
      				<table class="table table-stripped table-hover" id="datatables">
      					<tr class="">
      						<th>Alternatif</th>
		      				<th>C1 (Cost)</th>
		      				<th>C2 (Benefit)</th>
		      				<th>C3 (Benefit)</th>
                  <th>C4 (Benefit)</th>
		      				<th>C5 (Benefit)</th>
		      				<th>C6 (Benefit)</th>
      					</tr>
                <?php 
                $no=1;
                  $query = "SELECT * FROM datalaptop";
                  $sql = mysqli_query($db,$query);

                  foreach ($sql as $key => $value) { 

                    $Matrik[]=array(
                          $value['harga'],
                          $value['ram'],
                          $value['hdd'],
                          $value['ssd'],
                          $value['vga'],
                          $value['processor'], 
                          $value['kprocessor'] );
                    ?>
                  <tr>
                    <td><?= 'a',$no++ ?></td>
                    <td><?= $value['harga'] ?></td>
                    <td><?= $value['ram'] ?></td>
                    <td><?= $value['hdd'] ?></td>
                    <td><?= $value['ssd'] ?></td>
                    <td><?= $value['vga'] ?></td>
                    <td><?= $value['processor'] ?></td>
                    <td><?= $value['kprocessor'] ?></td>
                  </tr>   
                  <?php } 
                ?>
	      			</table>
      			</div>
      		</div>
      	</div>

        <div class="card card-default mb-5">
          <div class="card-header h4">
          Perhitungan Vektor S
          </div>
          <div class="car-body">
            <div class="table-responsive">
              <table class="table table-stripped table-hover" id="datatables">
                <tr class="">
                <th>Alternatif</th>
		      				<th>C1 (Cost)</th>
		      				<th>C2 (Benefit)</th>
		      				<th>C3 (Benefit)</th>
                  <th>C4 (Benefit)</th>
		      				<th>C5 (Benefit)</th>
		      				<th>C6 (Benefit)</th>
                </tr>
                <?php 
                $no=1;
                  $query = "SELECT * FROM datalaptop";
                  $sql = mysqli_query($db,$query);
                  $pembagiNM=pembagiNM($Matrik);

                  foreach ($sql as $key => $value) { 
                    $MatrikNormalisasi[$id-1]=array(
                          $value['harga_angka']/$pembagiNM[0],
                          $value['ram_angka']/$pembagiNM[1],
                          $value['hhd_angka']/$pembagiNM[2],
                          $value['ssd_angka']/$pembagiNM[3],
                          $value['vga_angka']/$pembagiNM[4],
                          $value['processor_angka']/$pembagiNM[5],
                          $value['kprocessor_angka']/$pembagiNM[5]);
                  ?>

                  <tr>
                    <td><?= 'A',$id++ ?></td>
                    <td><?= round($value['harga_angka']/$pembagiNM[0],6) ?></td>
                    <td><?= round($value['ram_angka']/$pembagiNM[1],6) ?></td>
                    <td><?= round($value['hdd_angka']/$pembagiNM[2],6) ?></td>
                    <td><?= round($value['ssd_angka']/$pembagiNM[3],6) ?></td>
                    <td><?= round($value['vga_angka']/$pembagiNM[4],6) ?></td>
                    <td><?= round($value['processor_angka']/$pembagiNM[5],6) ?></td>
                    <td><?= round($value['kprocessor_angka']/$pembagiNM[6],6) ?></td>
                  </tr>   
                  <?php } 
                ?>
              </table>
            </div>
          </div>
        </div>

        <div class="card card-default mb-5">
          <div class="card-header h4">
            Bobot W
          </div>
          <div class="car-body">
            <div class="table-responsive">
            <table class="table table-stripped table-hover" id="datatables">
      					<tr class="">
                <TH>HARGA</TH>
                <TH>RAM</TH>
                <TH> VGA</Th>
                <th>HDD</th>
                <TH>SSD</TH>
                <TH>PROCESSOR</TH>
                <TH>KRITERIA PROCESSOR </TH>
                </tr>
                <tr>
                  <td><?= $W1 ?></td>
                  <td><?= $W2 ?></td>
                  <td><?= $W3 ?></td>
                  <td><?= $W4 ?></td>
                  <td><?= $W5 ?></td>
                  <td><?= $W6 ?></td>
                  <td><?= $W7 ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="card card-default mb-5">
          <div class="card-header h4">
            Nilai Preferensi untuk Setiap alternatif (V)
          </div>
          <div class="car-body">
            <div class="table-responsive">
              <table class="table table-stripped table-hover text-center" id="datatables">
                <tr class="">
                  <th>Nilai Preferensi "V"</th>
                  <th>Nilai</th>
                </tr>
                <?php  
                 $query = "SELECT * FROM datalaptop";
                 $sql = mysqli_query($conn,$query)or die(mysqli_error());
                 $no=1;
                  $nilaiV = array();
                  foreach ($sql as $key => $value) { 
                    array_push($nilaiV, $Dmin[$id-1]/($Dmin[$id-1]+$Dplus[$no-1]));
                  ?>
                  <tr>
                    <td>V<?= $id ?></td>
                    <td><?= $Dmin[$id-1]/($Dmin[$id-1]+$Dplus[$id-1]) ?></td>
                  </tr>
                  
                  <?php $no++;}
                ?>
              </table>
            </div>
          </div>
        </div>
        <div class="card card-default mb-5">
          <div class="card-header h4">
            Nilai Preferensi tertinggi
          </div>
          <div class="car-body">
            <div class="table-responsive">
              <table class="table table-stripped table-hover text-center" id="datatables">
                <tr class="">
                  <th>Nilai Preferensi tertinggi</th>
                  <th></th>
                  <th>Alternatif Laptop terpilih</th>
                </tr>
                <?php
                  $nilaiMax = max($nilaiV);

                  for ($i=0; $i < count($nilaiV) ; $i++) { 
                    if ($nilaiV[$i] == $nilaiMax) {
                      $query = mysqli_query($conn,"SELECT * FROM datalaptop WHERE id=$i+1 ") or die(mysqli_error()); ?>

                    <td>V<?= $i+1; ?></td>
                    <td><?= $nilaiV[$i] ?></td>
                    <td>
                      <?php
                        foreach ($query as $key => $value) {
                          echo $value['vtype'];
                        }
                      ?>
                    </td>
                    
                    <?php }
                  }
                ?>
              </table>
            </div>
          </div>
        </div>

        <a href="pilih.php" class="btn btn-primary mb-5">Hitung Rekomedasi Lagi</a>
      </div>
    </div>
  </div>

  <script src="jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/datatables.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript">
  	$(document).ready(function() {
	    $("#datatables").DataTable();
	} );
  </script>
</body>

</html>