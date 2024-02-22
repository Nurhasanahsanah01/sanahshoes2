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
        <h2>Kritik dan Saran Pelanggan</h2>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>nama</th><th>email</th><th>no_handphone</th><th>pesan</th><th>date</th><th>Telah Dibaca</th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from komentar");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
            <td><?php echo $row['nama']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['no_handphone']?></td>
                <td><?php echo $row['pesan']?></td>
                <td><?php echo $row['date']?></td>

                <td>
                <a href="hapus-contact.php?id=<?php echo $row['nama']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-success glyphicon glyphicon-ok"></button>
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

    </br>
<?php include "footer.php";?>