<?php

include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?

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