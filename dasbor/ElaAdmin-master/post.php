<?php

include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Input'])){

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
    $sql = "INSERT INTO datalaptop (id,merk,jenis,vtype,ram,vga,hdd,ssd,prossor,kprocessor,harga) VALUE ('$id','$merk',$jenis','$vtype','$ram','$vga','$hdd','$ssd','$processor','$kprocessor','$harga')";
    $query = mysqli_query($db, $sql);

    
    // if( $query ) {
        
    //     header('Location: widgets.php?status=sukses');
    // } else {
        
    //     header('Location: widgets.php?status=gagal');
    // }


} else {
    die("Akses dilarang...");
}

?>