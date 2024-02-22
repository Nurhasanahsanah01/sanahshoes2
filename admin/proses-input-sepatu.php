<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id=$_POST['id_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$merek_sepatu=$_POST['merek_sepatu'];
$jumlah_sepatu=$_POST['jumlah_sepatu'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into datapelanggan(id_pelanggan,nama_pelanggan,merek_sepatu,jumlah_sepatu,total_harga) 
                        values ('$id_pelanggan', '$nama_pelanggan', '$merek_sepatu', '$jumlah_sepatu','$total_harga')");

if($simpan==true){

    header("location:tampil-sepatu.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>