<?php
    include "koneksi.php";
    if($_POST['simpan']){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $ekstensi = array("png","jpg","jpeg","gif");
        $namafile = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];
        $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
        $ukuran = $_FILES['file']['size'];

        if(empty($nama)){
            echo "<script>alert('Nama Produk Tidak Boleh Kosong');location.href='../tampil/tambah_produk.php';</script>";
        }
        else if(empty($harga)){
            echo "<script>alert('Harga Produk Tidak Boleh Kosong');location.href='../tampil/tambah_produk.php';</script>";
        }
        else {
            if(!in_array($tipe_file, $ekstensi)){
                header("location:../tampil/tambah_produk.php?alter=gagal_ekstensi");
            }else {
                if($ukuran < 1044070){
                    move_uploaded_file($tmp, '../asset/foto_produk/'.$namafile);
                    $query=mysqli_query($conn,"insert into produk (nama, harga, foto)
                    value ('".$nama."','".$harga."','".$namafile."')") or die(mysqli_error($conn));
                    if($query){
                        echo "<script>alert('Sukses menambahkan produk');location.href='../tampil/tambah_produk.php';</script>";
                    } else {
                        echo "<script>alert('Gagal menambahkan produk');location.href='../tampil/tambah_produk.php';</script>";
                    }
                }
                else {
                    echo "<script>alert('Ukuran File Terlalu Besar');location.href='../tampil/tambah_produk.php';</script>";
                }
            }
        }
    }
?>