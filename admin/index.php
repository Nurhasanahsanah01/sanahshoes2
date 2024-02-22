<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>

<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			<div class="carousel-inner" role="listbox">
         	<div class="jumbotron">
			 <marquee><h2>SELAMAT DATANG DI TOKO SEPATU SANAH SHOES</h2></marquee>
						<br>
						<h4>Toko sepatu sanah menyediakan berbagai jenis sepatu seperti sepatu sekolah, sepatu sport, sepatu futsal, sepatu jordan, sepatu converse, dan sepatu fashion ayo buruan belanja dan kunjungi toko sepatu sanah kualitas kita nomor one dan bahannya sangat cantik dan berkwalitas.</h4>
						<p><a class="btn btn-danger btn-lg" href="tampil-sepatu.php" role="button">Data Pelanggan</a>
						<a class="btn btn-primary btn-lg" href="contact.php"role="button">Kritik dan Saran</a></p>
						</div>  
<div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="carousel slide" id="contoh-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#contoh-carousel" data-slide-to="1"></li>
            <li data-target="#contoh-carousel" data-slide-to="2"></li>
            </ol>
         <div class="carousel-inner" role="listbox">
         <div class="item active">
              <img src="images/slide6.webp">
              <div class="carousel-caption">
             </div>   
            </div>
            <div class="item">
                <img src="images/slide7.jpg"> 
                <div class="carousel-caption">
                </div>
            </div>
                <div class="item">
                <img src="images/slide5.jpg">
                <div class="carousel-caption">
                </div>
                </div>
				</div>
           				</div>
				</div>
      </div>
		</div>
</br>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>