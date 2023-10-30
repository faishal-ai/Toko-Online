<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Product | Belajar Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include "sidebar.php"; ?>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Produk</h2>
        </div>
        <div class="col-8 position-relative top-0 start-50 translate-middle-x">
            <table class="table table-hover table-striped table-bordered striped text-center">
                <thead>
                    <tr>
                        <th>No</th><th>Nama</th><th>Harga</th><th>Foto</th><th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "../proses/koneksi.php"; 
                          $qry_produk=mysqli_query($conn,"select * from produk");
                          $no=0;
                          while($data_produk=mysqli_fetch_array($qry_produk)){
                          $no++;
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_produk['nama']?></td>
                        <td><?=$data_produk['harga']?></td>
                        <td><img src="<?php echo "../asset/foto_produk/".$data_produk['foto']; ?>"width="150" height="150"></td>
                        <td class="align-middle">
                            <a href="ubah_produk.php?id_produk=<?=$data_produk['id_produk']?>" class="btn btn-primary">Ubah</a> | 
                            <a href="../proses/proses_hapus_produk.php?id_produk=<?=$data_produk['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>