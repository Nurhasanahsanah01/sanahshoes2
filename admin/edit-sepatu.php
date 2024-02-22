<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-sepatu.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from datapelanggan where id_pelanggan='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="id_pelanggan">id_pelanggan</label>
                        <input type="hidden" name="id_pelanggan" value="<?php echo $row['id_pelanggan']?>" class="form-control">
                        <input type="number" name="id_pelanggan" value="<?php echo $row['id_pelanggan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">nama_pelanggan</label>
                        <input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="merek_sepatu">merek_sepatu</label>
                        <input type="text" name="merek_sepatu" value="<?php echo $row['merek_sepatu']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_sepatu">jumlah_sepatu</label>
                        <input type="text" name="jumlah_sepatu" value="<?php echo $row['jumlah_sepatu']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <input type="text" name="total_harga" value="<?php echo $row['total_harga']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="Ubah" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>