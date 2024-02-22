
<?php

include "koneksi.php";
$nama = $koneksi->real_escape_string($_POST['nama']); 
$email = $koneksi->real_escape_string($_POST['email']); 
$nohp = $koneksi->real_escape_string($_POST['no_handphone']);
$pesan = $koneksi->real_escape_string($_POST['pesan']); 


$simpan=$koneksi->query("insert into komentar(nama,email,no_handphone,pesan) 
                        values ('$nama', '$email','$nohp', '$pesan')");

if($simpan==true){

    header("location:contact.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>