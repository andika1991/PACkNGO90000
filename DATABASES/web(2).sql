-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 08:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `email`, `password`) VALUES
(1, 'andikapsw30@gmail.com', 'adm123456'),
(2, '11111111@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `datapenumpangbus`
--

CREATE TABLE `datapenumpangbus` (
  `id_datapenumpang` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `NIK` varchar(16) DEFAULT NULL,
  `kursi` varchar(10) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketbus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapenumpangbus`
--

INSERT INTO `datapenumpangbus` (`id_datapenumpang`, `jenis_kelamin`, `nama_lengkap`, `no_hp`, `email`, `NIK`, `kursi`, `id_pengguna`, `id_jadwaltiketbus`) VALUES
(124, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', '22', 'K10', 9, 7),
(125, 'Tuan', 'bukum', '0876545654', 'jennifer.lawrence@example.com', '22', 'A7', 9, 7),
(126, 'Tuan', 'bukuj', '089507832333', 'mark.wahlberg@example.com', '22', 'K2', 9, 7),
(127, 'Tuan', 'aMIN ', '0846446464', 'mark.wahlberg@example.com', '22', 'A2', 51, 8),
(128, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'minato828g@gmail.com', '22', 'A3', 8, 9),
(129, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', '22', '', 17, 10),
(130, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'minato828g@gmail.com', '22', 'K5', 8, 11),
(131, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', '22', 'K2', 8, 11),
(132, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', '22', 'K2', 51, 13),
(133, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', '22', 'K5', 52, 13),
(134, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', '22', 'K2', 52, 13),
(135, 'Tuan', 'Muh Ikbal', '0847384432', 'mark.wahlberg@example.com', '127373373737', 'B3', 57, 19),
(136, 'Tuan', 'Muh Ikbal', '0847384432', 'mark.wahlberg@example.com', '127373373737', 'B3', 57, 19),
(137, 'Tuan', 'vghhgf', '07657654', 'admin@menorigaming.com', '5432345343', '', 57, 19),
(138, 'Tuan', 'm nabil', '089507832333', 'admin@menorigaming.com', '25432345432', 'A14', 57, 19),
(148, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'jennifer.lawrence@example.com', '456432345', 'B8', 57, 19),
(166, 'LKI', 'DFDGHFDSA', '0798765765', 'SDFHGFDSSGH', '3456543', '3', 31, 11),
(175, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'andikapsw30@gmail.com', '3456543345', 'A15', 57, 20),
(176, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'andikapsw30@gmail.com', '3456543345', 'A15', 57, 20),
(177, 'Nyonya', 'Andika Fikri Azhari', '089507832333', 'andikapsw30@gmail.com', '235432344', 'A12', 57, 20),
(178, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'andikapsw30@gmail.com', '234323432', 'A5', 51, 20),
(179, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', '181000288383', 'B3', 51, 21),
(180, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', '1811022022221', 'A14', 51, 22),
(181, 'Tuan', 'MOBIL', '089507832333', 'minato828g@gmail.com', '12343212343', 'A3', 59, 22),
(182, 'Tuan', '4M IQBAL', '089507832333', 'admin@dkamondshop.com', '243212322332', 'A2', 60, 22),
(183, 'Tuan', 'M Baqi', '089507832333', 'jennifer.lawrence@example.com', '1818228288383', 'A1', 60, 22),
(184, 'Tuan', 'ROFIQ', '086632734532', 'admin@menorigaming.com', '23432432', 'A6', 60, 22),
(185, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', '1232111111', 'A7', 51, 22),
(186, 'Tuan', 'ali nurdin', '089507832333', 'jennifer.lawreac33nce@example.com', '19203388484848', 'A1', 51, 23),
(187, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', '19340004774', 'A4', 51, 24),
(188, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'minato828g@gmail.com', '12345643456', 'B4', 60, 24),
(189, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorisgaming.com', '1543443434', 'A7', 60, 24);

-- --------------------------------------------------------

--
-- Table structure for table `datapenumpangkapal`
--

CREATE TABLE `datapenumpangkapal` (
  `id_datapenumpang` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketkapal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `datapenumpangkereta`
--

CREATE TABLE `datapenumpangkereta` (
  `id_datapenumpang` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketkereta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `datapenumpangpesawat`
--

CREATE TABLE `datapenumpangpesawat` (
  `id_datapenumpang` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketpesawat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tiket_bus`
--

CREATE TABLE `jadwal_tiket_bus` (
  `id_jadwaltiketbus` int(11) NOT NULL,
  `waktu_keberangkatan` datetime DEFAULT NULL,
  `waktu_kedatangan` datetime DEFAULT NULL,
  `terminal_keberangkatan` varchar(100) DEFAULT NULL,
  `terminal_kedatangan` varchar(100) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `kapasitas_stok_tiket` int(11) DEFAULT NULL,
  `deskripsi_jadwal` text DEFAULT NULL,
  `id_vendorbus` int(11) DEFAULT NULL,
  `status_jadwal` varchar(50) DEFAULT NULL,
  `no_kendaraan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_tiket_bus`
--

INSERT INTO `jadwal_tiket_bus` (`id_jadwaltiketbus`, `waktu_keberangkatan`, `waktu_kedatangan`, `terminal_keberangkatan`, `terminal_kedatangan`, `harga`, `kelas`, `kapasitas_stok_tiket`, `deskripsi_jadwal`, `id_vendorbus`, `status_jadwal`, `no_kendaraan`) VALUES
(5, '2024-04-14 10:15:00', '2024-04-16 11:18:00', 'Terminal Kampung Rambutan', 'Terminal Bintaro', '25000', 'Bisnis', 33, 'DFGHCGFF', 2, 'Arrived', NULL),
(6, '2024-04-14 17:20:00', '2024-04-14 23:19:00', 'Terminal Kampung Rambutan', 'Terminal Bintaro', '245', 'Ekonomi', 40, 'BGUHGFDS', 2, 'Arrived', NULL),
(7, '2024-04-15 11:20:00', '2024-04-16 12:20:00', 'Terminal Cibubur', 'Terminal Cikokol', '50000', 'Ekonomi', 40, 'nnbdfbnb', 2, 'Arrived', NULL),
(8, '2024-04-17 10:25:00', '2024-04-17 23:28:00', 'Terminal Bintaro', 'Terminal Kp Rambutan', '25000', 'Ekonomi', 30, 'GHJWIDFDJDFJDIF', 2, 'Arrived', NULL),
(9, '2024-05-02 18:42:00', '2024-05-02 18:42:00', 'Terminal Kalideres', 'Terminal Manggarai', '32000', 'Ekonomi', 40, 'JJHGHJHHGKJHGFG', 2, 'Arrived', NULL),
(10, '2024-05-04 08:58:00', '2024-05-04 11:01:00', 'Terminal Pondok Cabe', 'Terminal Pasar Minggu', '20000', 'Ekonomi', 35, 'mnhnfghgdf', 2, 'Arrived', NULL),
(11, '2024-05-06 12:56:00', '2024-05-06 12:56:00', 'Terminal Manggarai', 'Terminal Lebak Bulus', '10000', 'Ekonomi', 30, 'ggg', 2, 'Arrived', NULL),
(12, '2024-05-07 16:21:00', '2024-05-07 18:23:00', 'Terminal Pulo Gadung', 'Terminal Tanah Abang', '18000', 'Ekonomi', 67, 'MJNHBBH', 2, 'Arrived', NULL),
(13, '2024-05-08 11:51:00', '2024-05-08 11:51:00', 'Terminal Kalideres', 'Terminal Pulo Gebang', '20000', 'Bisnis', 20, 'fff', 2, 'Arrived', NULL),
(15, '2024-05-12 04:05:00', '2024-05-12 07:00:00', 'Terminal Manggarai', 'Terminal Pulo Gebang', '25000', 'Ekonomi', 23, 'uhgfghgf', 4, 'Arrived', NULL),
(16, '2024-05-12 12:49:00', '2024-05-12 12:50:00', 'Terminal Senen', 'Terminal Kampung Melayu', '12000', 'Ekonomi', 33, 'bngfddfgbgfds', 4, 'Arrived', 'BE 67755 MGF'),
(17, '2024-05-12 11:33:00', '2024-05-12 14:36:00', 'Terminal Manggarai', 'Terminal Cibubur', '12000', 'Ekonomi', 33, 'werfgfds', 2, 'Arrived', 'BE 3344 ML'),
(18, '2024-05-12 14:26:00', '2024-05-12 15:27:00', 'Terminal Senen', 'Terminal Kampung Melayu', '15000', 'Ekonomi', 33, '1. Kendaraan Over Dimension dan Over Loading (ODOL) tidak diperkenankan memasuki area pelabuhan;\r\n2. Anda sudah dapat Masuk Pelabuhan (Check In) mulai dari 3 (tiga) jam sebelum Jadwal Keberangkatan yang Anda pilih\r\n3. Tiket akan hangus (expired) apabila Anda belum Masuk Pelabuhan (Check In) hingga melewati batas waktu Jadwal Masuk Pelabuhan yang Anda pilih; \r\n4. Nama Penumpang harus sesuai dengan Kartu Identitas (KTP/SIM/Passpor/DII);\r\n5. Jumlah Penumpang dan Nomor Polisi Kendaraan harus sesuai dengan Jumlah Penumpang dan Nomor Polisi Kendaraan yang akan menyeberang;\r\n6. Jadwal dan nama kapal keberangkatan dapat berubah sewaktu-waktu mengikuti kondisi cuaca dan operasional pelabuhan tanpa pemberitahuan terlebih dahulu.', 4, 'Arrived', 'BE 673755 SGF'),
(19, '2024-05-12 21:21:00', '2024-05-12 22:23:00', 'Terminal Tanjung Priok', 'Terminal Cibitung', '14000', 'Bisnis', 32, 'GFD', 4, 'Arrived', 'BE 67755 SGF'),
(20, '2024-05-13 13:50:00', '2024-05-13 15:44:00', 'Terminal Bintaro', 'Terminal Dayeuhkolot', '50000', 'Ekonomi', 22, 'fgbbvfdw', 4, 'Arrived', 'BE 3344 ML'),
(21, '2024-05-13 21:27:00', '2024-05-13 23:29:00', 'Terminal Rawamangun', 'Terminal Ciracas', '15000', 'Ekonomi', 27, 'nbvfghnbgvfdfvgb', 4, 'Arrived', 'BE 45676 VM'),
(22, '2024-05-14 23:32:00', '2024-05-15 03:06:00', 'Terminal Kramat Jati', 'Terminal Setiabudi', '33000', 'Ekonomi', 33, 'fgfrrrrrrrrrr', 4, 'Arrived', 'BE 45676 VM'),
(23, '2024-05-18 02:03:00', '2024-05-18 16:05:00', 'Terminal Cimindi', 'Terminal Waru', '25000', 'Ekonomi', 32, 'bgbgfdfg', 4, 'Tersedia', 'BE 45676 VMC'),
(24, '2024-05-18 07:14:00', '2024-05-18 14:21:00', 'Terminal Cimindi', 'Terminal Waru', '59000', 'Ekonomi', 33, 'ghhhhhhhhh', 2, 'Tersedia', 'AG 37337 NML');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tiket_kapal`
--

CREATE TABLE `jadwal_tiket_kapal` (
  `id_jadwaltiketkapal` int(11) NOT NULL,
  `waktu_keberangkatan` datetime DEFAULT NULL,
  `waktu_kedatangan` datetime DEFAULT NULL,
  `pelabuhan_keberangkatan` varchar(100) DEFAULT NULL,
  `pelabuhan_kedatangan` varchar(100) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `kapasitas_stok_tiket` int(11) DEFAULT NULL,
  `deskripsi_jadwal` text DEFAULT NULL,
  `id_vendor` int(11) DEFAULT NULL,
  `status_jadwal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_tiket_kapal`
--

INSERT INTO `jadwal_tiket_kapal` (`id_jadwaltiketkapal`, `waktu_keberangkatan`, `waktu_kedatangan`, `pelabuhan_keberangkatan`, `pelabuhan_kedatangan`, `harga`, `kategori`, `kapasitas_stok_tiket`, `deskripsi_jadwal`, `id_vendor`, `status_jadwal`) VALUES
(3, '2024-04-11 20:08:00', '2024-04-11 20:09:00', 'Semarang (Pelabuhan Tanjung Emas)', 'Banjarmasin (Pelabuhan Trisakti)', '54.00', 'Mobil', 23, 'erghnhgfre', 8, 'Arrived'),
(4, '2024-04-12 15:58:00', '2024-04-12 17:00:00', 'Pekanbaru (Pelabuhan Sungai Duku)', 'Tarakan (Pelabuhan Tarakan)', '80.00', 'Mobil', 4000, 'cxc      ', 8, 'Arrived');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tiket_kereta`
--

CREATE TABLE `jadwal_tiket_kereta` (
  `id_jadwaltiketkereta` int(11) NOT NULL,
  `waktu_keberangkatan` datetime DEFAULT NULL,
  `waktu_kedatangan` datetime DEFAULT NULL,
  `stasiun_keberangkatan` varchar(255) DEFAULT NULL,
  `stasiun_kedatangan` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `kapasitas_stok_tiket` int(11) DEFAULT NULL,
  `deskripsi_jadwal` text DEFAULT NULL,
  `status_jadwal` varchar(20) DEFAULT NULL,
  `id_vendorkrta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_tiket_kereta`
--

INSERT INTO `jadwal_tiket_kereta` (`id_jadwaltiketkereta`, `waktu_keberangkatan`, `waktu_kedatangan`, `stasiun_keberangkatan`, `stasiun_kedatangan`, `harga`, `kelas`, `kapasitas_stok_tiket`, `deskripsi_jadwal`, `status_jadwal`, `id_vendorkrta`) VALUES
(4, '2024-04-11 20:00:00', '2024-04-19 16:56:00', 'Stasiun Bandung (BD) - Bandung', 'Stasiun Purwokerto (PWT) - Purwokerto', 45, 'Ekonomi', 64, 'tyjy88888888888hhhhhhhhhhu', 'Arrived', 1),
(5, '2024-04-12 12:36:00', '2024-04-12 14:38:00', 'Stasiun Gambir (GMR) - Jakarta', 'Stasiun Tasikmalaya (TSM) - Tasikmalaya', 20, 'Ekonomi', 78, 'UUUUUUUUUU', 'Arrived', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tiket_pesawat`
--

CREATE TABLE `jadwal_tiket_pesawat` (
  `id_jadwaltiketpesawat` int(11) NOT NULL,
  `waktu_keberangkatan` datetime DEFAULT NULL,
  `waktu_kedatangan` datetime DEFAULT NULL,
  `bandara_keberangkatan` varchar(255) DEFAULT NULL,
  `bandara_kedatangan` varchar(255) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `kapasitas_stok_tiket` int(11) DEFAULT NULL,
  `deskripsi_jadwal` text DEFAULT NULL,
  `id_vendorpesawat` int(11) DEFAULT NULL,
  `status_jadwal` varchar(20) DEFAULT NULL,
  `nomor_penerbangan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_tiket_pesawat`
--

INSERT INTO `jadwal_tiket_pesawat` (`id_jadwaltiketpesawat`, `waktu_keberangkatan`, `waktu_kedatangan`, `bandara_keberangkatan`, `bandara_kedatangan`, `harga`, `kelas`, `kapasitas_stok_tiket`, `deskripsi_jadwal`, `id_vendorpesawat`, `status_jadwal`, `nomor_penerbangan`) VALUES
(20, '2024-05-07 13:34:00', '2024-05-07 13:33:00', 'Bandara Internasional Soekarno-Hatta (CGK) - Jakarta', 'Bandara Internasional Soekarno-Hatta (CGK) - Jakarta', '34000', 'Ekonomi', 33, '655555555555', 3, 'Arrived', 'GA 12344'),
(21, '2024-05-15 09:20:00', '2024-05-15 13:24:00', 'Bandara Internasional Soekarno-Hatta (CGK) - Jakarta', 'Bandara Internasional Soekarno-Hatta (CGK) - Jakarta', '1500000', 'Ekonomi', 50, 'ertghgrew', 3, 'On Going', 'GA 24949');

-- --------------------------------------------------------

--
-- Table structure for table `metodepembayaran`
--

CREATE TABLE `metodepembayaran` (
  `id_metode` int(11) NOT NULL,
  `nama_metode` varchar(255) NOT NULL,
  `Nomor_metode` varchar(255) DEFAULT NULL,
  `kategori_metode` varchar(20) DEFAULT NULL,
  `Deksripsi_metode` longtext DEFAULT NULL,
  `logo_metode` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metodepembayaran`
--

INSERT INTO `metodepembayaran` (`id_metode`, `nama_metode`, `Nomor_metode`, `kategori_metode`, `Deksripsi_metode`, `logo_metode`) VALUES
(5, 'Gopay', '085279549708 An.Andika Fikri Azhari', 'E-Wallet', '1.Buka Aplikasi GOPAY: Mulai aplikasi GOPAY di perangkat Anda.\r\n2.Pilih GOPAY : Temukan ikon GOPAY pada beranda.\r\n3.Pilih \'Kirim\' atau \'Transfer\': Pilih opsi ini untuk mengirim uang.\r\n4.Pilih Metode Pengiriman:\r\n5.Masukkan nomor telepon penerima\r\n6.Masukkan Jumlah Uang: Tentukan jumlah saldo yang ingin dikirim.\r\n7.Tambahkan Catatan (Opsional): Tambahkan pesan jika diperlukan.\r\n8.Konfirmasi dan Lanjutkan: Periksa informasi, lalu klik \"Transfer\" atau \"Kirim\".\r\n9.Masukkan PIN GOPAY: Masukkan PIN untuk konfirmasi keamanan.\r\n10.Selesai: Setelah PIN dimasukkan, transfer selesai dan Anda akan menerima notifikasi.\r\n11.Screenshot Bukti pembayaran untuk dikirim di form upload', 0x75706c6f6164732f6e65772d676f7061792d6c6f676f2d636f70792d32303438783438382e706e67),
(7, 'Bank BCA', '23233234323 An.Andika Fikri Azhari', 'Bank', '1.Login ke Aplikasi BCA Mobile:\r\nBuka aplikasi BCA Mobile di smartphone Anda.\r\nMasukkan kode akses untuk login.\r\n2.Pilih Menu m-Transfer:\r\nPilih menu \"m-Transfer\".\r\nPilih \"Daftar Transfer\" untuk menambahkan rekening tujuan (jika belum terdaftar).\r\n3.Daftar Rekening Tujuan:\r\nPilih \"Antar Rekening BCA\" atau \"Antar Bank\" sesuai kebutuhan.\r\nMasukkan nomor rekening tujuan dan nama penerima.\r\nSimpan data rekening tujuan.\r\n4.Lakukan Transfer:\r\nPilih menu \"Transfer\".\r\nPilih rekening tujuan dari daftar yang telah disimpan.\r\nMasukkan jumlah uang yang akan ditransfer.\r\nMasukkan berita (opsional).\r\nPilih \"Send\"\r\n5.Simpan Bukti pembayaran dan upload bukti pembayaran anda.', 0x75706c6f6164732f6263612e706e67),
(8, 'DANA', '0895077832333 AN.PACKNGO INDONESIA', 'E-Wallet', '1.Buka Aplikasi DANA: Mulai aplikasi DANA di perangkat Anda.\r\n2.Pilih Gopay: Temukan ikon DANA pada beranda.\r\n3.Pilih \'Kirim\' atau \'Transfer\': Pilih opsi ini untuk mengirim uang.\r\n4.Pilih Metode Pengiriman:\r\n5.Masukkan nomor telepon penerima\r\n6.Masukkan Jumlah Uang: Tentukan jumlah saldo yang ingin dikirim.\r\n7.Tambahkan Catatan (Opsional): Tambahkan pesan jika diperlukan.\r\n8.Konfirmasi dan Lanjutkan: Periksa informasi, lalu klik \"Transfer\" atau \"Kirim\".\r\n9.Masukkan PIN Gopay: Masukkan PIN untuk konfirmasi keamanan.\r\n10.Selesai: Setelah PIN dimasukkan, transfer selesai dan Anda akan menerima notifikasi.\r\n11.Screenshot Bukti pembayaran untuk dikirim di form upload', 0x75706c6f6164732f44616e612e706e67),
(9, 'Shopepay', '086765656 An.PACKNGO', 'E-Wallet', '1.Buka Aplikasi Shopepay: Mulai aplikasi Shopepay di perangkat Anda.\r\n2.Pilih Gopay: Temukan ikon Shopepay pada beranda.\r\n3.Pilih \'Kirim\' atau \'Transfer\': Pilih opsi ini untuk mengirim uang.\r\n4.Pilih Metode Pengiriman:\r\n5.Masukkan nomor telepon penerima\r\n6.Masukkan Jumlah Uang: Tentukan jumlah saldo yang ingin dikirim.\r\n7.Tambahkan Catatan (Opsional): Tambahkan pesan jika diperlukan.\r\n8.Konfirmasi dan Lanjutkan: Periksa informasi, lalu klik \"Transfer\" atau \"Kirim\".\r\n9.Masukkan PIN Shopepay: Masukkan PIN untuk konfirmasi keamanan.\r\n10.Selesai: Setelah PIN dimasukkan, transfer selesai dan Anda akan menerima notifikasi.\r\n11.Screenshot Bukti pembayaran untuk dikirim di form upload', 0x75706c6f6164732f53686f7065655061792d4c6f676f2d504e472d31303830702d566563746f723639436f6d2d31303234783435302e706e67),
(10, 'OVO', '08434333233', 'E-Wallet', '1.Buka Aplikasi OVO: Mulai aplikasi OVO di perangkat Anda.\r\n2.Pilih OVO: Temukan ikon OVO pada beranda.\r\n3.Pilih \'Kirim\' atau \'Transfer\': Pilih opsi ini untuk mengirim uang.\r\n4.Pilih Metode Pengiriman:\r\n5.Masukkan nomor telepon penerima\r\n6.Masukkan Jumlah Uang: Tentukan jumlah saldo yang ingin dikirim.\r\n7.Tambahkan Catatan (Opsional): Tambahkan pesan jika diperlukan.\r\n8.Konfirmasi dan Lanjutkan: Periksa informasi, lalu klik \"Transfer\" atau \"Kirim\".\r\n9.Masukkan PIN OVO: Masukkan PIN untuk konfirmasi keamanan.\r\n10.Selesai: Setelah PIN dimasukkan, transfer selesai dan Anda akan menerima notifikasi.\r\n11.Screenshot Bukti pembayaran untuk dikirim di form upload', 0x75706c6f6164732f4f564f2e706e67),
(11, 'Link Aja', '08252522526 An.Packngo', 'E-Wallet', '1.Buka Aplikasi OVO: Mulai aplikasi OVO di perangkat Anda.\r\n2.Pilih OVO: Temukan ikon OVO pada beranda.\r\n3.Pilih \'Kirim\' atau \'Transfer\': Pilih opsi ini untuk mengirim uang.\r\n4.Pilih Metode Pengiriman:\r\n5.Masukkan nomor telepon penerima\r\n6.Masukkan Jumlah Uang: Tentukan jumlah saldo yang ingin dikirim.\r\n7.Tambahkan Catatan (Opsional): Tambahkan pesan jika diperlukan.\r\n8.Konfirmasi dan Lanjutkan: Periksa informasi, lalu klik \"Transfer\" atau \"Kirim\".\r\n9.Masukkan PIN OVO: Masukkan PIN untuk konfirmasi keamanan.\r\n10.Selesai: Setelah PIN dimasukkan, transfer selesai dan Anda akan menerima notifikasi.\r\n11.Screenshot Bukti pembayaran untuk dikirim di form upload', 0x75706c6f6164732f4c6f676f204c696e6b20416a6121202831292e706e67),
(12, 'AstraPay', '0846454554 An.Packngo', 'E-Wallet', 'f', 0x75706c6f6164732f6c6f676f2d636f6c6f7266756c2e77656270);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username_pengguna` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username_pengguna`, `email`, `password`) VALUES
(1, 'john_doe', 'john.doe21@gmail.com', ''),
(8, 'jennifer_lawrence', 'jennifer.lawrence@example.com', 'password8'),
(9, 'tom_hanks', 'tom.hanks@example.com', 'password9'),
(11, 'brad_pitt', 'brad.pitt@example.com', 'password11'),
(12, 'angelina_jolie', 'angelina.jolie@example.com', 'password12'),
(13, 'george_clooney', 'george.clooney@example.com', 'password13'),
(14, 'meryl_streep', 'meryl.streep@example.com', 'password14'),
(15, 'will_smith', 'will.smith@example.com', 'password15'),
(16, 'julia_roberts', 'julia.roberts@example.com', 'password16'),
(17, 'dwayne_johnson', 'dwayne.johnson@example.com', 'password17'),
(18, 'gal_gadot', 'gal.gadot@example.com', 'password18'),
(19, 'ryan_reynolds', 'ryan.reynolds@example.com', 'password19'),
(21, 'hugh_jackman', 'hugh.jackman@example.com', 'password21'),
(22, 'margot_robbie', 'margot.robbie@gmail.com', 'amip123'),
(23, 'mark_wahlberg', 'mark.wahlberg@example.com', 'password23'),
(24, 'jennifer_aniston', 'jennifer.aniston@example.com', 'password24'),
(25, 'matthew_mcconaughey', 'matthew.mcconaughey@example.com', 'password25'),
(26, 'nicole_kidman', 'nicole.kidman@example.com', 'password26'),
(27, 'tom_cruise', 'tom.cruise@example.com', 'password27'),
(28, 'emma_stone', 'emma.stone@example.com', 'password28'),
(30, 'natalie_dormer', 'natalie.dormer@example.com', 'password30'),
(31, 'jared_leto', 'jared.leto@example.com', 'password31'),
(32, 'amy_adams', 'amy.adams@example.com', 'password32'),
(33, 'ryan_gosling', 'ryan.gosling@example.com', 'password33'),
(34, 'sandra_bullock', 'sandra.bullock@example.com', 'password34'),
(35, 'chadwick_boseman', 'chadwick.boseman@example.com', 'password35'),
(36, 'cate_blanchett', 'cate.blanchett@example.com', 'password36'),
(37, 'johnny_depp', 'johnny.depp@example.com', 'password37'),
(38, 'emily_blunt', 'emily.blunt@example.com', 'password38'),
(39, 'christian_bale', 'christian.bale@example.com', 'password39'),
(51, '2257051005', 'andikapsw30@gmail.com', 'AFGUVBHNNHT'),
(52, 'amin', 'jennifer.lawrence@sexample.com', '$2y$10$YFF4EMoRfw0kCmIUkOXp2ukisjcpQeqndFTZwRoLJi/phi.MUa36y'),
(55, 'ramzi', 'ramzi123@gmail.com', '$2y$10$kNHliDuKMoOKlzyByaHxYuqId4GRCVYQSJF7Cxgeto99AAq561WYe'),
(56, 'Andika', 'andikapsw30@gmail.com', '$2y$10$lE1kKz1s4wh2lZ41gzE5i.mAmAN28Xr3nQpdwxN2Aeh38oZvnjhAK'),
(57, 'Andikafikri', 'andikapsw230@gmail.com', '$2y$10$wE0ZUd9C0n6f1TwOuJI.b.Xmwun38qBRDk9vye4ZDC323X6QYwBqK'),
(58, 'DKAMONDSHOP', 'dkam123@gmail.com', '$2y$10$r.HFxpA9Uu4oR1fP802HU.dFHKaXhCEQcSCFyRuTg8KNniD5YjMM2'),
(59, 'dkamondshopp', 'dkam124@gmail.com', '$2y$10$fzS05H956HqOG5AqNbYTpufAONtOkBmVeXUkK70ko1S8ARP7jf8WK'),
(60, 'ANDIKAFI02', 'minato828g@gmail.com', '$2y$10$u6/qODZwYZKhlpXWdSgBJ.zWUvNAQIfX/XZ9GRHILl7gOT.BS2U7e'),
(61, 'Aminmuh', 'amin12340@gmail.com', '$2y$10$miZUsZE7GHHG1XMM.5Lo0.Zh6OOfab0MXPalhyaYS9ZehWlj0sK2W');

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketbus`
--

CREATE TABLE `pesanantiketbus` (
  `id_pesanantiketbus` int(50) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `invoice_id` varchar(30) DEFAULT NULL,
  `TIMEORDER` datetime DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketbus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanantiketbus`
--

INSERT INTO `pesanantiketbus` (`id_pesanantiketbus`, `bukti_bayar`, `status_pembayaran`, `id_datapenumpang`, `id_metode`, `invoice_id`, `TIMEORDER`, `id_pengguna`, `id_jadwaltiketbus`) VALUES
(40, 0x75706c6f6164732f54414e472d4352494d50494e472d524731312d6762722d322e6a7067, 'Lunas', 124, 8, 'PACKNGO000034', '2024-04-15 09:19:12', 9, 7),
(41, 0x75706c6f6164732f756e6e616d656420283429202831292e6a7067, 'Lunas', 125, 8, 'PACKNGO000035', '2024-04-15 10:04:04', 9, 7),
(42, 0x75706c6f6164732f576861747341707020496d61676520323032342d30322d32392061742031312e33332e30335f30613566643064312e6a7067, 'Belum Lunas', 126, 8, 'PACKNGO000036', '2024-04-15 13:09:18', 9, 7),
(43, 0x75706c6f6164732f7468202834292e6a706567, 'Lunas', 127, 8, 'PACKNGO000037', '2024-04-17 10:27:26', 51, 8),
(44, 0x75706c6f6164732f576861747341707020496d61676520323032342d30352d30342061742030382e34362e34375f34653438646439372e6a7067, 'Belum Bayar', 129, 7, 'PACKNGO000038', '2024-05-04 08:02:34', 17, 10),
(45, 0x75706c6f6164732f576861747341707020496d61676520323032342d30352d30332061742030362e34312e35365f66303530623137322e6a7067, 'Lunas', 130, 5, 'PACKNGO000039', '2024-05-06 12:57:52', 8, 11),
(46, 0x75706c6f6164732f576861747341707020496d61676520323032342d30352d30342061742032302e31352e34385f33613739366531652e6a7067, 'Belum Bayar', 131, 8, 'PACKNGO000040', '2024-05-06 16:35:09', 8, 11),
(47, 0x75706c6f6164732f52656374616e676c6520332e6a7067, 'Lunas', 132, 5, 'PACKNGO000041', '2024-05-08 11:54:44', 51, 13),
(48, 0x75706c6f6164732f4672616d6520332e6a7067, 'Lunas', 133, 5, 'PACKNGO000042', '2024-05-08 12:10:57', 52, 13),
(49, 0x75706c6f6164732f566563746f722e706e67, 'Lunas', 134, 5, 'PACKNGO000043', '2024-05-08 12:39:58', 52, 13),
(50, NULL, 'Belum Bayar', 135, 5, 'PACKNGO000044', '2024-05-12 19:43:31', 57, 19),
(51, NULL, 'Belum Bayar', 148, 5, 'PACKNGO000045', '2024-05-12 21:28:09', 57, 19),
(52, NULL, 'Belum Bayar', 177, 5, 'PACKNGO000046', '2024-05-13 07:17:20', 57, 20),
(53, NULL, 'Belum Bayar', 177, 7, 'PACKNGO000047', '2024-05-13 07:58:07', 57, 20),
(54, NULL, 'Belum Bayar', 177, 5, 'PACKNGO000048', '2024-05-13 07:58:12', 57, 20),
(55, NULL, 'Belum Bayar', 177, 8, 'PACKNGO000049', '2024-05-13 07:58:24', 57, 20),
(56, NULL, 'Belum Bayar', 177, 8, 'PACKNGO000050', '2024-05-13 07:59:52', 57, 20),
(57, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000051', '2024-05-13 11:21:30', 51, 20),
(58, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000052', '2024-05-13 11:23:17', 51, 20),
(59, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000053', '2024-05-13 11:28:44', 51, 20),
(60, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000054', '2024-05-13 11:29:59', 51, 20),
(61, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000055', '2024-05-13 11:30:24', 51, 20),
(62, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000056', '2024-05-13 11:32:07', 51, 20),
(63, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000057', '2024-05-13 11:32:14', 51, 20),
(64, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000058', '2024-05-13 11:32:14', 51, 20),
(65, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000059', '2024-05-13 11:32:15', 51, 20),
(66, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000060', '2024-05-13 11:32:15', 51, 20),
(67, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000061', '2024-05-13 11:33:47', 51, 20),
(68, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000062', '2024-05-13 11:33:48', 51, 20),
(69, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000063', '2024-05-13 11:34:54', 51, 20),
(70, NULL, 'Belum Bayar', 178, 5, 'PACKNGO000064', '2024-05-13 11:34:56', 51, 20),
(71, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000065', '2024-05-13 17:28:37', 51, 21),
(72, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000066', '2024-05-13 17:29:24', 51, 21),
(73, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000067', '2024-05-13 17:29:27', 51, 21),
(74, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000068', '2024-05-13 17:29:28', 51, 21),
(75, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000069', '2024-05-13 17:29:28', 51, 21),
(76, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000070', '2024-05-13 17:29:29', 51, 21),
(77, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000071', '2024-05-13 17:29:29', 51, 21),
(78, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000072', '2024-05-13 17:29:29', 51, 21),
(79, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000073', '2024-05-13 17:29:29', 51, 21),
(80, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000074', '2024-05-13 17:29:30', 51, 21),
(81, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000075', '2024-05-13 17:29:30', 51, 21),
(82, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000076', '2024-05-13 17:29:30', 51, 21),
(83, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000077', '2024-05-13 17:30:19', 51, 21),
(84, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000078', '2024-05-13 17:32:00', 51, 21),
(85, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000079', '2024-05-13 17:32:01', 51, 21),
(86, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000080', '2024-05-13 17:32:01', 51, 21),
(87, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000081', '2024-05-13 17:32:02', 51, 21),
(88, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000082', '2024-05-13 17:32:02', 51, 21),
(89, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000083', '2024-05-13 17:35:34', 51, 21),
(90, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000084', '2024-05-13 17:36:42', 51, 21),
(91, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000085', '2024-05-13 17:36:43', 51, 21),
(92, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000086', '2024-05-13 17:36:58', 51, 21),
(93, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000087', '2024-05-13 17:37:21', 51, 21),
(94, NULL, 'Belum Bayar', 179, 5, 'PACKNGO000088', '2024-05-13 17:59:18', 51, 21),
(95, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000089', '2024-05-13 22:04:34', 51, 22),
(96, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000090', '2024-05-13 22:07:12', 51, 22),
(97, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000091', '2024-05-13 22:08:58', 51, 22),
(98, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000092', '2024-05-13 22:09:32', 51, 22),
(99, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000093', '2024-05-13 22:09:33', 51, 22),
(100, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000094', '2024-05-13 22:10:10', 51, 22),
(101, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000095', '2024-05-13 22:10:38', 51, 22),
(102, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000096', '2024-05-13 22:10:50', 51, 22),
(103, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000097', '2024-05-13 22:11:00', 51, 22),
(104, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000098', '2024-05-13 22:11:56', 51, 22),
(105, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000099', '2024-05-13 22:19:07', 51, 22),
(106, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000100', '2024-05-13 22:19:24', 51, 22),
(107, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000101', '2024-05-13 22:19:39', 51, 22),
(108, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000102', '2024-05-13 22:19:54', 51, 22),
(109, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000103', '2024-05-13 22:20:23', 51, 22),
(110, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000104', '2024-05-13 22:21:49', 51, 22),
(111, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000105', '2024-05-13 22:22:17', 51, 22),
(112, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000106', '2024-05-13 22:22:29', 51, 22),
(113, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000107', '2024-05-13 22:22:47', 51, 22),
(114, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000108', '2024-05-13 22:23:04', 51, 22),
(115, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000109', '2024-05-13 22:28:43', 51, 22),
(116, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000110', '2024-05-13 22:29:29', 51, 22),
(117, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000111', '2024-05-13 22:29:31', 51, 22),
(118, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000112', '2024-05-13 22:29:50', 51, 22),
(119, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000113', '2024-05-13 22:30:10', 51, 22),
(120, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000114', '2024-05-13 22:30:19', 51, 22),
(121, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000115', '2024-05-13 22:30:28', 51, 22),
(122, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000116', '2024-05-13 22:30:41', 51, 22),
(123, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000117', '2024-05-13 22:31:08', 51, 22),
(124, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000118', '2024-05-13 22:33:02', 51, 22),
(125, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000119', '2024-05-13 22:33:17', 51, 22),
(126, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000120', '2024-05-13 22:33:28', 51, 22),
(127, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000121', '2024-05-13 22:33:37', 51, 22),
(128, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000122', '2024-05-13 22:33:46', 51, 22),
(129, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000123', '2024-05-13 22:33:57', 51, 22),
(130, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000124', '2024-05-13 22:34:05', 51, 22),
(131, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000125', '2024-05-13 22:34:14', 51, 22),
(132, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000126', '2024-05-13 22:37:43', 51, 22),
(133, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000127', '2024-05-13 22:39:33', 51, 22),
(134, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000128', '2024-05-13 22:39:49', 51, 22),
(135, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000129', '2024-05-13 22:49:47', 51, 22),
(136, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000130', '2024-05-13 22:50:54', 51, 22),
(137, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000131', '2024-05-13 22:51:21', 51, 22),
(138, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000132', '2024-05-13 22:52:03', 51, 22),
(139, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000133', '2024-05-13 22:52:04', 51, 22),
(140, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000134', '2024-05-13 22:52:14', 51, 22),
(141, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000135', '2024-05-13 22:52:23', 51, 22),
(142, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000136', '2024-05-13 22:53:28', 51, 22),
(143, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000137', '2024-05-13 22:53:47', 51, 22),
(144, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000138', '2024-05-13 22:54:20', 51, 22),
(145, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000139', '2024-05-13 22:58:35', 51, 22),
(146, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000140', '2024-05-13 23:02:00', 51, 22),
(147, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000141', '2024-05-13 23:02:20', 51, 22),
(148, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000142', '2024-05-13 23:02:41', 51, 22),
(149, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000143', '2024-05-13 23:03:17', 51, 22),
(150, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000144', '2024-05-13 23:03:18', 51, 22),
(151, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000145', '2024-05-13 23:03:19', 51, 22),
(152, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000146', '2024-05-13 23:03:20', 51, 22),
(153, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000147', '2024-05-13 23:03:21', 51, 22),
(154, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000148', '2024-05-13 23:03:53', 51, 22),
(155, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000149', '2024-05-13 23:04:18', 51, 22),
(156, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000150', '2024-05-13 23:04:49', 51, 22),
(157, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000151', '2024-05-13 23:05:06', 51, 22),
(158, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000152', '2024-05-13 23:05:19', 51, 22),
(159, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000153', '2024-05-13 23:08:13', 51, 22),
(160, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000154', '2024-05-13 23:10:47', 51, 22),
(161, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000155', '2024-05-13 23:11:02', 51, 22),
(162, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000156', '2024-05-13 23:11:12', 51, 22),
(163, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000157', '2024-05-13 23:21:26', 51, 22),
(164, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000158', '2024-05-13 23:21:49', 51, 22),
(165, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000159', '2024-05-13 23:22:03', 51, 22),
(166, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000160', '2024-05-13 23:22:19', 51, 22),
(167, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000161', '2024-05-13 23:23:43', 51, 22),
(168, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000162', '2024-05-13 23:25:03', 51, 22),
(169, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000163', '2024-05-13 23:25:43', 51, 22),
(170, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000164', '2024-05-13 23:26:02', 51, 22),
(171, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000165', '2024-05-13 23:26:11', 51, 22),
(172, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000166', '2024-05-13 23:26:13', 51, 22),
(173, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000167', '2024-05-13 23:26:22', 51, 22),
(174, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000168', '2024-05-13 23:26:31', 51, 22),
(175, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000169', '2024-05-13 23:26:55', 51, 22),
(176, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000170', '2024-05-13 23:27:08', 51, 22),
(177, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000171', '2024-05-13 23:27:18', 51, 22),
(178, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000172', '2024-05-13 23:27:58', 51, 22),
(179, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000173', '2024-05-13 23:29:02', 51, 22),
(180, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000174', '2024-05-13 23:30:52', 51, 22),
(181, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000175', '2024-05-13 23:31:16', 51, 22),
(182, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000176', '2024-05-13 23:32:31', 51, 22),
(183, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000177', '2024-05-13 23:32:49', 51, 22),
(184, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000178', '2024-05-13 23:34:01', 51, 22),
(185, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000179', '2024-05-13 23:34:48', 51, 22),
(186, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000180', '2024-05-13 23:34:49', 51, 22),
(187, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000181', '2024-05-13 23:34:54', 51, 22),
(188, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000182', '2024-05-13 23:34:55', 51, 22),
(189, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000183', '2024-05-13 23:34:55', 51, 22),
(190, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000184', '2024-05-13 23:35:15', 51, 22),
(191, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000185', '2024-05-13 23:42:23', 51, 22),
(192, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000186', '2024-05-13 23:42:46', 51, 22),
(193, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000187', '2024-05-13 23:42:54', 51, 22),
(194, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000188', '2024-05-13 23:43:03', 51, 22),
(195, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000189', '2024-05-13 23:44:18', 51, 22),
(196, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000190', '2024-05-13 23:45:28', 51, 22),
(197, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000191', '2024-05-13 23:48:33', 51, 22),
(198, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000192', '2024-05-13 23:49:48', 51, 22),
(199, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000193', '2024-05-13 23:51:21', 51, 22),
(200, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000194', '2024-05-13 23:51:40', 51, 22),
(201, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000195', '2024-05-13 23:51:49', 51, 22),
(202, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000196', '2024-05-13 23:51:59', 51, 22),
(203, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000197', '2024-05-13 23:52:08', 51, 22),
(204, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000198', '2024-05-13 23:52:17', 51, 22),
(205, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000199', '2024-05-13 23:52:30', 51, 22),
(206, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000200', '2024-05-13 23:52:38', 51, 22),
(207, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000201', '2024-05-13 23:52:48', 51, 22),
(208, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000202', '2024-05-13 23:53:04', 51, 22),
(209, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000203', '2024-05-13 23:53:20', 51, 22),
(210, 0x75706c6f6164732f576861747341707020496d61676520323032342d30352d31312061742031352e35342e31375f33633039663164352e6a7067, 'Lunas', 180, 8, 'PACKNGO000204', '2024-05-13 23:53:27', 51, 22),
(211, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000205', '2024-05-14 00:01:34', 51, 22),
(212, NULL, 'Belum Bayar', 180, 8, 'PACKNGO000206', '2024-05-14 00:01:37', 51, 22),
(213, 0x75706c6f6164732ff09fa6862069636f6e205f68656164736574206f6e655f2e706e67, 'Belum Bayar', 180, 8, 'PACKNGO000207', '2024-05-14 00:01:50', 51, 22),
(214, NULL, 'Belum Bayar', 181, 8, 'PACKNGO000208', '2024-05-14 00:08:47', 59, 22),
(215, 0x75706c6f6164732f4e4f2053514c2e6a7067, 'Lunas', 181, 8, 'PACKNGO000209', '2024-05-14 00:14:13', 59, 22),
(216, NULL, 'Belum Bayar', 182, 8, 'PACKNGO000210', '2024-05-14 07:05:18', 60, 22),
(217, 0x75706c6f6164732f686f6d6520706573617761742e706e67, 'Belum Bayar', 182, 8, 'PACKNGO000211', '2024-05-14 07:07:55', 60, 22),
(218, NULL, 'Belum Bayar', 182, 8, 'PACKNGO000212', '2024-05-14 07:17:30', 60, 22),
(219, 0x75706c6f6164732f466565646261636b202831292e6a7067, 'Belum Bayar', 182, 8, 'PACKNGO000213', '2024-05-14 07:17:42', 60, 22),
(220, 0x75706c6f6164732f50696c69682050656d6261796172616e206b65726574612e6a7067, 'Belum Bayar', 182, 8, 'PACKNGO000214', '2024-05-14 07:17:58', 60, 22),
(221, 0x75706c6f6164732f6c6f67696e2061646d696e2e6a7067, 'Belum Bayar', 182, 8, 'PACKNGO000215', '2024-05-14 07:24:05', 60, 22),
(222, 0x75706c6f6164732f53656374696f6e202833292e737667, 'Belum Bayar', 182, 8, 'PACKNGO000216', '2024-05-14 07:26:09', 60, 22),
(223, NULL, 'Belum Bayar', 182, 8, 'PACKNGO000217', '2024-05-14 07:27:03', 60, 22),
(224, NULL, 'Belum Bayar', 182, 8, 'PACKNGO000218', '2024-05-14 07:29:56', 60, 22),
(225, 0x75706c6f6164732f49636f6e776b742e737667, 'Belum Bayar', 182, 8, 'PACKNGO000219', '2024-05-14 07:30:43', 60, 22),
(226, NULL, 'Belum Bayar', 182, 8, 'PACKNGO000220', '2024-05-14 07:49:47', 60, 22),
(227, NULL, 'Belum Bayar', 183, 8, 'PACKNGO000221', '2024-05-14 07:52:25', 60, 22),
(228, 0x75706c6f6164732f47726f75702e6a7067, 'Lunas', 183, 5, 'PACKNGO000222', '2024-05-14 07:52:50', 60, 22),
(229, 0x75706c6f6164732f42656c692054696b6574204f6e6c696e65204d756461682c4d757261682064616e2047616d70616e672e706e67, 'Lunas', 183, 5, 'PACKNGO000223', '2024-05-14 07:57:37', 60, 22),
(230, NULL, 'Belum Bayar', 184, 8, 'PACKNGO000224', '2024-05-14 13:26:52', 60, 22),
(231, 0x75706c6f6164732f576861747341707020496d61676520323032342d30342d32392061742030302e31322e33305f64343530323939372e6a7067, 'Lunas', 184, 8, 'PACKNGO000225', '2024-05-14 13:27:32', 60, 22),
(232, NULL, 'Belum Bayar', 184, 8, 'PACKNGO000226', '2024-05-14 13:28:11', 60, 22),
(233, NULL, 'Belum Bayar', 184, 8, 'PACKNGO000227', '2024-05-14 13:28:12', 60, 22),
(234, NULL, 'Belum Bayar', 184, 8, 'PACKNGO000228', '2024-05-14 13:28:13', 60, 22),
(235, 0x75706c6f6164732f696d61676520312e6a7067, 'Belum Bayar', 184, 8, 'PACKNGO000229', '2024-05-14 13:28:14', 60, 22),
(236, 0x75706c6f6164732f464545444241434b2e6a7067, 'Lunas', 185, 8, 'PACKNGO000230', '2024-05-14 15:05:16', 51, 22),
(237, NULL, 'Belum Bayar', 185, 8, 'PACKNGO000231', '2024-05-14 16:34:53', 51, 22),
(238, 0x75706c6f6164732f576861747341707020496d61676520323032342d30352d30342061742032302e30312e31345f30666363326464632e6a7067, 'Lunas', 186, 8, 'PACKNGO000232', '2024-05-15 00:04:25', 51, 23),
(239, NULL, 'Belum Bayar', 187, 9, 'PACKNGO000233', '2024-05-15 07:35:37', 51, 24),
(240, NULL, 'Belum Bayar', 187, 9, 'PACKNGO000234', '2024-05-15 07:37:11', 51, 24),
(241, NULL, 'Belum Bayar', 187, 9, 'PACKNGO000235', '2024-05-15 07:37:30', 51, 24),
(242, 0x75706c6f6164732f4b657365686174616e204d656e74616c202835292e706e67, 'Lunas', 187, 9, 'PACKNGO000236', '2024-05-15 07:37:42', 51, 24),
(243, 0x75706c6f6164732f47726f757020342e6a7067, 'Lunas', 188, 8, 'PACKNGO000237', '2024-05-15 11:34:36', 60, 24),
(244, 0x75706c6f6164732f49636f6e2e737667, 'Lunas', 189, 8, 'PACKNGO000238', '2024-05-15 11:58:25', 60, 24),
(245, NULL, 'Belum Bayar', 188, 8, 'PACKNGO000239', '2024-05-15 12:16:08', 60, 24),
(246, NULL, 'Belum Bayar', 189, 8, 'PACKNGO000240', '2024-05-15 13:02:35', 60, 24);

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketkapal`
--

CREATE TABLE `pesanantiketkapal` (
  `id_pesanantiketkapal` varchar(50) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_jadwaltiketkapal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketkereta`
--

CREATE TABLE `pesanantiketkereta` (
  `id_pesanantiket` varchar(20) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_jadwaltiketkereta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketpesawat`
--

CREATE TABLE `pesanantiketpesawat` (
  `id_pesanantiket` varchar(20) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_jadwaltiketpesawat` int(11) DEFAULT NULL,
  `invoice_id` varchar(30) DEFAULT NULL,
  `TIMEORDER` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_bus`
--

CREATE TABLE `vendor_bus` (
  `id_vendorbus` int(11) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `alamat_vendor` varchar(255) NOT NULL,
  `logo_vendor` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_bus`
--

INSERT INTO `vendor_bus` (`id_vendorbus`, `nama_vendor`, `alamat_vendor`, `logo_vendor`) VALUES
(2, 'Damri Indonesia', 'Gedung Merdeka Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f746820283231292e6a706567),
(4, 'PO Haryanto', 'Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f706f68617279616e746f2e6a706567),
(5, 'Puspa Jaya', 'Jln Soekarno-Hatta Rajabasa ,Bandarlampung', 0x75706c6f6164732f746820283232292e6a706567),
(6, 'Adi Putro', 'Jln.Jend Sudirman,SCBD Mampang Prapatan,Jakarta', 0x75706c6f6164732f616469707574726f2e6a70672e6372646f776e6c6f6164),
(7, 'Sinar Jaya', 'Jln.Gatot Subroto Jakarta selatan', 0x75706c6f6164732f6c6f676f2d736a2e706e672e6372646f776e6c6f6164),
(8, 'Rosalia Indah', 'Jln.Umar said,Gajayana Solo', 0x75706c6f6164732f6461337a3467692d36343739316562342d353065312d343661382d623734642d6564306234366239666461662e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_kapal`
--

CREATE TABLE `vendor_kapal` (
  `id_vendor` int(11) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `alamat_vendor` varchar(255) NOT NULL,
  `logo_vendor` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_kapal`
--

INSERT INTO `vendor_kapal` (`id_vendor`, `nama_vendor`, `alamat_vendor`, `logo_vendor`) VALUES
(8, 'Vugu', 'Gedung Merdeka Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f534c4156452e706e67),
(10, 'Vugu', 'Gedung Merdeka Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f576861747341707020496d61676520323032342d30352d30352061742032302e31322e33355f37393762366364382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_kereta`
--

CREATE TABLE `vendor_kereta` (
  `id_vendorkrta` int(11) NOT NULL,
  `nama_vendor` varchar(255) DEFAULT NULL,
  `alamat_vendor` varchar(255) DEFAULT NULL,
  `logo_vendor` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_kereta`
--

INSERT INTO `vendor_kereta` (`id_vendorkrta`, `nama_vendor`, `alamat_vendor`, `logo_vendor`) VALUES
(1, 'Feri Indonesia', 'Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f4c6f676f204c696e6b20416a6121202831292e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_pesawat`
--

CREATE TABLE `vendor_pesawat` (
  `id_vendorpesawat` int(11) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `alamat_vendor` varchar(255) NOT NULL,
  `logo_vendor` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_pesawat`
--

INSERT INTO `vendor_pesawat` (`id_vendorpesawat`, `nama_vendor`, `alamat_vendor`, `logo_vendor`) VALUES
(3, 'Garuda Indonesia', 'Gedung Merdeka Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f756e6e616d6564202836292e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `datapenumpangbus`
--
ALTER TABLE `datapenumpangbus`
  ADD PRIMARY KEY (`id_datapenumpang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_jadwaltiketbus` (`id_jadwaltiketbus`);

--
-- Indexes for table `datapenumpangkapal`
--
ALTER TABLE `datapenumpangkapal`
  ADD PRIMARY KEY (`id_datapenumpang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_jadwaltiketkapal` (`id_jadwaltiketkapal`);

--
-- Indexes for table `datapenumpangkereta`
--
ALTER TABLE `datapenumpangkereta`
  ADD PRIMARY KEY (`id_datapenumpang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_jadwaltiketkereta` (`id_jadwaltiketkereta`);

--
-- Indexes for table `datapenumpangpesawat`
--
ALTER TABLE `datapenumpangpesawat`
  ADD PRIMARY KEY (`id_datapenumpang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_jadwaltiketpesawat` (`id_jadwaltiketpesawat`);

--
-- Indexes for table `jadwal_tiket_bus`
--
ALTER TABLE `jadwal_tiket_bus`
  ADD PRIMARY KEY (`id_jadwaltiketbus`),
  ADD KEY `id_vendorbus` (`id_vendorbus`);

--
-- Indexes for table `jadwal_tiket_kapal`
--
ALTER TABLE `jadwal_tiket_kapal`
  ADD PRIMARY KEY (`id_jadwaltiketkapal`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `jadwal_tiket_kereta`
--
ALTER TABLE `jadwal_tiket_kereta`
  ADD PRIMARY KEY (`id_jadwaltiketkereta`),
  ADD KEY `fk_vendor` (`id_vendorkrta`);

--
-- Indexes for table `jadwal_tiket_pesawat`
--
ALTER TABLE `jadwal_tiket_pesawat`
  ADD PRIMARY KEY (`id_jadwaltiketpesawat`),
  ADD KEY `id_vendorpesawat` (`id_vendorpesawat`);

--
-- Indexes for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pesanantiketbus`
--
ALTER TABLE `pesanantiketbus`
  ADD PRIMARY KEY (`id_pesanantiketbus`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `fk_datapenumpang` (`id_datapenumpang`),
  ADD KEY `fk_pengguna` (`id_pengguna`),
  ADD KEY `fk_jadwaltiketbus` (`id_jadwaltiketbus`);

--
-- Indexes for table `pesanantiketkapal`
--
ALTER TABLE `pesanantiketkapal`
  ADD PRIMARY KEY (`id_pesanantiketkapal`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_datapenumpang` (`id_datapenumpang`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `id_jadwaltiketkapal` (`id_jadwaltiketkapal`);

--
-- Indexes for table `pesanantiketkereta`
--
ALTER TABLE `pesanantiketkereta`
  ADD PRIMARY KEY (`id_pesanantiket`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_datapenumpang` (`id_datapenumpang`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `id_jadwaltiketkereta` (`id_jadwaltiketkereta`);

--
-- Indexes for table `pesanantiketpesawat`
--
ALTER TABLE `pesanantiketpesawat`
  ADD PRIMARY KEY (`id_pesanantiket`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_datapenumpang` (`id_datapenumpang`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `id_jadwaltiketpesawat` (`id_jadwaltiketpesawat`);

--
-- Indexes for table `vendor_bus`
--
ALTER TABLE `vendor_bus`
  ADD PRIMARY KEY (`id_vendorbus`);

--
-- Indexes for table `vendor_kapal`
--
ALTER TABLE `vendor_kapal`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indexes for table `vendor_kereta`
--
ALTER TABLE `vendor_kereta`
  ADD PRIMARY KEY (`id_vendorkrta`);

--
-- Indexes for table `vendor_pesawat`
--
ALTER TABLE `vendor_pesawat`
  ADD PRIMARY KEY (`id_vendorpesawat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `datapenumpangbus`
--
ALTER TABLE `datapenumpangbus`
  MODIFY `id_datapenumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `jadwal_tiket_bus`
--
ALTER TABLE `jadwal_tiket_bus`
  MODIFY `id_jadwaltiketbus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jadwal_tiket_kapal`
--
ALTER TABLE `jadwal_tiket_kapal`
  MODIFY `id_jadwaltiketkapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal_tiket_kereta`
--
ALTER TABLE `jadwal_tiket_kereta`
  MODIFY `id_jadwaltiketkereta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal_tiket_pesawat`
--
ALTER TABLE `jadwal_tiket_pesawat`
  MODIFY `id_jadwaltiketpesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `pesanantiketbus`
--
ALTER TABLE `pesanantiketbus`
  MODIFY `id_pesanantiketbus` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `vendor_bus`
--
ALTER TABLE `vendor_bus`
  MODIFY `id_vendorbus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor_kapal`
--
ALTER TABLE `vendor_kapal`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendor_kereta`
--
ALTER TABLE `vendor_kereta`
  MODIFY `id_vendorkrta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_pesawat`
--
ALTER TABLE `vendor_pesawat`
  MODIFY `id_vendorpesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datapenumpangbus`
--
ALTER TABLE `datapenumpangbus`
  ADD CONSTRAINT `datapenumpangbus_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `datapenumpangbus_ibfk_2` FOREIGN KEY (`id_jadwaltiketbus`) REFERENCES `jadwal_tiket_bus` (`id_jadwaltiketbus`);

--
-- Constraints for table `datapenumpangkapal`
--
ALTER TABLE `datapenumpangkapal`
  ADD CONSTRAINT `datapenumpangkapal_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `datapenumpangkapal_ibfk_2` FOREIGN KEY (`id_jadwaltiketkapal`) REFERENCES `jadwal_tiket_kapal` (`id_jadwaltiketkapal`);

--
-- Constraints for table `datapenumpangkereta`
--
ALTER TABLE `datapenumpangkereta`
  ADD CONSTRAINT `datapenumpangkereta_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `datapenumpangkereta_ibfk_2` FOREIGN KEY (`id_jadwaltiketkereta`) REFERENCES `jadwal_tiket_kereta` (`id_jadwaltiketkereta`);

--
-- Constraints for table `datapenumpangpesawat`
--
ALTER TABLE `datapenumpangpesawat`
  ADD CONSTRAINT `datapenumpangpesawat_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `datapenumpangpesawat_ibfk_2` FOREIGN KEY (`id_jadwaltiketpesawat`) REFERENCES `jadwal_tiket_pesawat` (`id_jadwaltiketpesawat`);

--
-- Constraints for table `jadwal_tiket_bus`
--
ALTER TABLE `jadwal_tiket_bus`
  ADD CONSTRAINT `jadwal_tiket_bus_ibfk_1` FOREIGN KEY (`id_vendorbus`) REFERENCES `vendor_bus` (`id_vendorbus`);

--
-- Constraints for table `jadwal_tiket_kapal`
--
ALTER TABLE `jadwal_tiket_kapal`
  ADD CONSTRAINT `jadwal_tiket_kapal_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `vendor_kapal` (`id_vendor`);

--
-- Constraints for table `jadwal_tiket_kereta`
--
ALTER TABLE `jadwal_tiket_kereta`
  ADD CONSTRAINT `fk_vendor` FOREIGN KEY (`id_vendorkrta`) REFERENCES `vendor_kereta` (`id_vendorkrta`);

--
-- Constraints for table `jadwal_tiket_pesawat`
--
ALTER TABLE `jadwal_tiket_pesawat`
  ADD CONSTRAINT `jadwal_tiket_pesawat_ibfk_1` FOREIGN KEY (`id_vendorpesawat`) REFERENCES `vendor_pesawat` (`id_vendorpesawat`);

--
-- Constraints for table `pesanantiketbus`
--
ALTER TABLE `pesanantiketbus`
  ADD CONSTRAINT `fk_datapenumpang` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangbus` (`id_datapenumpang`),
  ADD CONSTRAINT `fk_jadwaltiketbus` FOREIGN KEY (`id_jadwaltiketbus`) REFERENCES `jadwal_tiket_bus` (`id_jadwaltiketbus`),
  ADD CONSTRAINT `fk_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketbus_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`);

--
-- Constraints for table `pesanantiketkapal`
--
ALTER TABLE `pesanantiketkapal`
  ADD CONSTRAINT `pesanantiketkapal_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketkapal_ibfk_2` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangkapal` (`id_datapenumpang`),
  ADD CONSTRAINT `pesanantiketkapal_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`),
  ADD CONSTRAINT `pesanantiketkapal_ibfk_4` FOREIGN KEY (`id_jadwaltiketkapal`) REFERENCES `jadwal_tiket_kapal` (`id_jadwaltiketkapal`);

--
-- Constraints for table `pesanantiketkereta`
--
ALTER TABLE `pesanantiketkereta`
  ADD CONSTRAINT `pesanantiketkereta_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketkereta_ibfk_2` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangkereta` (`id_datapenumpang`),
  ADD CONSTRAINT `pesanantiketkereta_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`),
  ADD CONSTRAINT `pesanantiketkereta_ibfk_4` FOREIGN KEY (`id_jadwaltiketkereta`) REFERENCES `jadwal_tiket_kereta` (`id_jadwaltiketkereta`);

--
-- Constraints for table `pesanantiketpesawat`
--
ALTER TABLE `pesanantiketpesawat`
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_2` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangpesawat` (`id_datapenumpang`),
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`),
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_4` FOREIGN KEY (`id_jadwaltiketpesawat`) REFERENCES `jadwal_tiket_pesawat` (`id_jadwaltiketpesawat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
