<?php
    // session_start();
    // if($_POST){
    //     include "koneksi.php";
    //     $qry_get_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    //     $dt_produk=mysqli_fetch_array($qry_get_produk);
    //     $_SESSION['cart'][]=array(
    //     'id_produk'=>$dt_produk['id_produk'],
    //     'nama'=>$dt_produk['nama'],
    //     'harga'=>$dt_produk['harga'],
    //     );
    // }
    // header('location: ../tampil/cart.php');
    echo "<script>alert('Sukses membeli produk');location.href='../tampil/home.php';</script>";
?>