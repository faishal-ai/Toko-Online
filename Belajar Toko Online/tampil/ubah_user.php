<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah User | Belajar Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include "../proses/koneksi.php";
        $qry_get_user=mysqli_query($conn,"select * from user where id_pengguna = '".$_GET['id_pengguna']."'");
        $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Ubah User</h2>
        </div>
        <div class="col-6 position-relative top-0 start-50 translate-middle-x">
        <form action="../proses/proses_ubah_user.php" method="POST">
            <input type="hidden" name="id_pengguna" value="<?=$dt_user['id_pengguna']?>">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?=$dt_user['nama']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?=$dt_user['email']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Telphone</label>
                <input type="tel" class="form-control" name="telp" value="<?=$dt_user['telp']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?=$dt_user['username']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Level</label>
                <?php
                    $arr_level=array('admin'=>'admin','user'=>'user');
                ?>
                <select name="level" class="form-select">
                    <?php foreach ($arr_level as $key_level => $val_level):
                        if($key_level==$dt_user['level']){
                            $selek="selected";
                        } else {
                            $selek="";
                    }
                    ?>
                    <option value="<?=$key_level?>"<?=$selek?>><?=$val_level?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <a href="../tampil/user_dashboard.php" class="btn btn-danger"> Cancle</a>
            <button type="submit" name="simpan" class="btn btn-primary text-end">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>