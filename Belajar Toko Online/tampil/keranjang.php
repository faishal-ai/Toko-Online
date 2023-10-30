<!DOCTYPE html>
<html>
  <head>
    <title>Keranjang Produk | Belajar Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        .img-thumbnail {
            max-height: 500px;
        }
    </style>
  </head>
  <body>
    <?php
        include "../proses/koneksi.php";
        $qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_detail_produk);
    ?>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 text-center my-5">
                <h2>Keranjang</h2>
            </div>
            <div class="col-md-3 img-thumbnail">
                <img src="../asset/foto_produk/<?=$dt_produk['foto']?>" class="img-fluid">
            </div>
            <div class="col-md-7 offset-1">
                <form action="" method="post">
                    <table class="table table-hover table-striped h5">
                        <thead>
                            <tr>
                                <td>Nama Produk</td><td><?=$dt_produk['nama']?></td>
                            </tr>
                            <tr>
                                <td>Harga</td><td>$ <?=$dt_produk['harga']?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="../proses/proses_keranjang.php" class="btn btn-success" onclick="return confirm('Yakin Ingin Membeli?')">Beli</a>
                                    | <a href="home.php" class="btn btn-danger">Batal</a>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
  </body>
</html>