<?php
$koneksi = new mysqli("localhost","root","","jasajahit");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order || Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container">
      <a class="navbar-brand font-weight-bold" href="#">Mr. Godek Tailor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Kontak <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Bantuan <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        </div>
      </div>
      </nav>

   
      <div class="row mt-5 no-gutters">
        <div class="col-md-2 bg-light">
          <ul class="list-group list-group-flush p-2 pt-4">
            <li class="list-group-item bg-warning">Halaman Pelanggan</li>
            <li class="list-group-item"><a href="order.php">Order</li></a>
            <li class="list-group-item"><a href="konfirmasipembayaran.php">Konfirmasi Pembayaran</li></a>
            <?php if ( isset($_SESSION["pelanggan"])) :   ?>
            <li class="list-group-item"><a href="keluar.php">Logout</li></a>
            <?php else : ?>
            <li class="list-group-item"><a href="loginpelanggan.php">Login</li></a>
            <?php endif ?>
          </ul>
        </div>
    
    <div class="col-md-10">
    <div class="bg-light">
    <h1 class="text-center p-4">Halaman Login Pelanggan</h1>
    <div class="container">
          <div class="row justify-content-center mt-2">
            <div class="col">
              <div class="card">
                <div class="card-header bg-transparent mb-0"><h5 class="text-center">LOGIN <span class="font-weight-bold text-info">Pelanggan</span></h5></div>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group row">
                    <label for="namapelanggan" class="col-sm-2">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" id="username" class="form-control">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="namapelanggan" class="col-sm-2">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" id="password" class="form-control">
                    </div>
                    </div>
                    <a href="daftar.php">Belum Punya Akun?</a>
                    <button class="btn btn-primary" name="simpan">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
</div>

<?php 
session_start();
//jk tombol login ditekan
if( isset($_POST['simpan']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE username_pelanggan='$username' AND password_pelanggan='$password'");
    $akunyangcocok = $ambil->num_rows;

    if ($akunyangcocok==1)
    {
        //anda sudah login
        $akun = $ambil->fetch_assoc();
        $_SESSION["pelanggan"] = $akun;
        echo "<script>
                alert('Anda sukses login');
                document.location='order.php'</script> 
                ";
    } else {
        //anda gagal login
        echo "<script>
                alert('Maaf login gagal');
                document.location='loginpelanggan.php'</script> 
                ";
    }
}



?>

</body>
</html>