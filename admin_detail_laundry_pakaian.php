<?php

session_start();

if( !isset ($_SESSION['admin'])){
  header("Location: index.php");
  exit;
}
?>

<?php
// loneksi ke database 
require 'functions.php';
// ambil data dari table Status / query data Status
$id=$_GET['id'];

// ambil data dari table Status / query data Status
$result = mysqli_query($conn,"SELECT user.nama,user.alamat,user.no_telpon,laundry_pakaian.jam_penjemputan,laundry_pakaian.pewangi,laundry_pakaian.paket,laundry_pakaian.total_biaya_penjemputan,laundry_pakaian.tanggal_transaksi,laundry_pakaian.metode_pembayaran,laundry_pakaian.id_pakaian,laundry_pakaian.berat_pakaian,laundry_pakaian.total_biaya_pakaian,laundry_pakaian.tanggal_selesai,laundry_pakaian.status_pembayaran,laundry_pakaian.status_pesanan FROM laundry_pakaian 
INNER JOIN user on user.id_user = laundry_pakaian.id_user  
WHERE laundry_pakaian.id_pakaian = '$id'"); 

$row = mysqli_fetch_assoc($result);

$total_biaya = htmlentities($row ['total_biaya_pakaian']) + htmlentities($row ['total_biaya_penjemputan']);

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
          </ul>
          <div class="icon mt-2">
            <h5>
              <a href="logout.php"><i class="fas fa-sign-out-alt  ml-4 mr-2" data-toggle="tooltip" title="Keluar"></i></a>
            </h5>
          </div>
        </div>
      </div>
      </nav>


      <div class="row mt-5 no-gutters">
        <div class="col-md-2 bg-white">
          <ul class="list-group list-group-flush p-2 pt-5">
            <li class="list-group-item list-group-item-dark"><i class="fas fa-list"></i> Katagori Pelayanan</li>
            <li class="list-group-item"><a href="menu_admin.php"><i class="fas fa-angle-right"></i> Pesanan Pelanggan</li></a>
            <li class="list-group-item"><a href="menu_admin_laporan_transaksi.php"><i class="fas fa-angle-right"></i> Data Transaksi</li></a>
            <!-- <li class="list-group-item"><a href="menu_admin_bantuan.php"><i class="fas fa-angle-right"></i> Bantuan</li></a>
             -->
            
          </ul>
        </div>
        <div class="col-md-10">
          <div class="container">
          <h4 class=" text-center font-weight-bold pt-5">Detail Data Laundry Pakaian</h4>
          <hr color="#0263A0">
          <br><br>
          <h5>Tabel pakaian</h5>
          <hr>
          <table class='table table-bordered table'>
          <tr>
         
          <td>ID pesanan</td>
          <td><a>ORD</a><?php echo $row["id_pakaian"];?></td>
          </tr>
          
          <tr>
          <td>Nama</td>
          <td><?php echo $row["nama"];?></td>
          </tr>
         
          <tr>
          <td>Alamat</td>
          <td><?php echo $row["alamat"];?></td>
          </tr>
          <tr>
          <td>No.telpon</td>
          <td><?php echo $row["no_telpon"];?></td>
          </tr>
          <tr>
          <td>Jam pengambilan</td>
          <td><?php echo $row["jam_penjemputan"];?></td>
          </tr>
          <tr>
          <td>Jenis pewangi</td>
          <td><?php echo $row["pewangi"];?></td>
          </tr>
          <tr>
          <td>Jenis paket</td>
          <td><?php echo $row["paket"];?></td>
          </tr>
          <tr>
          <td>Berat pakaian</td>
          <td><?php echo $row["berat_pakaian"];?><a> Kg</a></td>
          </tr>
          <tr>
          <tr>
          <td>Metode pembayran</td>
          <td><?php echo $row["metode_pembayaran"];?></td>
          </tr>
          <tr>
          <td>Biaya laundry pakaian</td>
          <td><a>Rp.</a><?php echo $row["total_biaya_pakaian"];?></td>
          </tr>
          <tr>
          <td>Biaya pengambilan dan pengembalian</td>
          <td><a>Rp.</a><?php echo $row["total_biaya_penjemputan"];?></td>
          </tr>
          <td>Total biaya</td>
          <td><a>Rp.</a><?php echo number_format($total_biaya) ;?></td>
          </tr>
          <tr>
          <td>Tanggal pengambilan</td>
          <td><?php echo tgl_indo($row["tanggal_transaksi"]);?></td>
          </tr>
          <tr>
          <td>Tanggal pengembalian</td>
          <td><?php echo tgl_indo($row["tanggal_selesai"]);?></td>
          </tr>
          <tr>
          <td>Status pembayaran</td>
          <td><?php echo $row["status_pembayaran"];?></td>
          </tr>
          <tr>
          <td>Status pesanan</td>
          <td><?php echo $row["status_pesanan"];?></td>
          </tr>
          
          </table>
          <a href="menu_admin.php"><button class="btn btn-danger"  mr-2 >Kembali</button></a>
          <a href="ubah.php?id=<?= $row["id_pakaian"];?>"><button class="btn btn-success"  mr-2>Ubah</button></a>
                         

          </div>
        </div>
      </div>
      <br>

      <footer class="bg-dark text-white p-5">
        <div class="row">
          <div class="col-md-3">
            <h5>LAYANAN PELANGGAN</h5>
            <ul>
              <li><a href="">Pusat Bantuan</li></a>
              <li><a href="">Pengiriman</li></a>
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