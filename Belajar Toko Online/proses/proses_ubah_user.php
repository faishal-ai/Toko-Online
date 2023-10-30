<?php
if($_POST){
    $id_pengguna=$_POST['id_pengguna'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];
    if(empty($nama)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='../tampil/ubah_user.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='../tampil/ubah_user.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update user set nama='".$nama."',email='".$email."',
            telp='".$telp."', username='".$username."', level='".$level."' where id_pengguna = '".$id_pengguna."' ") or
            die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='../tampil/user_dashboard.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='../tampil/ubah_user.php?id_pengguna=".$id_pengguna."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama='".$nama."',email='".$email."',
            telp='".$telp."', username='".$username."', password='".md5($password)."', level='".$level."' where id_pengguna = '".$id_pengguna."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='../tampil/user_dashboard.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='../tampil/ubah_user.php?id_pengguna=".$id_pengguna."';</script>";
            }
        }
    }
}
?>