<?php 
include "koneksi.php";
  
//Bobot
$W1 = $_POST["merk"];
$W2 = $_POST["jenis"];
$W3 = $_POST["harga"];
$W4 = $_POST["ram"];
$W5 = $_POST["memori"];
$W6 = $_POST["processor"];
$W7 = $_POST["kprocessor"];

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

function JarakIplus($aplus,$bob){
  for ($i=0;$i<sizeof($bob);$i++) {
    $dplus[$i] = 0;
    for($j=0;$j<sizeof($aplus);$j++){
      $dplus[$i] = $dplus[$i] + pow(($aplus[$j] - $bob[$i][$j]),2);
    }
    $dplus[$i] = round(sqrt($dplus[$i]),4);
  }
  return $dplus;
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
      			Matrik Handphone
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
      					</tr>
                <?php 
                $no=1;
                  $query = "SELECT * FROM datalaptop";
                  $sql = mysqli_query($conn,$query);

                  foreach ($sql as $key => $value) { 

                    $Matrik[]=array(
                          $value['harga_angka'],
                          $value['ram_angka'],
                          $value['memori_angka'],
                          $value['processor_angka'],
                          $value['kamera_angka'] );
                    ?>
                  <tr>
                    <td><?= 'A',$no++ ?></td>
                    <td><?= $value['harga_angka'] ?></td>
                    <td><?= $value['ram_angka'] ?></td>
                    <td><?= $value['memori_angka'] ?></td>
                    <td><?= $value['processor_angka'] ?></td>
                    <td><?= $value['kamera_angka'] ?></td>
                  </tr>   
                  <?php } 
                ?>
	      			</table>
      			</div>
      		</div>
      	</div>

        <div class="card card-default mb-5">
          <div class="card-header h4">
            Matrik Normalisasi "R"
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
                </tr>
                <?php 
                $no=1;
                  $query = "SELECT * FROM datalaptop";
                  $sql = mysqli_query($conn,$query);
                  $pembagiNM=pembagiNM($Matrik);

                  foreach ($sql as $key => $value) { 
                    $MatrikNormalisasi[$no-1]=array(
                          $value['harga_angka']/$pembagiNM[0],
                          $value['ram_angka']/$pembagiNM[1],
                          $value['memori_angka']/$pembagiNM[2],
                          $value['processor_angka']/$pembagiNM[3],
                          $value['kamera_angka']/$pembagiNM[4]);
                  ?>

                  <tr>
                    <td><?= 'A',$no++ ?></td>
                    <td><?= round($value['harga_angka']/$pembagiNM[0],6) ?></td>
                    <td><?= round($value['ram_angka']/$pembagiNM[1],6) ?></td>
                    <td><?= round($value['memori_angka']/$pembagiNM[2],6) ?></td>
                    <td><?= round($value['processor_angka']/$pembagiNM[3],6) ?></td>
                    <td><?= round($value['kamera_angka']/$pembagiNM[4],6) ?></td>
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
		      				<th>MERK</th>
                              <th>JENIS</th>
                              <TH>RAM</TH>
                              <TH> VGA</Th>
                              <th>MEMORI</th>
                              <TH>KRITERIA PROCESSOR </TH>
                              <TH>HARGA</TH>
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
            Matriks Normalisasi Bobot Y
          </div>
          <div class="car-body">
            <div class="table-responsive">
              <table class="table table-stripped table-hover text-center" id="datatables">
                <tr class="">
                  <th>Alternatif</th>
                  <th>C1 (Cost)</th>
                  <th>C2 (Benefit)</th>
                  <th>C3 (Benefit)</th>
                  <th>C4 (Benefit)</th>
                  <th>C5 (Benefit)</th>
                </tr>
                <?php 
                  $no=1;
                  $query = "SELECT * FROM data_hp";
                  $sql = mysqli_query($conn,$query);
                  $pembagiNM=pembagiNM($Matrik);
                  foreach ($sql as $key => $value) { 
                    $NormalisasiBobot[$no-1]=array(
                            $MatrikNormalisasi[$no-1][0]*$W1,
                            $MatrikNormalisasi[$no-1][1]*$W2,
                            $MatrikNormalisasi[$no-1][2]*$W3,
                            $MatrikNormalisasi[$no-1][3]*$W4,
                            $MatrikNormalisasi[$no-1][4]*$W5
                          );
                  ?>

                  <tr>
                    <td><?= 'A',$no ?></td>
                    <td><?= round($MatrikNormalisasi[$no-1][0]*$W1,6) ?></td>
                    <td><?= round($MatrikNormalisasi[$no-1][1]*$W1,6) ?></td>
                    <td><?= round($MatrikNormalisasi[$no-1][2]*$W1,6) ?></td>
                    <td><?= round($MatrikNormalisasi[$no-1][3]*$W1,6) ?></td>
                    <td><?= round($MatrikNormalisasi[$no-1][4]*$W1,6) ?></td>
                  </tr>   
                  <?php $no++; } 
                ?>
              </table>
            </div>
          </div>
        </div>

        <div class="card card-default mb-5">
          <div class="card-header h4">
            Matrik Solusi ideal positif "A+" dan negatif "A-"
          </div>
          <div class="car-body">
            <div class="table-responsive">
              <table class="table table-stripped table-hover text-center" id="datatables">
                <tr class="">
                  <th></th>
                  <th>Y1 (Cost)</th>
                  <th>Y2 (Benefit)</th>
                  <th>Y3 (Benefit)</th>
                  <th>Y4 (Benefit)</th>
                  <th>Y5 (Benefit)</th>
                </tr>
                <?php 
                $NormalisasiBobotTrans = Transpose($NormalisasiBobot);
                ?>
                <tr>
                  <?php
                    $idealpositif=array(
                      min($NormalisasiBobotTrans[0]),
                      max($NormalisasiBobotTrans[1]),
                      max($NormalisasiBobotTrans[2]),
                      max($NormalisasiBobotTrans[3]),
                      max($NormalisasiBobotTrans[4])
                    );
                  ?>
                  <td>Y+ </td>
                  <td><?= round(min($NormalisasiBobotTrans[0]),6) ?> (Min)</td>
                  <td><?= round(max($NormalisasiBobotTrans[1]),6) ?> (Max)</td>
                  <td><?= round(max($NormalisasiBobotTrans[2]),6) ?> (Max)</td>
                  <td><?= round(max($NormalisasiBobotTrans[3]),6) ?> (Max)</td>
                  <td><?= round(max($NormalisasiBobotTrans[4]),6) ?> (Max)</td>
                </tr>
                <tr>
                  <?php  
                    $idealnegatif=array(
                      max($NormalisasiBobotTrans[0]),
                      min($NormalisasiBobotTrans[1]),
                      min($NormalisasiBobotTrans[2]),
                      min($NormalisasiBobotTrans[3]),
                      min($NormalisasiBobotTrans[4])
                    );
                  ?>
                  <td>Y-</td>
                  <td><?= round(max($NormalisasiBobotTrans[0]),6) ?> (Max)</td>
                  <td><?= round(min($NormalisasiBobotTrans[1]),6) ?> (Min)</td>
                  <td><?= round(min($NormalisasiBobotTrans[2]),6) ?> (Min)</td>
                  <td><?= round(min($NormalisasiBobotTrans[3]),6) ?> (Min)</td>
                  <td><?= round(min($NormalisasiBobotTrans[4]),6) ?> (Min)</td>

                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="card card-default mb-5">
          <div class="card-header h4">
            Jarak antara nilai terbobot setiap alternatif terhadap solusi ideal positif
          </div>
          <div class="car-body">
            <div class="table-responsive">
              <table class="table table-stripped table-hover text-center" id="datatables">
                <tr class="">
                  <th>D +</th>
                  <th></th>
                  <th>D -</th>
                  <th></th>
                </tr>
                <?php  
                 $query = "SELECT * FROM data_hp";
                 $sql = mysqli_query($conn,$query)or die(mysqli_error());
                 $no=1;
                  $Dplus=JarakIplus($idealpositif,$NormalisasiBobot);
                  $Dmin=JarakIplus($idealnegatif,$NormalisasiBobot);

                  foreach ($sql as $key => $value) { ?>
                  <tr>
                    <td>D<?= $no ?></td>
                    <td><?= round($Dplus[$no-1],6) ?></td>
                    <td>D<?= $no ?></td>
                    <td><?= round($Dmin[$no-1],6) ?></td>
                  </tr>
                  
                  <?php $no++;}
                ?>
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
                 $query = "SELECT * FROM data_hp";
                 $sql = mysqli_query($conn,$query)or die(mysqli_error());
                 $no=1;
                  $nilaiV = array();
                  foreach ($sql as $key => $value) { 
                    array_push($nilaiV, $Dmin[$no-1]/($Dmin[$no-1]+$Dplus[$no-1]));
                  ?>
                  <tr>
                    <td>V<?= $no ?></td>
                    <td><?= $Dmin[$no-1]/($Dmin[$no-1]+$Dplus[$no-1]) ?></td>
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
                  <th>Alternatif HP terpilih</th>
                </tr>
                <?php
                  $nilaiMax = max($nilaiV);

                  for ($i=0; $i < count($nilaiV) ; $i++) { 
                    if ($nilaiV[$i] == $nilaiMax) {
                      $query = mysqli_query($conn,"SELECT * FROM data_hp WHERE id_hp=$i+1 ") or die(mysqli_error()); ?>

                    <td>V<?= $i+1; ?></td>
                    <td><?= $nilaiV[$i] ?></td>
                    <td>
                      <?php
                        foreach ($query as $key => $value) {
                          echo $value['nama_hp'];
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

        <a href="rekomendasi.php" class="btn btn-primary mb-5">Hitung Rekomedasi Lagi</a>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
<!--   <footer class="py-5 bg-dark mt-5">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
   
  </footer> -->

  <!-- Bootstrap core JavaScript -->
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
