-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2021 pada 13.05
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry_pakaian`
--

CREATE TABLE `laundry_pakaian` (
  `id_pakaian` int(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `berat_pakaian` varchar(250) NOT NULL,
  `total_biaya_pakaian` varchar(250) NOT NULL,
  `jam_penjemputan` time NOT NULL,
  `paket` varchar(250) NOT NULL,
  `pewangi` varchar(250) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total_biaya_penjemputan` varchar(250) NOT NULL,
  `metode_pembayaran` varchar(250) NOT NULL,
  `status_pembayaran` varchar(250) NOT NULL,
  `status_pesanan` varchar(250) NOT NULL,
  `tanggal_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laundry_pakaian`
--

INSERT INTO `laundry_pakaian` (`id_pakaian`, `id_user`, `berat_pakaian`, `total_biaya_pakaian`, `jam_penjemputan`, `paket`, `pewangi`, `tanggal_transaksi`, `total_biaya_penjemputan`, `metode_pembayaran`, `status_pembayaran`, `status_pesanan`, `tanggal_selesai`) VALUES
(90, 9, '3', '18000', '09:36:00', 'Cepat Durasi 1 Hari', 'Wangi Sweet Heart :wangi yang berasal dari keharuman bunga.', '2021-02-26', '11000', 'Cash', ' Belum dibayar', 'Akan diambil', '0000-00-00'),
(91, 9, '  1', ' 6000', '10:36:00', '  Cepat Durasi 1 Hari', '  Wangi Sweet Heart :wangi yang berasal dari keharuman bunga.', '2021-02-26', '11000', 'Cash', 'Belum di Bayar', 'Sedang dilaundry', '2021-02-28'),
(92, 11, ' 1', ' 6000', '00:39:00', ' Normal Durasi 2 Hari', ' Wangi Mystique :wangi yang berasal dari paduan wangi amber, buah, dan bunga.', '2021-02-26', '6000', 'Cash', ' Belum dibayar', 'Akan diambilan', '2021-02-27'),
(93, 11, ' 2', ' 12000', '01:39:00', ' Cepat Durasi 1 Hari', ' Wangi Passion :wangi yang berasal dari aroma bunga dan buah-buahan berry.', '2021-02-26', '11000', 'Cash', 'Sudah di Bayar', 'Telah diterima', '2021-02-26'),
(94, 9, ' 2', ' 12000', '11:09:00', ' Cepat Durasi 1 Hari', ' Wangi Mystique :wangi yang berasal dari paduan wangi amber, buah, dan bunga.', '2021-02-26', '11000', 'Cash', 'Belum di Bayar', 'Akan diambilan', '2021-02-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry_selimut`
--

CREATE TABLE `laundry_selimut` (
  `id_selimut` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `jumlah_selimut` varchar(250) NOT NULL,
  `ukuran_selimut` varchar(100) NOT NULL,
  `total_biaya_selimut` varchar(250) NOT NULL,
  `jam_penjemputan` time NOT NULL,
  `paket` varchar(250) NOT NULL,
  `pewangi` varchar(250) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total_biaya_penjemputan` varchar(250) NOT NULL,
  `metode_pembayaran` varchar(250) NOT NULL,
  `status_pembayaran` varchar(250) NOT NULL,
  `status_pesanan` varchar(250) NOT NULL,
  `tanggal_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laundry_selimut`
--

INSERT INTO `laundry_selimut` (`id_selimut`, `id_user`, `jumlah_selimut`, `ukuran_selimut`, `total_biaya_selimut`, `jam_penjemputan`, `paket`, `pewangi`, `tanggal_transaksi`, `total_biaya_penjemputan`, `metode_pembayaran`, `status_pembayaran`, `status_pesanan`, `tanggal_selesai`) VALUES
(55, 9, '  2', 'Selimut Sedang (120 x 180 cm)', '30000', '10:37:00', 'Normal Durasi 2 Hari', 'Wangi Sweet Heart :wangi yang berasal dari keharuman bunga.  ', '2021-02-26', '6000', 'Cash', 'Sudah di Bayar', 'Akan diambil', '2021-02-27'),
(56, 9, ' 1', 'Selimut kecil (90 x 180 cm)', '15000', '09:38:00', 'Normal Durasi 2 Hari', 'Wangi Mystique :wangi yang berasal dari paduan wangi amber, buah, dan bunga. ', '2021-02-26', '6000', 'Cash', ' Belum dibayar', 'Akan diambil', '2021-02-26'),
(57, 11, ' 1', 'Selimut kecil (90 x 180 cm)', '15000', '14:40:00', 'Normal Durasi 2 Hari', 'Wangi Mystique :wangi yang berasal dari paduan wangi amber, buah, dan bunga. ', '2021-02-26', '6000', 'Cash', 'Belum di Bayar', 'Sedang diantar', '2021-02-26'),
(58, 11, '1', 'Selimut kecil (90 x 180 cm)', '15000', '14:41:00', 'Cepat Durasi 1 Hari', 'Wangi Romance :Wangi yang berasal dari aroma perpaduan antara cedarwood dan amber.', '2021-02-26', '11000', 'Cash', ' Belum dibayar', 'Akan diambil', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_telpon` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `no_telpon`, `username`, `password`) VALUES
(9, ' Aldo', 'Bandung lau no.177', ' 08125547897', 'aldo', '12345'),
(10, ' ilham ', 'cirebon lau no.177', ' 08125547897', 'admin', '54321'),
(11, ' raihan', 'Garut lau no.177', ' 08125547897', 'raihan', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laundry_pakaian`
--
ALTER TABLE `laundry_pakaian`
  ADD PRIMARY KEY (`id_pakaian`);

--
-- Indeks untuk tabel `laundry_selimut`
--
ALTER TABLE `laundry_selimut`
  ADD PRIMARY KEY (`id_selimut`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laundry_pakaian`
--
ALTER TABLE `laundry_pakaian`
  MODIFY `id_pakaian` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `laundry_selimut`
--
ALTER TABLE `laundry_selimut`
  MODIFY `id_selimut` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
