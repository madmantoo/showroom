-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jul 2019 pada 15.42
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palapa_autocar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tahun` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `transmisi` varchar(32) NOT NULL,
  `kilometer` varchar(255) NOT NULL,
  `pajak` varchar(64) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu_pengajuan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`id_beli`, `nama`, `no_telp`, `merk`, `tahun`, `harga`, `transmisi`, `kilometer`, `pajak`, `keterangan`, `waktu_pengajuan`) VALUES
(5, 'Malih', '08211123123', 'Daihatsu Xenia', 2012, 105000000, 'Manual', '20000', 'Hidup', 'Mesin Kering Siap Pakai', '2019-05-06 14:11:08'),
(6, 'Jhon', '0812346432', 'Terios', 2014, 215000000, 'Matic', '234000000', 'Hidup', 'Sehat Terawat', '2019-05-06 14:32:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `judul_gambar` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `judul_gambar`, `gambar`, `tanggal_update`) VALUES
(1, 1, 'samping', 'avanza11.jpeg', '2019-04-30 10:27:26'),
(2, 1, 'mesin', 'avanza21.jpeg', '2019-04-30 10:27:35'),
(3, 1, 'dasbor', 'avanza31.jpeg', '2019-04-30 10:27:50'),
(4, 3, 'samping', 'avanza1.jpeg', '2019-05-04 14:51:25'),
(5, 3, 'mesin', 'avanza21.jpeg', '2019-05-04 14:51:31'),
(6, 3, 'dasbor', 'avanza31.jpeg', '2019-05-04 14:51:37'),
(7, 4, 'samping', 'atlis1.jpg', '2019-05-04 14:54:03'),
(8, 4, 'mesin', 'atlis3.jpg', '2019-05-04 14:54:12'),
(9, 5, 'samping', 'ayla1.jpg', '2019-05-04 14:56:19'),
(10, 5, 'dasbor', 'ayla2.jpg', '2019-05-04 14:56:25'),
(11, 6, 'dasbor', 'brio3.jpg', '2019-05-04 14:58:21'),
(12, 6, 'samping', 'brio11.jpg', '2019-05-04 14:58:29'),
(13, 6, 'mesin', 'brio21.jpg', '2019-05-04 14:58:36'),
(14, 7, 'samping', 'ertiga11.jpg', '2019-05-04 15:00:05'),
(15, 7, 'dasbor', 'ertiga2.jpg', '2019-05-04 15:00:12'),
(16, 13, 'samping', 'pajero11.jpg', '2019-05-04 15:10:06'),
(17, 12, 'samping', 'mobilio1.jpg', '2019-05-04 15:10:19'),
(18, 12, 'dasbor', 'mobilio2.jpg', '2019-05-04 15:10:32'),
(19, 13, 'dasbor', 'pajer2.jpg', '2019-05-04 15:10:51'),
(20, 13, 'mesin', 'pajer3.jpg', '2019-05-04 15:10:59'),
(21, 11, 'samping', 'march1.jpg', '2019-05-04 15:11:15'),
(22, 11, 'dasbor', 'marc2.jpg', '2019-05-04 15:11:24'),
(23, 10, 'samping', 'ignis1.jpg', '2019-05-04 15:11:35'),
(24, 10, 'dasbor', 'ignis2.jpg', '2019-05-04 15:11:46'),
(25, 9, 'samping', 'hrv1.jpg', '2019-05-04 15:12:03'),
(26, 9, 'dasbor', 'hrv2.jpg', '2019-05-04 15:12:11'),
(27, 8, 'samping', 'freed1.jpg', '2019-05-04 15:12:37'),
(28, 8, 'dasbor', 'freed2.jpg', '2019-05-04 15:12:46'),
(30, 14, 'samping', 'IMG-1365-784.jpg', '2019-07-06 16:23:29'),
(31, 14, 'belakang', 'IMG-1367-784.jpg', '2019-07-06 16:23:43'),
(32, 14, 'dasbor', 'IMG-1378-784.jpg', '2019-07-06 16:23:59'),
(33, 14, 'dasbor1', 'IMG-1385-784.jpg', '2019-07-06 16:24:11'),
(34, 14, 'mesin', 'IMG-1372-784.jpg', '2019-07-06 16:24:29'),
(35, 16, 'samping', 'livina1.jpg', '2019-07-06 16:27:32'),
(36, 16, 'belakang', 'livina2.jpg', '2019-07-06 16:27:40'),
(37, 16, 'dasbor', 'livina3.jpg', '2019-07-06 16:27:50'),
(38, 16, 'dasbor1', 'livina4.jpg', '2019-07-06 16:28:02'),
(39, 16, 'mesin', 'livina5.jpg', '2019-07-06 16:28:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `urutan`, `tanggal_update`) VALUES
(1, 'honda', 'Honda', 1, '2019-04-30 10:23:27'),
(2, 'toyota', 'Toyota', 2, '2019-04-30 10:23:53'),
(3, 'daihatsu', 'Daihatsu', 3, '2019-04-30 10:24:22'),
(4, 'suzuki', 'Suzuki', 4, '2019-04-30 10:24:34'),
(5, 'mitsubishi', 'Mitsubishi', 5, '2019-04-30 10:25:23'),
(6, 'nissan', 'Nissan', 6, '2019-05-04 15:06:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `websites` varchar(255) DEFAULT NULL,
  `keyword` text,
  `metatext` text,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rekening_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `tagline`, `email`, `websites`, `keyword`, `metatext`, `telepon`, `alamat`, `facebook`, `instagram`, `deskripsi`, `logo`, `icon`, `tanggal_update`, `rekening_pembayaran`) VALUES
(1, 'Palapa Autocar', 'Mobil bekas berkualitas', 'cs@palapaautocar.com', 'palapaautocar.com', '				mobil bekas murah			', '							palapa auto car', '(021) 80878888', 'Jl. Raya Pd. Gede, RT.1/RW.1, Kramat Jati, Kramatjati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13550		', 'https://www.facebook.com/groups/287904998319706/', 'https://www.instagram.com/palapautocar/?hl=id', 'mobil murah berkualitas, harga bersaing							', 'palapa21.png', 'palapa2.jpg', '2019-05-01 14:50:32', '							');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `keywords` text,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `transmisi` varchar(255) NOT NULL,
  `status_produk` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori`, `kode_produk`, `nama_produk`, `slug_produk`, `keterangan`, `keywords`, `harga`, `stok`, `gambar`, `warna`, `transmisi`, `status_produk`, `tanggal_post`, `tanggal_update`) VALUES
(3, 1, 2, 'AV1', 'Avanza 2018 MT', 'avanza-2018-mt-av1', '<p>Toyota Avanza E MT 2018<br />\r\n<br />\r\nInterior dan eksterior mobil seperti baru kondisi mobil seperti baru surat&quot; dijamin lengkap&nbsp;<br />\r\n<br />\r\nSpesifikasi</p>\r\n\r\n<p>Km 8.000an</p>\r\n\r\n<p>Pajak Hidup</p>\r\n\r\n<p>Bukan bekas kena dan banjir</p>\r\n\r\n<p>Elektrikal normal</p>\r\n\r\n<p>AC dingin</p>\r\n\r\n<p>Mesin kering tidak rembes</p>\r\n\r\n<p>Terima tukar tambah</p>\r\n', 'avanza', 147000000, 1, 'avanza.jpeg', 'Putih', 'Manual', 'Publish', '2019-05-04 16:51:15', '2019-05-04 14:51:15'),
(4, 1, 2, 'ATL1', 'Atlis AT 2010', 'atlis-at-2010-atl1', '<p>Toyota Atlis AT&nbsp;2010<br />\r\n<br />\r\nInterior dan eksterior mobil seperti baru kondisi mobil seperti baru surat&quot; dijamin lengkap&nbsp;<br />\r\n<br />\r\nSpesifikasi</p>\r\n\r\n<p>Km 30.000an</p>\r\n\r\n<p>Pajak Hidup</p>\r\n\r\n<p>Bukan bekas kena dan banjir</p>\r\n\r\n<p>Elektrikal normal</p>\r\n\r\n<p>AC dingin</p>\r\n\r\n<p>Mesin kering tidak rembes</p>\r\n\r\n<p>Terima tukar tambah</p>\r\n', 'Atlis', 135000000, 1, 'atlis.jpg', 'Hitam', 'Matic', 'Terjual', '2019-05-04 16:53:55', '2019-07-06 16:37:17'),
(5, 1, 3, 'AY1', 'Ayla MT 2016', 'ayla-mt-2016-ay1', '<p>Daihatsu Ayla MT 2016<br />\r\n<br />\r\nInterior dan eksterior mobil seperti baru kondisi mobil seperti baru surat&quot; dijamin lengkap&nbsp;<br />\r\n<br />\r\nSpesifikasi</p>\r\n\r\n<p>Km 10.000an</p>\r\n\r\n<p>Pajak Hidup</p>\r\n\r\n<p>Bukan bekas kena dan banjir</p>\r\n\r\n<p>Elektrikal normal</p>\r\n\r\n<p>AC dingin</p>\r\n\r\n<p>Mesin kering tidak rembes</p>\r\n\r\n<p>Terima tukar tambah</p>\r\n', '', 83000000, 1, 'ayla.jpg', 'Putih', 'Manual', 'Publish', '2019-05-04 16:56:08', '2019-05-04 14:56:08'),
(6, 1, 1, 'BR1', 'Brio AT 2015', 'brio-at-2015-br1', '<p>Honda Brio AT 2015<br />\r\n<br />\r\nInterior dan eksterior mobil seperti baru kondisi mobil seperti baru surat&quot; dijamin lengkap&nbsp;<br />\r\n<br />\r\nSpesifikasi</p>\r\n\r\n<p>Km 12.000an</p>\r\n\r\n<p>Pajak Hidup</p>\r\n\r\n<p>Bukan bekas kena dan banjir</p>\r\n\r\n<p>Elektrikal normal</p>\r\n\r\n<p>AC dingin</p>\r\n\r\n<p>Mesin kering tidak rembes</p>\r\n\r\n<p>Terima tukar tambah</p>\r\n', '', 104000000, 1, 'brio2.jpg', 'Abu', 'Matic', 'Terjual', '2019-05-04 16:57:59', '2019-07-06 16:36:29'),
(7, 1, 4, 'ERG1', 'Ertiga GX 2016', 'ertiga-gx-2016-erg1', '<p>Suzuki Ertiga 2016<br />\r\n<br />\r\nInterior dan eksterior mobil seperti baru kondisi mobil seperti baru surat&quot; dijamin lengkap&nbsp;<br />\r\n<br />\r\nSpesifikasi</p>\r\n\r\n<p>Km 8.000an</p>\r\n\r\n<p>Pajak Hidup</p>\r\n\r\n<p>Bukan bekas kena dan banjir</p>\r\n\r\n<p>Elektrikal normal</p>\r\n\r\n<p>AC dingin</p>\r\n\r\n<p>Mesin kering tidak rembes</p>\r\n\r\n<p>Terima tukar tambah</p>\r\n', '', 120000000, 1, 'ertiga1.jpg', 'Hitam', 'Manual', 'Publish', '2019-05-04 16:59:53', '2019-05-04 14:59:53'),
(8, 1, 1, 'HF1', 'Freed 2014 AT', 'freed-2014-at-hf1', '<p>Honda Freed 2014<br />\r\n<br />\r\nInterior dan eksterior mobil seperti baru kondisi mobil seperti baru surat&quot; dijamin lengkap&nbsp;<br />\r\n<br />\r\nSpesifikasi</p>\r\n\r\n<p>Km 14.000an</p>\r\n\r\n<p>Pajak Hidup</p>\r\n\r\n<p>Bukan bekas kena dan banjir</p>\r\n\r\n<p>Elektrikal normal</p>\r\n\r\n<p>AC dingin</p>\r\n\r\n<p>Mesin kering tidak rembes</p>\r\n\r\n<p>Terima tukar tambah</p>\r\n', '', 185000000, 1, 'freed.jpg', 'Putih', 'Matic', 'Publish', '2019-05-04 17:01:57', '2019-05-04 15:01:57'),
(9, 1, 1, 'HR1', 'Hrv  2015', 'hrv-2015-hr1', '<p>Honda HRV 2015<br />\r\n<br />\r\nInterior dan eksterior mobil seperti baru kondisi mobil seperti baru surat&quot; dijamin lengkap&nbsp;<br />\r\n<br />\r\nSpesifikasi</p>\r\n\r\n<p>Km 9.000an</p>\r\n\r\n<p>Pajak Hidup</p>\r\n\r\n<p>Bukan bekas kena dan banjir</p>\r\n\r\n<p>Elektrikal normal</p>\r\n\r\n<p>AC dingin</p>\r\n\r\n<p>Mesin kering tidak rembes</p>\r\n\r\n<p>Terima tukar tambah</p>\r\n', '', 214000000, 1, 'hrv.jpg', 'Hitam', 'Matic', 'Publish', '2019-05-04 17:03:22', '2019-05-04 15:03:22'),
(10, 1, 4, 'SI1', 'Ignis AT 2017', 'ignis-at-2017-si1', '<p>Ignis 2017<br />\r\n<br />\r\nInterior dan eksterior mobil seperti baru kondisi mobil seperti baru surat&quot; dijamin lengkap&nbsp;<br />\r\n<br />\r\nSpesifikasi</p>\r\n\r\n<p>Km 10.000an</p>\r\n\r\n<p>Pajak Hidup</p>\r\n\r\n<p>Bukan bekas kena dan banjir</p>\r\n\r\n<p>Elektrikal normal</p>\r\n\r\n<p>AC dingin</p>\r\n\r\n<p>Mesin kering tidak rembes</p>\r\n\r\n<p>Terima tukar tambah</p>\r\n', '', 125000000, 1, 'ignis.jpg', 'Abu', 'Matic', 'Publish', '2019-05-04 17:04:52', '2019-07-06 16:35:30'),
(12, 1, 1, 'HM1', 'Mobilio 2017', 'mobilio-2017-hm1', '<p>Honda Mobilio 2017<br />\r\n<br />\r\nInterior dan eksterior mobil seperti baru kondisi mobil seperti baru surat&quot; dijamin lengkap&nbsp;<br />\r\n<br />\r\nSpesifikasi</p>\r\n\r\n<p>Km 8.000an</p>\r\n\r\n<p>Pajak Hidup</p>\r\n\r\n<p>Bukan bekas kena dan banjir</p>\r\n\r\n<p>Elektrikal normal</p>\r\n\r\n<p>AC dingin</p>\r\n\r\n<p>Mesin kering tidak rembes</p>\r\n\r\n<p>Terima tukar tambah</p>\r\n', '', 214000000, 1, 'mobilio.jpg', 'Hitam', 'Manual', 'Terjual', '2019-05-04 17:08:51', '2019-05-05 20:40:27'),
(13, 1, 5, 'PJ1', 'Pajero Dakar 2015', 'pajero-dakar-2015-pj1', '<p>Pajero Dakar 2015<br />\r\n<br />\r\nInterior dan eksterior mobil seperti baru kondisi mobil seperti baru surat&quot; dijamin lengkap&nbsp;<br />\r\n<br />\r\nSpesifikasi</p>\r\n\r\n<p>Km 20.000an</p>\r\n\r\n<p>Pajak Hidup</p>\r\n\r\n<p>Bukan bekas kena dan banjir</p>\r\n\r\n<p>Elektrikal normal</p>\r\n\r\n<p>AC dingin</p>\r\n\r\n<p>Mesin kering tidak rembes</p>\r\n\r\n<p>Terima tukar tambah</p>\r\n', '', 284000000, 1, 'pajero1.jpg', 'Putih', 'Matic', 'Publish', '2019-05-04 17:09:54', '2019-05-04 15:09:54'),
(14, 1, 6, 'NSS', 'Nisan Serena HWS 2013', 'nisan-serena-hws-2013-nss', '<p>Mobil ini punya fitur andalan:</p>\r\n\r\n<p>Medium MPV Nissan yang mengutamakan kenyamanan dan akomodasi penumpang. Dilengkapi dengan electric sliding doors yang memudahkan akses keluar masuk serta konfigurasi kursi yang fleksibel. Mobil ini dilengkapi dengan mesin bensin 2000cc MR20DE 4 silinder yang bertenaga dan halus.</p>\r\n\r\n<p>Booking atau Beli</p>\r\n', '', 186000000, 1, 'IMG-1358-784.jpg', 'Silver', 'Matic', 'Publish', '2019-07-06 17:27:16', '2019-07-06 16:23:10'),
(16, 1, 6, 'NSL', 'Nissan Grand Livina 2012', 'nissan-grand-livina-2012-nsl', '<p>Mobil ini punya fitur andalan:</p>\r\n\r\n<p>LMPV 7 Seater Nissan yang mengunggulkan kenyamanan dan bantingan yang halus layaknya sedan. Mempunyai dua pilihan mesin yaitu HR15DE 1500cc dan HR18DE 1800cc yang irit bahan bakar membuat mobil ini dapat diandalkan untuk kebutuhan mobilitas sehari hari.</p>\r\n\r\n<p>Booking atau Beli</p>\r\n', '', 95000000, 1, 'livina.jpg', 'Silver', 'Matic', 'Publish', '2019-07-06 17:42:54', '2019-07-06 16:27:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_update`) VALUES
(1, 'rahmad', 'rahmad@gmail.com', 'rahmad', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '2019-04-30 10:21:23'),
(2, 'admin', 'admin@gmail.com', 'adminpalapa', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '2019-04-30 10:28:29'),
(3, 'Malih', 'Malih123@gmail.com', 'Malih01', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'User', '2019-07-03 10:07:49'),
(4, 'Widodo', 'Widodo@gmail.com', 'dodowi', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'User', '2019-07-03 10:08:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
