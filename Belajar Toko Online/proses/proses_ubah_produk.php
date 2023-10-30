<?php
if ($_POST) {
    $id_produk=$_POST['id_produk'];
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $foto_produk=$_FILES['file']['name'];
    $ukuran=$_FILES['file']['size'];
    $file_tmp=$_FILES['file']['tmp_name'];

    include "koneksi.php";
    if(empty($foto_produk)){
        $update=mysqli_query($conn, "update produk set nama='".$nama."',harga='".$harga."' where id_produk = '".$id_produk."' ");
    }
    else {
        move_uploaded_file($file_tmp,'../asset/foto_produk/file/'.$foto_produk);
        $update=mysqli_query($conn, "update produk set nama='".$nama."', harga='".$harga."', foto='".$foto_produk."' where id_produk = '".$id_produk."' ");
    }
    if ($update) {
        echo "<script>alert('Sukses update produk');location.href='../tampil/produk_dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal update produk');location.href='../tampil/produk_dashboard.php';</script>";
    }
}
?>