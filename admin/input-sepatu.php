<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
           <center> <h1><i><b>Input Data Penjualan Sepatu</i></b></h1> </center>
           <br>
                <form action="proses-input-sepatu.php" method="POST">
                    <div class="form-group">
                        <label for="id_pelanggan">id_pelanggan</label>
                        <input type="number" name="id_pelanggan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">nama_pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="merek_sepatu">merek_sepatu</label>
                        <input type="text" name="merek_sepatu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_sepatu">jumlah_sepatu</label>
                        <input type="text" name="jumlah_sepatu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <input type="text" name="total_harga" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="Simpan" class="btn btn-warning">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
    <br>
<?php include "footer.php";?>