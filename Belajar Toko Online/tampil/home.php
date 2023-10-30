<?php
    include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Belajar Toko Online</title>
    <link rel="stylesheet" href="../asset/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card {
            background-color: #ea4201;
        }
    </style>
</head>
<body>
    <?php
        include "../proses/koneksi.php";
        $qry_produk=mysqli_query($conn,"select * from produk");
        while($dt_produk=mysqli_fetch_array($qry_produk)){
    ?>
                <div class=" d-flex justify-content-center py-5">
                    <div class="container d-flex justify-content-center">
                        <div class="card p-2">
                            <div class="p-info px-3 py-3">
                                <div>
                                    <h5 class="mb-0 text-white"><?=$dt_produk['nama']?></h5> <span class="text-white">Best Seller</span>
                                </div>
                                <div class="p-price d-flex flex-row text-white">
                                    <span>$ </span>
                                    <h1><?=$dt_produk['harga']?></h1>
                                </div>
                                <div class="heart"> <i class="bx bx-heart"></i> </div>
                            </div>
                            <div class="text-center p-image"> <img src="../asset/foto_produk/<?=$dt_produk['foto']?>"> </div>
                            <div class="buttons d-flex flex-row gap-3 px-3">
                            <a href="keranjang.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-outline-light w-100"><h3>Buy Now</h3></a>
                            </div>
                        </div>
                    </div>
                </div>

    <?php } ?>
</div>
</body>
</html>