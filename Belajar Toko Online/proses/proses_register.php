<?php
    if($_POST){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $default_level = 'user';

        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, username, password, email, telp, level)
        value ('".$nama."','".$username."','".md5($password)."','".$email."','".($telp)."','".$default_level."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses membuat akun');location.href='../tampil/login.php';</script>";
        } else {
            echo "<script>alert('Gagal membuat akun');location.href='../tampil/login.php';</script>";
        }
    }
?>