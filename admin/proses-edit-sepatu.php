<?php

include "../koneksi.php";

$id=$_POST['id_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$merek_sepatu=$_POST['merek_sepatu'];
$jumlah_sepatu=$_POST['jumlah_sepatu'];
$total_harga=$_POST['total_harga'];

$ubah=$koneksi->query("update datapelanggan set id_pelanggan ='$id', nama_pelanggan='$nama_pelanggan', merek_sepatu='$merek_sepatu', jumlah_sepatu='$jumlah_sepatu', total_harga='$total_harga' where id_pelanggan='$id'");

if($ubah==true){

    header("location:tampil-sepatu.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>