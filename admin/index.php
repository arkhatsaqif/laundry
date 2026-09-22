<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../koneksi.php';
include 'header.php';
?>

<div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px">
            <b>Selamat Datang ! </b>
            di sistem informasi laundry
        </h4>
    </div>
</div>

<div class="panel">
    <div class="panel-heading">
        <h4>Dashboard</h4>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>
                            <i class="glyphicon glyphicon-user"></i>

                            <span class="pull-right">
                                <?php
                                $pelanggan = mysqli_query(
                                    $koneksi,
                                    "SELECT * FROM pelanggan"
                                );

                                echo mysqli_num_rows($pelanggan);
                                ?>
                            </span>
                        </h1>

                        Jumlah pelanggan
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>