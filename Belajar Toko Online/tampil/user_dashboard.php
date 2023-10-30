<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Belajar Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            position: relative;
        }
    </style>
</head>
<body>
    <?php include "sidebar.php"; ?>
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Pengguna</h2>
        </div>
        <div class="col-8 position-relative top-0 start-50 translate-middle-x">
            <table class="table table-hover table-striped table-bordered striped text-center">
                <thead>
                    <tr>
                        <th>No</th><th>Nama</th><th>Email</th><th>Telphone</th><th>Username</th><th>Level</th><th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "../proses/koneksi.php"; 
                          $qry_user=mysqli_query($conn,"select * from user");
                          $no=0;
                          while($data_user=mysqli_fetch_array($qry_user)){
                          $no++;
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_user['nama']?></td>
                        <td><?=$data_user['email']?></td>
                        <td><?=$data_user['telp']?></td>
                        <td><?=$data_user['username']?></td>
                        <td><?=$data_user['level']?></td>
                        <td>
                            <a href="ubah_user.php?id_pengguna=<?=$data_user['id_pengguna']?>" class="btn btn-primary">Ubah</a>
                             | <a href="../proses/proses_hapus_user.php?id_pengguna=<?=$data_user['id_pengguna']?>" onclick="return confirm('Apakah anda yakin menghapus user ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>