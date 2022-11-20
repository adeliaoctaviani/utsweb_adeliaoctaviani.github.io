-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2022 pada 11.16
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(120) NOT NULL,
  `keterangan` varchar(220) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `nama_buku`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Bussiness Plan', 'Buku Bagaimana cara memulai bisnis dengan baik', 'Bisnis', 120000, 10, 'product1.jpg'),
(2, 'Jasa Membuat Website', 'Bagaimana Cara membuat website yang baik dan benar', 'Bisnis', 120000, 11, 'product2.jpg'),
(3, 'Manajemen Bisnis', 'Bagaimana cara memulai sebuah bisnis manajemen', 'Bisnis', 120000, 11, 'product3.jpg\r\n'),
(4, 'Cara Praktis Belajar Membaca', 'Bagaimana cara membaca dengan baik untuk anak usia 4-6 th', 'Edukasi', 90000, 16, 'product4.jpg'),
(5, 'Matematika', 'Belajar Matematika Kelas X Peminatan', 'Edukasi', 120000, 12, 'product5.jpg'),
(6, 'Sistem Operasi', 'Belajar Sistem Operasi untuk Mahasiswa', 'Edukasi', 120000, 11, 'product6.jpg'),
(7, 'Kitab Ta\'lim Muta\'lim', 'Kitab Mengenai Pedoman Etika dan Metode Islami dalam menuntut ilmu', 'Keagamaan', 150000, 16, 'product10.jpg'),
(8, 'Karakter Islam', 'Bagaimana cara berkarakter yang baik dalam islam', 'Keagamaan', 150000, 11, 'product11.jpg'),
(9, 'Yesus', 'Buku yang menceritakan tentang kehidupan tuhan Yesus', 'Keagamaan', 150000, 11, 'product12.jpg'),
(10, 'Layangan Putus', 'Novel Romance', 'Novel', 99000, 10, 'product7.jpg'),
(11, 'Memory Policy', 'Novel Thriller', 'Novel', 99000, 10, 'product8.jpg'),
(12, 'Ferals', 'Novel Adventure', 'Novel', 99000, 12, 'product9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
