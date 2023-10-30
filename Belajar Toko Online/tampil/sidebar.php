<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../asset/css/sidebar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <?php include "../proses/koneksi.php";
          $qry_user=mysqli_query($conn,"select * from user");
          session_start();
    ?>
    <nav>
        <ul>
            <li class="logo"><i class="fab fa-cc-jcb"></i></li>
            <li><a href="user_dashboard.php"><i class="fas fa-users"></i>&nbsp; Users</a></li>
            <li><a href="produk_dashboard.php"><i class="fas fa-chart-bar"></i>&nbsp; Detail Product</a></li>
            <li><a href="tambah_produk.php"><i class="fas fa-cart-plus"></i>&nbsp; Add Product</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp; <?=$_SESSION['nama']?></a></li>
        </ul>
    </nav>
    <!-- <div class="wrapper">
        <div class="section">
            <div class="box-area">
                <h2>Home</h2>
            </div>
        </div>
    </div> -->
  </body>
</html>