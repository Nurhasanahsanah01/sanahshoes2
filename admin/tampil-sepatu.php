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
        <h2>Data Pelanggan</h2>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>id_pelanggan</th><th>nama_pelanggan</th><th>merek_sepatu</th><th>jumlah_sepatu</th><th>total_harga</th>
                <th>
                    <a href="input-sepatu.php">
                        <button class="btn btn-primary glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from datapelanggan order by id_pelanggan ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_pelanggan']?></td>
                <td><?php echo $row['nama_pelanggan']?></td>
                <td><?php echo $row['merek_sepatu']?></td>
                <td><?php echo $row['jumlah_sepatu']?></td>
                <td><?php echo $row['total_harga']?></td>
                <td>

                <a href="edit-sepatu.php?id=<?php echo $row['id_pelanggan']?>">
                    <button class="btn btn-xs btn-success glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-sepatu.php?id=<?php echo $row['id_pelanggan']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>