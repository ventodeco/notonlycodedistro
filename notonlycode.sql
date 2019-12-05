-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2019 at 07:17 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notonlycode`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(10) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `link` varchar(500) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner`, `gambar`, `link`, `status`) VALUES
(1, 'NotOnlyCode 1', 'slider1.jpg', 'index.php', 'on'),
(2, 'NotOnlyCode 2', 'slider2.jpg', 'index.php', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `spesifikasi` text NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` tinyint(1) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `kategori_id`, `nama_barang`, `spesifikasi`, `gambar`, `harga`, `stok`, `status`) VALUES
(20, 7, 'Mens Shirt 1', '<p>Bahan kaos Cotton 30s ini memiliki gramasi antara 140 &ndash; 120 gr/m2. Bahan Cotton 30s ini paling banyak diminati terutama di kalangan anak muda, sering dipakai di setiap konveksi, distro dll karena bahannya tipis, tidak panas, dan tidak menyusut. Untuk bahan Cotton 30s ini lebih mudah ditemukan karena setiap konveksi pasti menawarkan pembuatan kaosnya menggunakan bahan Cotton 30s.</p>', 'gambar7.jpg', 120000, 7, 'on'),
(21, 7, 'Mens Shirt 2', '<p>Bahan kaos Cotton 30s ini memiliki gramasi antara 140 &ndash; 120 gr/m2. Bahan Cotton 30s ini paling banyak diminati terutama di kalangan anak muda, sering dipakai di setiap konveksi, distro dll karena bahannya tipis, tidak panas, dan tidak menyusut. Untuk bahan Cotton 30s ini lebih mudah ditemukan karena setiap konveksi pasti menawarkan pembuatan kaosnya menggunakan bahan Cotton 30s.</p>', 'gambar8.jpg', 120000, 10, 'on'),
(22, 8, 'Mens Jacket 1', '<p>Bahan kaos Cotton 30s ini memiliki gramasi antara 140 &ndash; 120 gr/m2. Bahan Cotton 30s ini paling banyak diminati terutama di kalangan anak muda, sering dipakai di setiap konveksi, distro dll karena bahannya tipis, tidak panas, dan tidak menyusut. Untuk bahan Cotton 30s ini lebih mudah ditemukan karena setiap konveksi pasti menawarkan pembuatan kaosnya menggunakan bahan Cotton 30s.</p>', 'gambar6.jpg', 120000, 10, 'on'),
(23, 8, 'Mens Jacket 2', '<p>Bahan kaos Cotton 30s ini memiliki gramasi antara 140 &ndash; 120 gr/m2. Bahan Cotton 30s ini paling banyak diminati terutama di kalangan anak muda, sering dipakai di setiap konveksi, distro dll karena bahannya tipis, tidak panas, dan tidak menyusut. Untuk bahan Cotton 30s ini lebih mudah ditemukan karena setiap konveksi pasti menawarkan pembuatan kaosnya menggunakan bahan Cotton 30s.</p>', 'gambar2.jpg', 150000, 10, 'on'),
(27, 7, 'Mens Shirt 3', '<p>Bahan kaos Cotton 30s ini memiliki gramasi antara 140 &ndash; 120 gr/m2. Bahan Cotton 30s ini paling banyak diminati terutama di kalangan anak muda, sering dipakai di setiap konveksi, distro dll karena bahannya tipis, tidak panas, dan tidak menyusut. Untuk bahan Cotton 30s ini lebih mudah ditemukan karena setiap konveksi pasti menawarkan pembuatan kaosnya menggunakan bahan Cotton 30s.</p>', 'gambar9.jpg', 120000, 10, 'on'),
(28, 7, 'Mens Shirt 4', '<p>Bahan kaos Cotton 30s ini memiliki gramasi antara 140 &ndash; 120 gr/m2. Bahan Cotton 30s ini paling banyak diminati terutama di kalangan anak muda, sering dipakai di setiap konveksi, distro dll karena bahannya tipis, tidak panas, dan tidak menyusut. Untuk bahan Cotton 30s ini lebih mudah ditemukan karena setiap konveksi pasti menawarkan pembuatan kaosnya menggunakan bahan Cotton 30s.</p>', 'gambar10.jpg', 120000, 12, 'on'),
(29, 7, 'Mens Shirt 5', '<p>Bahan kaos Cotton 30s ini memiliki gramasi antara 140 &ndash; 120 gr/m2. Bahan Cotton 30s ini paling banyak diminati terutama di kalangan anak muda, sering dipakai di setiap konveksi, distro dll karena bahannya tipis, tidak panas, dan tidak menyusut. Untuk bahan Cotton 30s ini lebih mudah ditemukan karena setiap konveksi pasti menawarkan pembuatan kaosnya menggunakan bahan Cotton 30s.</p>', 'gambar11.jpg', 120000, 13, 'on'),
(30, 8, 'Mens Jacket 3', '<p>Bahan kaos Cotton 30s ini memiliki gramasi antara 140 &amp;ndash; 120 gr/m2. Bahan Cotton 30s ini paling banyak diminati terutama di kalangan anak muda, sering dipakai di setiap konveksi, distro dll karena bahannya tipis, tidak panas, dan tidak menyusut. Untuk bahan Cotton 30s ini lebih mudah ditemukan karena setiap konveksi pasti menawarkan pembuatan kaosnya menggunakan bahan Cotton 30s.</p>', 'gambar3.jpg', 150000, 15, 'on'),
(31, 8, 'Mens Jacket 4', '<p>Bahan kaos Cotton 30s ini memiliki gramasi antara 140 &amp;ndash; 120 gr/m2. Bahan Cotton 30s ini paling banyak diminati terutama di kalangan anak muda, sering dipakai di setiap konveksi, distro dll karena bahannya tipis, tidak panas, dan tidak menyusut. Untuk bahan Cotton 30s ini lebih mudah ditemukan karena setiap konveksi pasti menawarkan pembuatan kaosnya menggunakan bahan Cotton 30s.</p>', 'gambar4.jpg', 150000, 13, 'on'),
(32, 8, 'Mens Jacket 5', '<p>Bahan kaos Cotton 30s ini memiliki gramasi antara 140 &amp;ndash; 120 gr/m2. Bahan Cotton 30s ini paling banyak diminati terutama di kalangan anak muda, sering dipakai di setiap konveksi, distro dll karena bahannya tipis, tidak panas, dan tidak menyusut. Untuk bahan Cotton 30s ini lebih mudah ditemukan karena setiap konveksi pasti menawarkan pembuatan kaosnya menggunakan bahan Cotton 30s.</p>', 'gambar5.jpg', 150000, 16, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(10) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`, `status`) VALUES
(7, 'T-shirt', 'on'),
(8, 'Jaket', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE `konfirmasi_pembayaran` (
  `konfirmasi_id` int(10) NOT NULL,
  `pesanan_id` int(10) NOT NULL,
  `nomor_rekening` varchar(20) NOT NULL,
  `nama_account` varchar(150) NOT NULL,
  `total_pembayaran` int(10) NOT NULL,
  `tanggal_transfer` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`konfirmasi_id`, `pesanan_id`, `nomor_rekening`, `nama_account`, `total_pembayaran`, `tanggal_transfer`, `status`) VALUES
(1, 2, '', '', 0, '2019-02-09', 0),
(2, 1, '', '', 0, '2019-02-09', 0),
(3, 3, '', '', 0, '2019-12-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kota_id` int(10) NOT NULL,
  `kota` varchar(150) NOT NULL,
  `tarif` int(10) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kota_id`, `kota`, `tarif`, `status`) VALUES
(1, 'Bandung', 11000, 'on'),
(2, 'Solo', 27000, 'on'),
(3, 'Semarang', 27000, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `pesanan_id` int(10) NOT NULL,
  `kota_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `nama_penerima` varchar(150) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`pesanan_id`, `kota_id`, `user_id`, `nama_penerima`, `nomor_telepon`, `alamat`, `tanggal_pemesanan`, `status`) VALUES
(1, 1, 3, 'ven', '111', 'je', '2019-12-01 19:49:56', 1),
(2, 1, 3, 'ven', '111', 'sada', '2019-12-01 19:50:32', 1),
(3, 1, 5, 'Wahyu Aji Tirta Gumelar', '081812345678', 'Perumahan PBB No.C143', '2019-12-02 01:17:35', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_detail`
--

CREATE TABLE `pesanan_detail` (
  `pesanan_id` int(10) NOT NULL,
  `barang_id` int(10) NOT NULL,
  `quantity` tinyint(2) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_detail`
--

INSERT INTO `pesanan_detail` (`pesanan_id`, `barang_id`, `quantity`, `harga`) VALUES
(1, 30, 2, 150000),
(1, 28, 1, 120000),
(2, 27, 4, 120000),
(3, 20, 3, 120000),
(3, 32, 2, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(160) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `level`, `nama`, `email`, `alamat`, `phone`, `password`, `status`) VALUES
(1, 'customer', 'vento', 'a@a.com', 'aaa', '080', '0cc175b9c0f1b6a831c399e269772661', 'on'),
(2, 'superadmin', 'bmev', 'aa@aa.com', 'jhfse', '98', '4124bc0a9335c27f086f24ba207a4912', 'on'),
(3, 'customer', 'Seno', 'seno@gmail.com', 'bandung', '08123456789', 'fa472db1114a7e002c4edcd25ab9bc27', 'on'),
(4, 'superadmin', 'admin', 'admin@notonlycode.com', 'Baturetno', '081809929885', '21232f297a57a5a743894a0e4a801fc3', 'on'),
(5, 'customer', 'Wahyu Aji Tirta Gumelar', 'tirta@gmail.com', 'Kalimantan', '081234456778', '0032df3d63d43dffea93a0d0fc1744cc', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`konfirmasi_id`),
  ADD KEY `pesanan_id` (`pesanan_id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`pesanan_id`),
  ADD KEY `kota_id` (`kota_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD KEY `pesanan_id` (`pesanan_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  MODIFY `konfirmasi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `kota_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `pesanan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `konfirmasi_pembayaran_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`pesanan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`kota_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD CONSTRAINT `pesanan_detail_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`pesanan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_detail_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`barang_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
