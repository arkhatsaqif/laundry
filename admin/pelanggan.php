<?php include "header.php"; ?>

<div class="contaiuner">
    <div class="panel">
        <div class="panel-heading">
            <h1>Data Pelanggan</h1>
        </div>
        <div class="panel-body">
            <a href="pelanggan_tambah.php"btn btn-sn btn-info pull right>Tambah</a>

            <br><br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>No_tlp</th>
                    <th>Alamat</th>
                    <th width="15%">OPSI</th>
                </tr>
                <?php
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi, "select * from pelanggan");
                    $no =1;
                    while ($d=mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['pelanggan_nama'] ?></td>
                    <td><?php echo $d['pelanggan_hp'] ?></td>
                    <td><?php echo $d['pelanggan_alamat'] ?></td>
                    <td>
                        <a href="pelanggan_edit.php?id=<?php echo $d['pelanggan_id']; ?>" class="btn tbn-sn btn-info">Edit</a>
                        <a href="pelanggan_hapus.php?id=<?php echo $d['pelanggan_id']; ?>" class="btn tbn-sn btn-danger">Hapus</a>

                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>

</div>