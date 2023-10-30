<?php
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from user where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_pengguna']=$dt_login['id_pengguna'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['email']=$dt_login['email'];
                $_SESSION['telp']=$dt_login['telp'];
                $_SESSION['username']=$dt_login['username'];
                

                if($dt_login['level']=="admin") {
                    $_SESSION['status_login']=true;
                    header("location: ../tampil/user_dashboard.php");
                } else if($dt_login['level']=="user") {
                    $_SESSION['status_login']=true;
                    header("location: ../tampil/home.php");
                }
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='../tampil/login.php';</script>";
            }
        }
    }
?>