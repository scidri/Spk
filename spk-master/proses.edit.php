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
    $sql = "UPDATE datalaptop SET id='$id', merk='$merk', jenis='$jenis', vtype='$type',ram='$ram',vga='$vga',hdd='$hdd',ssd='$ssd',processor='$processor',kprocessor='$kprocessor',harga='$harga' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: widgets.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: widgets.php?status=gagal');
    }

?>