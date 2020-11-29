<?php

include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?

//bobot angka ram
if($ram <2){
	$ram_angka = $ram;
}
elseif($ram == 6){
	$ram_angka = 5;
}

//bobot angga vga
if($vga == "NVidia_Geforce_MX150"){
	$vga_angka = 1;
}
elseif($vga== "Nvidia_GeForce_GTX940 MX"){
	$vga_angka = 2;
}
elseif($vga == "Nvidia_GeForce_GT930MX"){
	$vga_angka = 3;
}
elseif($vga == "Intel_Ultra_HD_Graphics_600"){
	$vga_angka = 4;
}
elseif($vga == "AMD_Radeon_R3"){
	$vga_angka = 5;
}
                                   
//bobot angka memori
if($hdd == 240){
	$hdd= 1;
}
elseif($hdd == 320){
	$hdd = 2;
}
elseif($hdd == 500){
	$hdd = 3;
}
elseif($hdd == 750 ){
	$hdd = 4;
}
elseif($hdd == 10000 ){
	$hdd = 5;
}
//bobot untuk ssd
if($ssd == 0){
	$ssd= 1;
}
elseif($ssd == 128){
	$ssd= 2;
}
elseif($ssd == 256){
	$ssd = 3;
}
elseif($ssd == 512){
	$ssd = 4;
}
elseif($ssd == 520){
	$ssd = 5;
}

//bobot angka processor
if($processor == "Intel_Celeron"){
	$processor_angka = 1;
}
elseif($processor == "Intel_Core_I3"){
	$processor_angka = 2;
}
elseif($processor == "Intel_Core_I5"){
	$processor_angka = 3;
}
elseif($processor == "Intel_Core_I7"){
	$processor_angka = 4;
}
elseif($processor == "Intel_Core_I9"){
	$processor_angka = 5;
}

//bobot angka kecepatan prosessor
if($ram <2){
	$ram_angka = $ram;
}
elseif($ram == 3.7){
	$ram_angka = 5;
}

    // ambil data dari formulir
    $id=$_POST['id'];
    $merk=$_POST['merk'];
    $jenis=$_POST['jenis'];
    $vtype=$_POST['vtype'];
    $ram=$_POST['ram'];
    $vga=$_POST['vga'];
    $hdd=$_POST['hdd'];
    $ssd=$_POST['ssd'];
    $processor=$_POST['processor'];
    $kprocessor=$_POST['kprocessor'];
    $harga=$_POST['harga'];

    // buat query
    mysqli_query($db,"insert into datalaptop values('$id','$merk','$jenis','$vtype','$ram','$vga','$hdd', '$ssd','$processor', '$kprocessor','$harga')");
     // apakah query simpan berhasil?
    if( $query == TRUE ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: widgets.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: widgets.php?status=sukses');
    }

?>