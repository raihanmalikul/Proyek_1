<?php

session_start();

require 'functions.php';

if ( isset($_POST['register'])){
 
    if ( registrasi($_POST) > 0) {
      echo "<script> 
                alert ('user baru berhasil ditambahkan!');
                document.location='index.php'
            </script> 
                ";
              
    } else {
        echo mysqli_error($conn);
    }


}


?>


<!doctype html>
<html lang="en">
  <head>
    <body background="gambar3.jpg">  
    </body>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="sing up.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Laundry Mania</title>
  </head>
  <body>
    
    <div class="container">
        <h4 class="text-center"><i class="fab fa-affiliatetheme text-success"></i>  LAUNDRY MANIA</h4>
        <hr>

        <form action="" method="post" class="form">
       
            <div class="from-group pt-2">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan nama anda">
            </div>
            <div class="from-group pt-2">
                <label>Alamat Lengkap</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan almat lengkap anda">
            </div>
            <div class="from-group pt-2">
                <label>No.Telpon</label>
                <input type="text" name="no_telpon" class="form-control" placeholder="Masukan no.telpon Anda">
            </div>
            <div class="from-group pt-2">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda">
            </div>
            <div class="from-group pt-2">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda">
                
            </div>
           
        
            <div class="buttom pt-4">
                <button class="btn btn-success" type="submit" name="register" >Daftar</button> 
                <button class="btn btn-danger" type="submit"><a href="index.php"> Batal</button></a>
            </div> 
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>