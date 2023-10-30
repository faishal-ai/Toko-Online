<?php
    if($_GET['id_pengguna']){
    include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from user where id_pengguna='".$_GET['id_pengguna']."'");
            if($qry_hapus){
                echo "<script>alert('Sukses hapus produk');location.href='../tampil/user_dashboard.php';</script>";
            } else {
                echo "<script>alert('Gagal hapus produk');location.href='../tampil/user_dashboard';</script>";
            }
    }
?>