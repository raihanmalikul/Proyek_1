<?php

session_start();

if( !isset ($_SESSION['pelanggan'])){
  header("Location: index.php");
  exit;
}
?>

<?php

require 'functions.php';

$id=$_SESSION['pelanggan']['id_user'];

$result = mysqli_query($conn,"SELECT * FROM user WHERE id_user = '$id' ");


$row = mysqli_fetch_assoc($result);


if( isset($_POST["submit"])){
  // var_dump($_POST);

  if( Ubah($_POST) > 0 ) {
    echo "
          <script>
              alert(' data berhasil diubah!');
              document.location.href = 'menu_pelanggan.php';
          </script>";
  } else {
    echo "
          <script>
              alert(' data gagal diubah!');
              document.location.href = 'akun.php';
          </script>";
  }
 
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="menu_pelanggan.css">

    <title>Laundry Mania</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <h3><i class="fab fa-affiliatetheme text-success mr-2"></i></h3>
        <a class="navbar-brand font-weight-bold" href="#">Laundry Mania</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item active">
              <a class="nav-link" href="menu_pelanggan.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
          
            <li class="nav-item active">
              <a class="nav-link" href="menu_pelanggan_bantuan.php">Bantuan <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="info_tentang_kami.php">Info Tentang Kami <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            
          </form>
          <div class="icon mt-2">
            <h5>
              <a href="logout.php"><i class="fas fa-sign-out-alt   ml-4 mr-2" data-toggle="tooltip" title="Keluar"></i></a>
            </h5>
          </div>
        </div>
      </div>
      </nav>


      <div class="row mt-5 no-gutters">
        <div class="col-md-2 bg-white">
          <ul class="list-group list-group-flush p-2 pt-5">
            <li class="list-group-item list-group-item-dark"><i class="fas fa-list"></i> Katagori Pelayanan</li>
            <li class="list-group-item"><a href="akun.php"><i class="fas fa-angle-right"></i> Akun</li></a>
            <li class="list-group-item"><a href="laundry_pakaian.php"><i class="fas fa-angle-right"></i> Laundry Pakaian</li></a>
            <li class="list-group-item"><a href="laundry_selimut.php"><i class="fas fa-angle-right"></i> Laundry Selimut</li></a>
            <!-- <li class="list-group-item"><a href="laundry_pakaian2.php"><i class="fas fa-angle-right"></i> Laundry Selimut & Pakaian </li></a> -->
            <li class="list-group-item"><a href="data_pesanan.php"><i class="fas fa-angle-right"></i> Data Pesanan</li></a>
            <li class="list-group-item"><a href="lokasi_kami.php"><i class="fas fa-angle-right"></i> Lokasi Kami</li></a>
          </ul>
        </div>
        <div class="col-md-10">
         <div class="container"> 
          <h4 class=" text-center font-weight-bold pt-5">Akun Pelanggan</h4>
          <hr color="#0263A0">
          <form action="" method="post" class="form">

          

          <div class="from-group pt-2">
                <label>Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="" value="<?= $row['nama']; ?>" >
            </div>
            <div class="from-group pt-2">
                <label>Alamat lengkap</label>
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="" value="<?= $row['alamat']; ?>">
            </div>
            <div class="from-group pt-2">
                <label>No.telpon</label>
                <input type="text" id="no_telpon" name="no_telpon" class="form-control" placeholder="" value="<?= $row['no_telpon']; ?>">
            </div>
            <br>
            <div class=""></div>
            <div class="buttom p -2">
            <button class="btn btn-success" type="submit" name="submit">Ubah</button> 
            </div> 
            
          

          
        </div>
          </div>
        </div>
      </div>
      <br>

      <footer class="bg-dark text-white p-5">
        <div class="row">
          <div class="col-md-3">
            <h5>LAYANAN PELANGGAN</h5>
            <ul>
              <li><a href="menu_pelanggan_bantuan.php">Pusat Bantuan</li></a>
              <li><a href="menu_pelanggan_bantuan.php">Pengiriman</li></a>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>TENTANG KAMI</h5>
            <p>laundry Mania Jl.Cijerokaso no.71
               Sarijadi, Kota Bandung, Jawa Barat
            </p>
          </div>
          <div class="col-md-3">
            <h5>MITRA KAMI</h5>
            <ul>
              <li>Downy</li>
              <li>So Klin</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>HUBUNGI KAMI</h5>
            <ul>
              <li>021-6743-8657</li>
              <li>laundrymania@gmail.com</li>
            </ul>
          </div>
        </div>
      </footer>

      <div class="copyright text-center font-weight-bold p-2">
        <p>Developed by Laundry Mania copyright <i class="far fa-copyright"></i> 2021</p>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <script type="text/javascript" src="scrip.js"></script>
  </body>
</html>