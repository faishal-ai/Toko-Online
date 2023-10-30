<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk | Belajar Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include "../proses/koneksi.php";
        $id_produk=$_GET['id_produk'];
        $query=mysqli_query($conn,"select * from produk where id_produk=$id_produk");
        $dt_produk=mysqli_fetch_array($query);
    ?>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Ubah Produk</h2>
        </div>
        <div class="col-6 position-relative top-0 start-50 translate-middle-x">
        <form action="../proses/proses_ubah_produk.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?=$dt_produk['id_produk']?>">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?=$dt_produk['nama']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" value="<?=$dt_produk['harga']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Foto Produk</label>
                <input type="file" class="form-control" name="file" value="<?=$dt_produk['foto']?>">
            </div>
            <a href="../tampil/produk_dashboard.php" class="btn btn-danger"> Cancle</a>
            <button type="submit" name="simpan" class="btn btn-primary text-end">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>