<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Admin | Belajar Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="col-12 text-center my-5">
    <h2>Daftar Belanjaan</h2>
</div>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>No</th><th>Nama</th><th>Harga</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
        <tr>
        <td><?=($key_produk+1)?></td><td><?=$val_produk['nama']?></td><td><?=$val_produk['harga']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>