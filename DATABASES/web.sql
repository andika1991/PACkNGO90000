-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 02:59 PM
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
(186, 'Tuan', 'ali nurdin', '089507832333', 'jennifer.lawreac33nce@example.com', '19203388484848', 'A1', 51, 23),
(193, 'Tuan', 'Andika Fikri Azhari', '089507832333', '', '4333444', 'A9', 60, 23),
(194, 'Tuan', 'Andika Fikri Azhari', '08646543543', 'mbg@gmail.com', '18102299333', 'A4', 60, 23),
(196, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'andikapsw3022@gmail.com', '128288383', 'A20', 60, 23),
(197, 'Tuan', 'Muhammad Ali Nurdin', '08364544545', 'buku273@gmail.com', '18234585855', 'B7', 60, 23),
(198, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', '1828383747', 'A19', 51, 23),
(199, 'Nyonya', 'Aliya Zalfa', '0847757575', 'aliya123@gmail.com', '182837373737', 'B2', 51, 26),
(200, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'andikapsw30@gmail.com', '37485987436278', 'A8', 60, 29);

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
  `id_jadwaltiketkapal` int(11) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nomor_kendaraan` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapenumpangkapal`
--

INSERT INTO `datapenumpangkapal` (`id_datapenumpang`, `jenis_kelamin`, `nama_lengkap`, `no_hp`, `email`, `id_pengguna`, `id_jadwaltiketkapal`, `nik`, `nomor_kendaraan`) VALUES
(11, 'Tuan', 'Fikri Bara', '08757857587585', 'ahdhdudu@gmail.com', 51, 8, '18373474747', 'BE 838484 ML');

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
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketkereta` int(11) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapenumpangkereta`
--

INSERT INTO `datapenumpangkereta` (`id_datapenumpang`, `jenis_kelamin`, `nama_lengkap`, `no_hp`, `email`, `id_pengguna`, `id_jadwaltiketkereta`, `nik`) VALUES
(1, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', 51, 7, '1234323422'),
(2, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 51, 7, '234323432'),
(3, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 51, 7, '234323432'),
(4, 'Nyonya', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', 51, 7, '1243223'),
(5, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 51, 7, '34543234'),
(6, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', 51, 7, '12343234'),
(7, 'Tuan', '654543', '089507832333', 'mark.wahlberg@example.com', 60, 7, '4565434543'),
(8, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 60, 8, '13475666565'),
(9, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'minato828g@gmail.com', 51, 9, '18128833838');

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
  `nik` varchar(16) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketpesawat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapenumpangpesawat`
--

INSERT INTO `datapenumpangpesawat` (`id_datapenumpang`, `jenis_kelamin`, `nama_lengkap`, `no_hp`, `email`, `nik`, `id_pengguna`, `id_jadwaltiketpesawat`) VALUES
(1, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', '1234321233', 60, 22),
(2, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@dkamondshop.com', '54344343', 51, 22),
(3, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', '1810029393994', 60, 22),
(4, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'dfds@gmail.com', '192347744', 60, 22),
(5, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@dkamondshop.com', '54323454', 60, 22),
(7, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@dkamondshop.com', '182726363636', 51, 22);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `nama` varchar(255) NOT NULL,
  `p1` varchar(25) NOT NULL,
  `p2` varchar(25) NOT NULL,
  `saran` longtext NOT NULL,
  `id_feedback` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`nama`, `p1`, `p2`, `saran`, `id_feedback`) VALUES
('andika', 'Sangat Baik', 'Baik', 'SANGATBAIK GOOD JOB', 1),
('Ramadan sananta', 'Cukup Baik', 'Baik', 'Mnatappp GOODDJOBB', 2),
('Masman', 'Sangat Baik', 'Sangat Baik', 'Semenjak ada packngo beli tiket bus enak dan gampang ,anti antri dan ribet,Top Untuk websitenya semoga kedepan makin canggih', 3),
('Ahmad', 'Baik', 'Sangat Baik', 'saya dulu harus datang secara offline,semenjak kenal packngo beli-beli tiket jadi enak bisa dari mana aja dan proses kilat serta lengkap,Topppppppp', 4),
('Andika', 'Sangat Baik', 'Sangat Baik', 'aplikasinya sangat baik dan mudah digunakan', 5),
('M ali Nurdin', 'Baik', 'Cukup Baik', 'Sangat baik top untuk kemajuan PACKNGO', 6),
('Aliya', 'Baik', 'Baik', 'Baik', 7);

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
(5, '2024-04-14 10:15:00', '2024-04-16 11:18:00', 'Terminal Kampung Rambutan', 'Terminal Bintaro', '25000', 'Bisnis', 33, 'DFGHCGFF', 2, 'Arrived', 'BE 45676 VMC'),
(16, '2024-05-12 12:49:00', '2024-05-12 12:50:00', 'Terminal Senen', 'Terminal Kampung Melayu', '12000', 'Ekonomi', 33, 'bngfddfgbgfds', 4, 'Arrived', 'BE 67755 MGF'),
(17, '2024-05-12 11:33:00', '2024-05-12 14:36:00', 'Terminal Manggarai', 'Terminal Cibubur', '12000', 'Ekonomi', 33, 'werfgfds', 2, 'Arrived', 'BE 3344 ML'),
(23, '2024-05-25 02:03:00', '2024-05-26 16:05:00', 'Terminal Cimindi', 'Terminal Waru', '25000', 'Ekonomi', 32, 'bgbgfdfg', 4, 'Arrived', 'BE 45676 VMC'),
(26, '2024-05-25 13:21:00', '2024-05-25 17:25:00', 'Terminal Senen', 'Terminal Manggarai', '30000', 'Ekonomi', 50, 'jadwal tiket', 4, 'Arrived', 'BE 2838 VG'),
(27, '2024-05-25 13:10:00', '2024-05-26 13:10:00', 'Terminal Cibubur', 'Terminal Kalideres', '50000', 'Ekonomi', 40, 'tersedia', 4, 'Arrived', 'Tersedia'),
(28, '2024-05-27 13:18:00', '2024-05-27 13:18:00', 'Terminal Bintaro', 'Terminal Pondok Cabe', '40000', 'Ekonomi', 40, 'Tiket tersedia', 4, 'Arrived', 'BE 3344 ML'),
(29, '2024-05-29 17:07:00', '2024-05-29 22:12:00', 'Terminal Bintaro', 'Terminal Cibubur', '30000', 'Ekonomi', 39, 'Tersedia', 4, 'Tersedia', 'BE 33848 BV');

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
  `harga` decimal(10,0) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `kapasitas_stok_tiket` int(11) DEFAULT NULL,
  `deskripsi_jadwal` text DEFAULT NULL,
  `id_vendor` int(11) DEFAULT NULL,
  `status_jadwal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_tiket_kapal`
--

INSERT INTO `jadwal_tiket_kapal` (`id_jadwaltiketkapal`, `waktu_keberangkatan`, `waktu_kedatangan`, `pelabuhan_keberangkatan`, `pelabuhan_kedatangan`, `harga`, `kelas`, `kapasitas_stok_tiket`, `deskripsi_jadwal`, `id_vendor`, `status_jadwal`) VALUES
(4, '2024-04-12 15:58:00', '2024-04-12 17:00:00', 'Pekanbaru (Pelabuhan Sungai Duku)', 'Tarakan (Pelabuhan Tarakan)', '80', 'Mobil', 4000, 'cxc      ', 8, 'Arrived'),
(8, '2024-05-25 17:30:00', '2024-05-25 23:31:00', 'Manado (Pelabuhan Samudera Bitung)', 'Tanjung Pinang (Pelabuhan Sri Bintan Pura)', '50000', 'Mobil', 40, 'Jadwal tersedia', 8, 'Arrived');

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
(7, '2024-05-17 22:50:00', '2024-05-16 21:49:00', 'Stasiun Tasikmalaya (TSM) - Tasikmalaya', 'Stasiun Purwokerto (PWT) - Purwokerto', 15000, 'Ekonomi', 100, 'rrrrrrrrrrrr', 'Arrived', 1),
(8, '2024-05-24 11:42:00', '2024-05-25 20:41:00', 'Stasiun Solo Balapan (SLO) - Solo', 'Stasiun Jember (JBB) - Jember', 19000, 'Ekonomi', 33, 'ffghg', 'Arrived', 1),
(9, '2024-05-25 13:11:00', '2024-05-25 13:12:00', 'Stasiun Tasikmalaya (TSM) - Tasikmalaya', 'Stasiun Kediri (KDI) - Kediri', 13000, 'Ekonomi', 33, 'abdhdhdh', 'Arrived', 1);

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
(22, '2024-05-25 02:03:00', '2024-05-26 12:07:00', 'Bandara Internasional Soekarno-Hatta (CGK) - Jakarta', 'Bandara Internasional Silangit (DTB) - Silangit', '1400000', 'Ekonomi', 33, 'vvvvvvvvv', 3, 'Arrived', 'GA 12344'),
(24, '2024-05-27 13:20:00', '2024-05-27 13:20:00', 'Bandara Internasional Supadio (PNK) - Pontianak', 'Bandara Internasional Silangit (DTB) - Silangit', '30000', 'Ekonomi', 40, 'Infromasi tambahan', 3, 'Arrived', 'Tersedia');

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
(5, 'Gopay', '085279549708 An.Andika Fikri Azhari', 'E-Wallet', '1.Buka Aplikasi GOPAY: Mulai aplikasi GOPAY di perangkat Anda.\r\n2.Pilih GOPAY : Temukan ikon GOPAY pada beranda.\r\n3.Pilih \'Kirim\' atau \'Transfer\': Pilih opsi ini untuk mengirim uang.\r\n4.Pilih Metode Pengiriman:\r\n5.Masukkan nomor telepon penerima\r\n6.Masukkan Jumlah Uang: Tentukan jumlah saldo yang ingin dikirim.\r\n7.Tambahkan Catatan (Opsional): Tambahkan pesan jika diperlukan.\r\n8.Konfirmasi dan Lanjutkan: Periksa informasi, lalu klik \"Transfer\" atau \"Kirim\".\r\n9.Masukkan PIN GOPAY: Masukkan PIN untuk konfirmasi keamanan.\r\n', 0x75706c6f6164732f6e65772d676f7061792d6c6f676f2d636f70792d32303438783438382e706e67),
(9, 'Shopepay', '086765656 An.PACKNGO', 'E-Wallet', '1.Buka Aplikasi Shopepay: Mulai aplikasi Shopepay di perangkat Anda.\r\n2.Pilih Gopay: Temukan ikon Shopepay pada beranda.\r\n3.Pilih \'Kirim\' atau \'Transfer\': Pilih opsi ini untuk mengirim uang.\r\n4.Pilih Metode Pengiriman:\r\n5.Masukkan nomor telepon penerima\r\n6.Masukkan Jumlah Uang: Tentukan jumlah saldo yang ingin dikirim.\r\n7.Tambahkan Catatan (Opsional): Tambahkan pesan jika diperlukan.\r\n8.Konfirmasi dan Lanjutkan: Periksa informasi, lalu klik \"Transfer\" atau \"Kirim\".\r\n9.Masukkan PIN Shopepay: Masukkan PIN untuk konfirmasi keamanan.\r\n10.Selesai: Setelah PIN dimasukkan, transfer selesai dan Anda akan menerima notifikasi.\r\n11.Screenshot Bukti pembayaran untuk dikirim di form upload', 0x75706c6f6164732f53686f7065655061792d4c6f676f2d504e472d31303830702d566563746f723639436f6d2d31303234783435302e706e67),
(10, 'OVO', '08434333233', 'E-Wallet', '1.Buka Aplikasi OVO: Mulai aplikasi OVO di perangkat Anda.\r\n2.Pilih OVO: Temukan ikon OVO pada beranda.\r\n3.Pilih \'Kirim\' atau \'Transfer\': Pilih opsi ini untuk mengirim uang.\r\n4.Pilih Metode Pengiriman:\r\n5.Masukkan nomor telepon penerima\r\n6.Masukkan Jumlah Uang: Tentukan jumlah saldo yang ingin dikirim.\r\n7.Tambahkan Catatan (Opsional): Tambahkan pesan jika diperlukan.\r\n8.Konfirmasi dan Lanjutkan: Periksa informasi, lalu klik \"Transfer\" atau \"Kirim\".\r\n9.Masukkan PIN OVO: Masukkan PIN untuk konfirmasi keamanan.\r\n10.Selesai: Setelah PIN dimasukkan, transfer selesai dan Anda akan menerima notifikasi.\r\n11.Screenshot Bukti pembayaran untuk dikirim di form upload', 0x75706c6f6164732f4f564f2e706e67),
(11, 'Link Aja', '08252522526 An.Packngo', 'E-Wallet', '1.Buka Aplikasi OVO: Mulai aplikasi OVO di perangkat Anda.\r\n2.Pilih OVO: Temukan ikon OVO pada beranda.\r\n3.Pilih \'Kirim\' atau \'Transfer\': Pilih opsi ini untuk mengirim uang.\r\n4.Pilih Metode Pengiriman:\r\n5.Masukkan nomor telepon penerima\r\n6.Masukkan Jumlah Uang: Tentukan jumlah saldo yang ingin dikirim.\r\n7.Tambahkan Catatan (Opsional): Tambahkan pesan jika diperlukan.\r\n8.Konfirmasi dan Lanjutkan: Periksa informasi, lalu klik \"Transfer\" atau \"Kirim\".\r\n9.Masukkan PIN OVO: Masukkan PIN untuk konfirmasi keamanan.\r\n10.Selesai: Setelah PIN dimasukkan, transfer selesai dan Anda akan menerima notifikasi.\r\n11.Screenshot Bukti pembayaran untuk dikirim di form upload', 0x75706c6f6164732f4c6f676f204c696e6b20416a6121202831292e706e67),
(12, 'AstraPay', '0846454554 An.Packngo', 'E-Wallet', 'f', 0x75706c6f6164732f6c6f676f2d636f6c6f7266756c2e77656270),
(13, 'Bank Mandiri', '08252522526 An.Packngo', 'Bank', 'pojiii', 0x75706c6f6164732f746820283234292e6a706567);

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
(9, 'tom_hanks', 'tom.hanks@example.com', ''),
(11, 'brad_pitt', 'brad.pitt@example.com', 'password11'),
(13, 'george_clooney', 'george.clooney@example.com', 'password13'),
(14, 'meryl_streep', 'meryl.streep@example.com', 'password14'),
(15, 'will_smith', 'will.smith@example.com', 'password15'),
(16, 'julia_roberts', 'julia.roberts@example.com', 'password16'),
(17, 'dwayne_johnson', 'dwayne.johnson@example.com', 'password17'),
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
(51, '2257051005', 'andikapsw30@gmail.com', 'AFGUVBHNNHT'),
(52, 'amin', 'jennifer.lawrence@sexample.com', '$2y$10$YFF4EMoRfw0kCmIUkOXp2ukisjcpQeqndFTZwRoLJi/phi.MUa36y'),
(55, 'ramzi', 'ramzi123@gmail.com', '$2y$10$kNHliDuKMoOKlzyByaHxYuqId4GRCVYQSJF7Cxgeto99AAq561WYe'),
(58, 'DKAMONDSHOP', 'dkam123@gmail.com', '$2y$10$r.HFxpA9Uu4oR1fP802HU.dFHKaXhCEQcSCFyRuTg8KNniD5YjMM2'),
(59, 'dkamondshopp', 'dkam124@gmail.com', '$2y$10$fzS05H956HqOG5AqNbYTpufAONtOkBmVeXUkK70ko1S8ARP7jf8WK'),
(60, 'ANDIKAFI02112AB', 'minato828g@gmail.com', '$2y$10$FxRcCjNKtxBUz8XjL63dYee3G5cJAwFYNW0yL.hJi.U2msdEqHdZe'),
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
(253, 0x75706c6f6164732f696d61676573202833292e6a7067, 'Refunded', 196, 10, 'PACKNGO000003', '2024-05-17 20:03:39', 60, 23),
(254, 0x75706c6f6164732f6a6b743438206d65726368204d61696e204c6f676f203234303078313830302e6a7067, 'Lunas', 197, 9, 'PACKNGO000004', '2024-05-18 20:33:16', 60, 23),
(255, 0x75706c6f6164732f6c6f67696e2e6a7067, 'Lunas', 198, 10, 'PACKNGO000005', '2024-05-20 11:28:18', 51, 23),
(256, 0x75706c6f6164732f47726f757020332e737667, 'Lunas', 199, 9, 'PACKNGO000006', '2024-05-21 13:24:31', 51, 26),
(257, 0x75706c6f6164732f4a4b54343820486967682054656e73696f6e202843442b445644292e6a7067, 'Lunas', 200, 5, 'PACKNGO000007', '2024-05-24 14:00:07', 60, 29);

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketkapal`
--

CREATE TABLE `pesanantiketkapal` (
  `id_pesanantiketkapal` int(10) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_jadwaltiketkapal` int(11) DEFAULT NULL,
  `invoice_id` varchar(16) DEFAULT NULL,
  `TIMEORDER` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanantiketkapal`
--

INSERT INTO `pesanantiketkapal` (`id_pesanantiketkapal`, `bukti_bayar`, `status_pembayaran`, `id_pengguna`, `id_datapenumpang`, `id_metode`, `id_jadwaltiketkapal`, `invoice_id`, `TIMEORDER`) VALUES
(19, 0x75706c6f6164732f696d67313939302e737667, 'Belum Lunas', 51, 11, 10, 8, 'PACKNGKA0000002', '2024-05-21 13:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketkereta`
--

CREATE TABLE `pesanantiketkereta` (
  `id_pesanantiket` int(11) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_jadwaltiketkereta` int(11) DEFAULT NULL,
  `invoice_id` varchar(40) DEFAULT NULL,
  `TIMEORDER` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanantiketkereta`
--

INSERT INTO `pesanantiketkereta` (`id_pesanantiket`, `bukti_bayar`, `status_pembayaran`, `id_pengguna`, `id_datapenumpang`, `id_metode`, `id_jadwaltiketkereta`, `invoice_id`, `TIMEORDER`) VALUES
(19, 0x75706c6f6164732f576861747341707020496d61676520323032322d30382d30372061742032302e31332e34382e6a706567, 'Refunded', 60, 8, 9, 8, 'PACKNGOK0000001', '2024-05-17 20:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketpesawat`
--

CREATE TABLE `pesanantiketpesawat` (
  `id_pesanantiket` int(20) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_jadwaltiketpesawat` int(11) DEFAULT NULL,
  `invoice_id` varchar(30) DEFAULT NULL,
  `TIMEORDER` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanantiketpesawat`
--

INSERT INTO `pesanantiketpesawat` (`id_pesanantiket`, `bukti_bayar`, `status_pembayaran`, `id_pengguna`, `id_datapenumpang`, `id_metode`, `id_jadwaltiketpesawat`, `invoice_id`, `TIMEORDER`) VALUES
(10, 0x75706c6f6164732f696e646f6e657369612d323638383139335f313238302e6a7067, 'Refunded', 60, 5, 9, 22, 'PACKNGOP0000001', '2024-05-18 08:16:27'),
(12, 0x75706c6f6164732f636c61617373322e322e6a7067, 'Lunas', 51, 7, 9, 22, 'PACKNGOP0000002', '2024-05-22 13:23:40');

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
(2, 'Damri ', 'Gedung Merdeka Jln.Ahmad ', ''),
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
(11, 'Feri Indonesia', 'Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f52656374616e676c6520332e6a7067);

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
(1, 'PT Kereta Api Indonesia', 'Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f746820283235292e6a706567);

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
  ADD KEY `datapenumpangbus_ibfk_2` (`id_jadwaltiketbus`);

--
-- Indexes for table `datapenumpangkapal`
--
ALTER TABLE `datapenumpangkapal`
  ADD PRIMARY KEY (`id_datapenumpang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `datapenumpangkapal_ibfk_2` (`id_jadwaltiketkapal`);

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
  ADD KEY `datapenumpangpesawat_ibfk_2` (`id_jadwaltiketpesawat`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

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
  ADD KEY `fk_pengguna` (`id_pengguna`),
  ADD KEY `fk_jadwaltiketbus` (`id_jadwaltiketbus`),
  ADD KEY `fk_datapenumpang` (`id_datapenumpang`),
  ADD KEY `pesanantiketbus_ibfk_3` (`id_metode`);

--
-- Indexes for table `pesanantiketkapal`
--
ALTER TABLE `pesanantiketkapal`
  ADD PRIMARY KEY (`id_pesanantiketkapal`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_datapenumpang` (`id_datapenumpang`),
  ADD KEY `id_jadwaltiketkapal` (`id_jadwaltiketkapal`),
  ADD KEY `pesanantiketkapal_ibfk_3` (`id_metode`);

--
-- Indexes for table `pesanantiketkereta`
--
ALTER TABLE `pesanantiketkereta`
  ADD PRIMARY KEY (`id_pesanantiket`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_jadwaltiketkereta` (`id_jadwaltiketkereta`),
  ADD KEY `id_datapenumpang` (`id_datapenumpang`),
  ADD KEY `pesanantiketkereta_ibfk_3` (`id_metode`);

--
-- Indexes for table `pesanantiketpesawat`
--
ALTER TABLE `pesanantiketpesawat`
  ADD PRIMARY KEY (`id_pesanantiket`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_jadwaltiketpesawat` (`id_jadwaltiketpesawat`),
  ADD KEY `fk_datapenumpangpesawat` (`id_datapenumpang`),
  ADD KEY `pesanantiketpesawat_ibfk_3` (`id_metode`);

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
  MODIFY `id_datapenumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `datapenumpangkapal`
--
ALTER TABLE `datapenumpangkapal`
  MODIFY `id_datapenumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `datapenumpangkereta`
--
ALTER TABLE `datapenumpangkereta`
  MODIFY `id_datapenumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `datapenumpangpesawat`
--
ALTER TABLE `datapenumpangpesawat`
  MODIFY `id_datapenumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal_tiket_bus`
--
ALTER TABLE `jadwal_tiket_bus`
  MODIFY `id_jadwaltiketbus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jadwal_tiket_kapal`
--
ALTER TABLE `jadwal_tiket_kapal`
  MODIFY `id_jadwaltiketkapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jadwal_tiket_kereta`
--
ALTER TABLE `jadwal_tiket_kereta`
  MODIFY `id_jadwaltiketkereta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jadwal_tiket_pesawat`
--
ALTER TABLE `jadwal_tiket_pesawat`
  MODIFY `id_jadwaltiketpesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `pesanantiketbus`
--
ALTER TABLE `pesanantiketbus`
  MODIFY `id_pesanantiketbus` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `pesanantiketkapal`
--
ALTER TABLE `pesanantiketkapal`
  MODIFY `id_pesanantiketkapal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pesanantiketkereta`
--
ALTER TABLE `pesanantiketkereta`
  MODIFY `id_pesanantiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pesanantiketpesawat`
--
ALTER TABLE `pesanantiketpesawat`
  MODIFY `id_pesanantiket` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vendor_bus`
--
ALTER TABLE `vendor_bus`
  MODIFY `id_vendorbus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor_kapal`
--
ALTER TABLE `vendor_kapal`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendor_kereta`
--
ALTER TABLE `vendor_kereta`
  MODIFY `id_vendorkrta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_pesawat`
--
ALTER TABLE `vendor_pesawat`
  MODIFY `id_vendorpesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datapenumpangbus`
--
ALTER TABLE `datapenumpangbus`
  ADD CONSTRAINT `datapenumpangbus_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `datapenumpangbus_ibfk_2` FOREIGN KEY (`id_jadwaltiketbus`) REFERENCES `jadwal_tiket_bus` (`id_jadwaltiketbus`) ON DELETE CASCADE;

--
-- Constraints for table `datapenumpangkapal`
--
ALTER TABLE `datapenumpangkapal`
  ADD CONSTRAINT `datapenumpangkapal_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `datapenumpangkapal_ibfk_2` FOREIGN KEY (`id_jadwaltiketkapal`) REFERENCES `jadwal_tiket_kapal` (`id_jadwaltiketkapal`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `datapenumpangpesawat_ibfk_2` FOREIGN KEY (`id_jadwaltiketpesawat`) REFERENCES `jadwal_tiket_pesawat` (`id_jadwaltiketpesawat`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `fk_datapenumpang` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangbus` (`id_datapenumpang`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_jadwaltiketbus` FOREIGN KEY (`id_jadwaltiketbus`) REFERENCES `jadwal_tiket_bus` (`id_jadwaltiketbus`),
  ADD CONSTRAINT `fk_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketbus_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`) ON DELETE CASCADE;

--
-- Constraints for table `pesanantiketkapal`
--
ALTER TABLE `pesanantiketkapal`
  ADD CONSTRAINT `pesanantiketkapal_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketkapal_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`) ON DELETE CASCADE,
  ADD CONSTRAINT `pesanantiketkapal_ibfk_4` FOREIGN KEY (`id_jadwaltiketkapal`) REFERENCES `jadwal_tiket_kapal` (`id_jadwaltiketkapal`);

--
-- Constraints for table `pesanantiketkereta`
--
ALTER TABLE `pesanantiketkereta`
  ADD CONSTRAINT `id_datapenumpang` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangkereta` (`id_datapenumpang`),
  ADD CONSTRAINT `pesanantiketkereta_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketkereta_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`) ON DELETE CASCADE,
  ADD CONSTRAINT `pesanantiketkereta_ibfk_4` FOREIGN KEY (`id_jadwaltiketkereta`) REFERENCES `jadwal_tiket_kereta` (`id_jadwaltiketkereta`);

--
-- Constraints for table `pesanantiketpesawat`
--
ALTER TABLE `pesanantiketpesawat`
  ADD CONSTRAINT `fk_datapenumpangpesawat` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangpesawat` (`id_datapenumpang`) ON DELETE CASCADE,
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`) ON DELETE CASCADE,
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_4` FOREIGN KEY (`id_jadwaltiketpesawat`) REFERENCES `jadwal_tiket_pesawat` (`id_jadwaltiketpesawat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
