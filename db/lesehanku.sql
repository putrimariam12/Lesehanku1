-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 15 Jan 2024 pada 15.30
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lesehanku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_makanan`
--

CREATE TABLE `dt_makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jumlah` int(7) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_makanan`
--

INSERT INTO `dt_makanan` (`id_makanan`, `nama`, `jumlah`, `harga`, `menu`) VALUES
(1, '<b>Soup & Soto Daging Sapi Kuah Telur</b>', 5, 'Rp. 45.000,-', '<center><img src=\"../img/1.png\" height=150px\" width=\"170px\"></center>'),
(4, '<b>Pangsit Goreng Daging Telur</b>', 34, 'Rp. 75.000,-', '<center><img src=\"../img/4.png\" height=\"150px\" width=\"170px\"></center>'),
(5, '<b>Bakso Kuah Mie Campur</b>', 2, 'Rp. 35.000,- ', '<center><img src=\"../img/3.png\" height=\"150px\" width=\"170px\"></center>\r\n'),
(6, '<b>Nasi Goreng Special Paha</b>', 0, 'Rp. 25.000,- ', '<center><img src=\"../img/5.png\" height=\"150px\" width=\"170px\"></center>'),
(7, '<b>Tempe Goreng </b>', 1, 'Rp. 15.000,- ', '<center><img src=\"../img/6.png\" height=\"150px\" width=\"170px\"></center>'),
(8, '<b>Bakwan Sayur Goreng</b>', 12, 'Rp. 15.000,- ', '<center><img src=\"../img/7.png\" height=\"150px\" width=\"170px\"></center>'),
(9, '<b> Mie Pangsit Kuah  </b>', 1, 'Rp. 45.000,- ', '<center><img src=\"../img/8.png\" height=\"150px\" width=\"170px\"></center>'),
(10, '<b>Pangsit Kuah Daging </b>', 1, 'Rp. 45.000,-', '<center><img src=\"../img/co1.jpg\" height=\"150px\" width=\"170px\"></center>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_minuman`
--

CREATE TABLE `dt_minuman` (
  `id_minuman` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_minuman`
--

INSERT INTO `dt_minuman` (`id_minuman`, `nama`, `jumlah`, `harga`, `menu`) VALUES
(1, '<b>Coffe Late Special</b>', 2, 'Rp. 15.000,- ', '<center><img src=\"../img/10.png\" height=\"150px\" width=\"170px\"></center>'),
(2, '<b>Lemon Ice Special</b>', 7, 'Rp. 15.000,- ', '<center><img src=\"../img/15.png\" height=\"150px\" width=\"170px\"></center>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_pelanggan`
--

CREATE TABLE `dt_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(29) NOT NULL,
  `no_hp` varchar(29) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_pelanggan`
--

INSERT INTO `dt_pelanggan` (`id_pelanggan`, `nama`, `email`, `no_hp`, `alamat`) VALUES
(1, 'Budi', 'budi@gmail.com', '009911', 'Jalan sehat no 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_saran`
--

CREATE TABLE `dt_saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(29) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_saran`
--

INSERT INTO `dt_saran` (`id_saran`, `nama`, `email`, `saran`) VALUES
(16, 'Putri', '@gmail.com', 'Agak kurang banyak porsinya ya mbak/mas heheehhe'),
(17, 'Putri M', 'p@gmail.com', 'Mbak jangan lama\" ya masaknya'),
(18, 'mas ganteng', 'mg@gmail.com', 'Mbak minta No WA nya bowleee'),
(19, 'budi', 'budi@gmail.com', 'mbaknya ramahhhh polllll hehheeh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dt_makanan`
--
ALTER TABLE `dt_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `dt_minuman`
--
ALTER TABLE `dt_minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indeks untuk tabel `dt_pelanggan`
--
ALTER TABLE `dt_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `dt_saran`
--
ALTER TABLE `dt_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dt_makanan`
--
ALTER TABLE `dt_makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `dt_minuman`
--
ALTER TABLE `dt_minuman`
  MODIFY `id_minuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dt_pelanggan`
--
ALTER TABLE `dt_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dt_saran`
--
ALTER TABLE `dt_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
