<?php
$conn= new mysqli("localhost","root","","laundry");
session_start();


if( isset ( $_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $ambil= $conn->query("SELECT * FROM user WHERE username ='$username' AND password = '$password'");
    $akuncocok = $ambil->num_rows;
    
    

    //cek username
    if ($akuncocok == 1 && $username != 'admin'){ 
        $akun=$ambil->fetch_assoc();
        $_SESSION['pelanggan'] = $akun;
        echo"<script>alert('anda sukses login');
        document.location='menu_pelanggan.php'</script>";

    }elseif($akuncocok == 1 && $username == 'admin'){
        $akun=$ambil->fetch_assoc();
        $_SESSION['admin'] = $akun;
        echo"<script>alert('anda sukses login');
        document.location='menu_admin.php'</script>";

    } 
    else {
        echo"<script>alert('anda gagal login');
        document.location='index.php'</script>";
        
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
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Laundry Mania Login</title>
  </head>
  <body>

<?php

if( isset($error)) :  ?>
<p style="color:red; font-style:italic;">Username/Password tidak sesuai</p>

<?php endif; ?>

    <div class="container">
        
        <h4 class="text-center"><i class="fab fa-affiliatetheme text-success"></i>  LAUNDRY MANIA</h4>
        <hr>
        
        <form action="" method="post" class="form">
            <div class="from-group">
                <label>Username</label>

                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div> 
                </div>    
                    <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda">
            </div>
            </div>

            <div class="from-group">
                <label>Password</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div> 
                    </div>    
                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda">
            </div> 
            </div>
            
            <div class="buttom pt-4">
            <button class="btn btn-success" classtype="submit" name="login">Masuk</button> 
            <button class="btn btn-danger" type="submit"><a >Batal</button></a>
        </div> 
            <a href="Sing_up.php">Apakah Anda ingin mendaftar ? </a>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>