
<?php include "header.php"; ?>
<br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
			<div class="jumbotron" style="background-color: rgb(203, 167, 167);"></style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2>Data Sepatu</h2>
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
                    
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
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

<br>
<?php include "footer.php";?>