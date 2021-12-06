<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","laundry");

function query ($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $row;
}



function registrasi($data){
    global $conn;

    $nama = strtolower(stripcslashes($data['nama']));
    $alamat = strtolower(stripcslashes($data['alamat']));
    $no_telpon = strtolower(stripcslashes($data['no_telpon']));
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
   
    
    //cek konfirmasi password
    

    //tambahkan user ke database
    mysqli_query ($conn, "INSERT INTO user VALUES('',' $nama','$alamat',' $no_telpon','$username','$password')");

    return mysqli_affected_rows($conn);
}


function tambah($data) {
    global $conn;
    $id_user = $_SESSION['pelanggan']['id_user'];
    $berat_pakaian = htmlspecialchars($data["berat_pakaian"]);
    $total_biaya_pakaian = htmlspecialchars($data["total_biaya_pakaian"]);
    $jam_penjemputan = htmlspecialchars($data["jam_penjemputan"]);
    $paket = htmlspecialchars($data["paket"]);
    $pewangi = htmlspecialchars($data["pewangi"]);
    $tanggal_transaksi = date('Y-m-d');
    $total_biaya_penjemputan = htmlspecialchars($data["total_biaya_penjemputan"]);
    $metode_pembayaran = htmlspecialchars($data["metode_pembayaran"]);
    $status_pembayaran = htmlspecialchars($data["status_pembayaran"]);
    $status_pesanan = htmlspecialchars($data["status_pesanan"]);

    $query = "INSERT INTO laundry_pakaian
            value ('','$id_user','$berat_pakaian', '$total_biaya_pakaian','$jam_penjemputan', '$paket', '$pewangi', '$tanggal_transaksi', '$total_biaya_penjemputan'
                    , '$metode_pembayaran', ' $status_pembayaran', '$status_pesanan','')";

            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
}


function tambah2($data) {
    global $conn;
    $id_user = $_SESSION['pelanggan']['id_user'];
    $jumlah_selimut = htmlspecialchars($data["jumlah_selimut"]);
    $ukuran_selimut = htmlspecialchars($data["ukuran_selimut"]);
    $total_biaya_selimut = htmlspecialchars($data["total_biaya_selimut"]);
    $jam_penjemputan = htmlspecialchars($data["jam_penjemputan"]);
    $paket = htmlspecialchars($data["paket"]);
    $pewangi = htmlspecialchars($data["pewangi"]);
    $tanggal_transaksi = date('Y-m-d');
    $total_biaya_penjemputan = htmlspecialchars($data["total_biaya_penjemputan"]);
    $metode_pembayaran = htmlspecialchars($data["metode_pembayaran"]);
    $status_pembayaran = htmlspecialchars($data["status_pembayaran"]);
    $status_pesanan = htmlspecialchars($data["status_pesanan"]);

    $query = "INSERT INTO laundry_selimut
            value ('',' $id_user','$jumlah_selimut', '$ukuran_selimut', '$total_biaya_selimut','$jam_penjemputan', '$paket', '$pewangi', '$tanggal_transaksi', '$total_biaya_penjemputan'
                    , '$metode_pembayaran', ' $status_pembayaran', '$status_pesanan','')";

            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
}

// function tambah3($data) {
//     global $conn;
//     $id_pakaian = htmlspecialchars($data['id_pakaian']);
//     $id_user = $_SESSION['pelanggan']['id_user'];
//     $jam_penjemputan = date('h:i:s A');
//     $paket = htmlspecialchars($data["paket"]);
//     $pewangi = htmlspecialchars($data["pewangi"]);
//     $tanggal_transaksi = date('Y-m-d');
//     $total_biaya_penjemputan = htmlspecialchars($data["total_biaya_penjemputan"]);
//     $metode_pembayaran = htmlspecialchars($data["metode_pembayaran"]);
//     $status_pembayaran = htmlspecialchars($data["status_pembayaran"]);
//     $status_pesanan = htmlspecialchars($data["status_pesanan"]);
   
    

//     $query = "INSERT INTO penjemputan
//             value ('','$id_pakaian','$id_user','$jam_penjemputan', '$paket', '$pewangi', '$tanggal_transaksi', '$total_biaya_penjemputan'
//                     , '$metode_pembayaran', ' $status_pembayaran', '$status_pesanan','')";

//             mysqli_query($conn, $query);

//             return mysqli_affected_rows($conn);
// }

// function tambah4($data) {
//     global $conn;
//     $id_user = $_SESSION['pelanggan']['id_user'];
//     $id_selimut = htmlspecialchars($data['id_selimut']);
//     $jam_penjemputan = date('h:i:s A');
//     $paket = htmlspecialchars($data["paket"]);
//     $pewangi = htmlspecialchars($data["pewangi"]);
//     $tanggal_transaksi = date('Y-m-d');
//     $total_biaya_penjemputan = htmlspecialchars($data["total_biaya_penjemputan"]);
//     $metode_pembayaran = htmlspecialchars($data["metode_pembayaran"]);
//     $status_pembayaran = htmlspecialchars($data["status_pembayaran"]);
//     $status_pesanan = htmlspecialchars($data["status_pesanan"]);
   
    

//     $query = "INSERT INTO penjemputan2
//             value ('','$id_user','$id_selimut','$jam_penjemputan', '$paket', '$pewangi', '$tanggal_transaksi', '$total_biaya_penjemputan'
//                     , '$metode_pembayaran', ' $status_pembayaran', '$status_pesanan','')";

//             mysqli_query($conn, $query);

//             return mysqli_affected_rows($conn);
// }


// function hapus($id) {
//     global $conn;
//     mysqli_query($conn, "DELETE FROM penjemputan WHERE id_penjemputan = $id");

//     return mysqli_affected_rows($conn);
// }

// function hapus2($id) {
//     global $conn;
//     mysqli_query($conn, "DELETE FROM penjemputan2 WHERE id_penjemputan2 = $id");

//     return mysqli_affected_rows($conn);
// }

function ubah_status($data){
    global $conn;

    $id = $data["id"];
    $berat_pakaian = htmlspecialchars($data["berat_pakaian"]);
    $total_biaya_pakaian = htmlspecialchars($data["total_biaya_pakaian"]);
    $paket = htmlspecialchars($data["paket"]);
    $pewangi = htmlspecialchars($data["pewangi"]);
    $total_biaya_penjemputan = htmlspecialchars($data["total_biaya_penjemputan"]);
    $status_pembayaran = htmlspecialchars($data["status_pembayaran"]);
    $status_pesanan = htmlspecialchars($data["status_pesanan"]);
    $tanggal_selesai =  htmlspecialchars($data["tanggal_selesai"]);
   
    

    $query = "UPDATE laundry_pakaian SET
               berat_pakaian = ' $berat_pakaian',
               total_biaya_pakaian = ' $total_biaya_pakaian',
               paket = ' $paket',
               pewangi = ' $pewangi',
               total_biaya_penjemputan = '$total_biaya_penjemputan',
                status_pembayaran = '$status_pembayaran',
                status_pesanan = '$status_pesanan',
                tanggal_selesai = '$tanggal_selesai'
                WHERE id_pakaian = $id";

            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);

}


function ubah_status2($data){
    global $conn;

    $id = $data["id"];
    $jumlah_selimut = htmlspecialchars($data["jumlah_selimut"]);
    $ukuran_selimut = htmlspecialchars($data["ukuran_selimut"]);
    $total_biaya_selimut = htmlspecialchars($data["total_biaya_selimut"]);
    $paket = htmlspecialchars($data["paket"]);
    $pewangi = htmlspecialchars($data["pewangi"]);
    $total_biaya_penjemputan = htmlspecialchars($data["total_biaya_penjemputan"]);
    $status_pembayaran = htmlspecialchars($data["status_pembayaran"]);
    $status_pesanan = htmlspecialchars($data["status_pesanan"]);
    $tanggal_selesai =  htmlspecialchars($data["tanggal_selesai"]);
   
    

    $query = "UPDATE laundry_selimut SET
                jumlah_selimut = ' $jumlah_selimut',
                ukuran_selimut = '$ukuran_selimut',
                total_biaya_selimut = '$total_biaya_selimut',
                paket = '$paket',
                pewangi = '$pewangi ',
                total_biaya_penjemputan = '$total_biaya_penjemputan',
                status_pembayaran = '$status_pembayaran',
                status_pesanan = '$status_pesanan',
                tanggal_selesai = '$tanggal_selesai'
                WHERE id_selimut = $id";

            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);

}


function ubah($data){
    global $conn;

    $id = $_SESSION['pelanggan']['id_user'];
    $nama =  htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $no_telpon =  htmlspecialchars($data['no_telpon']);
   
    

    $query = "UPDATE user SET
                nama = '$nama',
                alamat = '$alamat',
                no_telpon = '$no_telpon'
                WHERE id_user = $id";

            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);

}



function tgl_indo($tgl){
    $tanggal = substr($tgl, 8, 2);
    $bulan = substr($tgl, 5, 2);
    $tahun = substr($tgl, 0, 4);
    return $tanggal."/".$bulan."/".$tahun;
}