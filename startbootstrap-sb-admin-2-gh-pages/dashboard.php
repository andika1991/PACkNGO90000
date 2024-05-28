<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style>
    /* Gaya untuk tombol sidebar toggler */
.sidebar-toggler {
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 999;
    background: transparent;
    border: none;
    color: #fff;
    cursor: pointer;
}

/* Gaya untuk sidebar yang diperkecil */
#accordionSidebar.toggled {
    width: 80px;
}

#accordionSidebar.toggled .sidebar-brand-text {
    display: none;
}

#accordionSidebar.toggled .sidebar-brand-icon {
    padding: 15px 0;
}

#accordionSidebar.toggled .nav-item .nav-link {
    text-align: center;
    padding: 10px;
    width: 80px;
    white-space: nowrap;
    overflow: hidden;
}

#accordionSidebar.toggled .nav-item .nav-link span {
    display: none;
}

</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <button class="sidebar-toggler">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               <img src="PACKNGO.png" width="30px" height="50px">
                <div class="sidebar-brand-text mx-3">PACK N GO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

         

           <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJadwal" aria-expanded="true" aria-controls="collapseJadwal">
        <i class="bi bi-calendar-week"></i>
        <span>Kelola Jadwal Tiket</span>
    </a>
    <div id="collapseJadwal" class="collapse" aria-labelledby="headingJadwal" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="jadwalpesawat.php">Jadwal Pesawat</a>
            <a class="collapse-item" href="jadwalkereta.php">Jadwal Kereta</a>
            <a class="collapse-item" href="jadwalkapal.php">Jadwal Kapal</a>
            <a class="collapse-item" href="jadwalbus.php">Jadwal Bus</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePesanan" aria-expanded="true" aria-controls="collapsePesanan">
        <i class="bi bi-ticket"></i>
        <span>Kelola Pesanan Tiket</span>
    </a>
    <div id="collapsePesanan" class="collapse" aria-labelledby="headingPesanan" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="pesanantiketpesawat.php">Pesanan tiket Pesawat</a>
            <a class="collapse-item" href="pesanantiketkereta.php">Pesanan tiket Kereta</a>
            <a class="collapse-item" href="pesanantiketkapal.php">Pesanan tiket  Kapal</a>
            <a class="collapse-item" href="pesanantiketbus.php">Pesanan tiket Bus</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVendor" aria-expanded="true" aria-controls="collapseVendor">
        <i class="fas fa-fw fa-cog"></i>
        <span>Kelola Vendor</span>
    </a>
    <div id="collapseVendor" class="collapse" aria-labelledby="headingVendor" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="vendorpesawat.php">Vendor Pesawat</a>
            <a class="collapse-item" href="vendorkereta.php">Vendor Kereta</a>
            <a class="collapse-item" href="vendorkapal.php">Vendor Kapal</a>
            <a class="collapse-item" href="vendorbus.php">Vendor Bus</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePembayaran" aria-expanded="true" aria-controls="collapsePembayaran">
        <i class="bi bi-credit-card"></i>
        <span>Kelola Metode Pembayaran</span>
    </a>
    <div id="collapsePembayaran" class="collapse" aria-labelledby="headingPembayaran" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="metodepembayaran.php">Metode pembayaran</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengguna" aria-expanded="true" aria-controls="collapsePengguna">
        <i class="bi bi-people-fill"></i>
        <span>Kelola Pengguna</span>
    </a>
    <div id="collapsePengguna" class="collapse" aria-labelledby="headingPengguna" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        
            <a class="collapse-item" href="manajemenpengguna.php">Manajemen Pengguna</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFeedback" aria-expanded="true" aria-controls="collapseFeedback">
        <i class="fas fa-fw fa-cog"></i>
        <span>Feedback</span>
    </a>
    <div id="collapseFeedback" class="collapse" aria-labelledby="headingFeedback" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="feedbaackadm.php">Lihat Feedback</a>
        </div>
    </div>
</li>
</ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                
                    </div>
                    <?php
include 'koneksi.php';

// Fungsi untuk memformat angka menjadi format Rupiah
// Fungsi untuk memformat angka menjadi format Rupiah
// Fungsi untuk memformat angka menjadi format Rupiah
function formatRupiah($angka){
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

// Mengambil total penjualan tiket untuk setiap jenis transportasi pada bulan tertentu
$monthlySales = array();
for ($i = 1; $i <= 12; $i++) {
    $sqlBus = "SELECT SUM(jt.harga) AS total_penjualan
              FROM pesanantiketbus ptb
              JOIN jadwal_tiket_bus jt ON ptb.id_jadwaltiketbus = jt.id_jadwaltiketbus
              WHERE ptb.status_pembayaran = 'Lunas'
              AND MONTH(ptb.timeorder) = $i";
    $resultBus = $conn->query($sqlBus);
    $totalPenjualanBus = ($resultBus->num_rows > 0) ? $resultBus->fetch_assoc()['total_penjualan'] : 0;

    $sqlKapal = "SELECT SUM(jk.harga) AS total_penjualan
                FROM pesanantiketkapal ptk
                JOIN jadwal_tiket_kapal jk ON ptk.id_jadwaltiketkapal = jk.id_jadwaltiketkapal
                WHERE ptk.status_pembayaran = 'Lunas'
                AND MONTH(ptk.timeorder) = $i";
    $resultKapal = $conn->query($sqlKapal);
    $totalPenjualanKapal = ($resultKapal->num_rows > 0) ? $resultKapal->fetch_assoc()['total_penjualan'] : 0;

    $sqlKereta = "SELECT SUM(jk.harga) AS total_penjualan
                  FROM pesanantiketkereta ptk
                  JOIN jadwal_tiket_kereta jk ON ptk.id_jadwaltiketkereta = jk.id_jadwaltiketkereta
                  WHERE ptk.status_pembayaran = 'Lunas'
                  AND MONTH(ptk.timeorder) = $i";
    $resultKereta = $conn->query($sqlKereta);
    $totalPenjualanKereta = ($resultKereta->num_rows > 0) ? $resultKereta->fetch_assoc()['total_penjualan'] : 0;

    $sqlPesawat = "SELECT SUM(jp.harga) AS total_penjualan
                   FROM pesanantiketpesawat ptp
                   JOIN jadwal_tiket_pesawat jp ON ptp.id_jadwaltiketpesawat = jp.id_jadwaltiketpesawat
                   WHERE ptp.status_pembayaran = 'Lunas'
                   AND MONTH(ptp.timeorder) = $i";
    $resultPesawat = $conn->query($sqlPesawat);
    $totalPenjualanPesawat = ($resultPesawat->num_rows > 0) ? $resultPesawat->fetch_assoc()['total_penjualan'] : 0;

    // Total penjualan untuk bulan ini
    $monthlySales[] = $totalPenjualanBus + $totalPenjualanKapal + $totalPenjualanKereta + $totalPenjualanPesawat;
}

// Memformat total penjualan ke dalam format Rupiah
$formattedMonthlySales = array_map('formatRupiah', $monthlySales);

$totalPenjualanSemua = $totalPenjualanBus + $totalPenjualanKapal + $totalPenjualanKereta + $totalPenjualanPesawat;

// Memformat total penjualan ke dalam format Rupiah
$formattedTotalPenjualanBus = formatRupiah($totalPenjualanBus);
$formattedTotalPenjualanKapal = formatRupiah($totalPenjualanKapal);
$formattedTotalPenjualanKereta = formatRupiah($totalPenjualanKereta);
$formattedTotalPenjualanPesawat = formatRupiah($totalPenjualanPesawat);
$formattedTotalPenjualanSemua = formatRupiah($totalPenjualanSemua);
?>

<?php
include 'koneksi.php';

// Fungsi untuk memformat angka menjadi format Rupiah
function formatRupiah2($angka){
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

// Mengambil total penjualan tiket untuk setiap jenis transportasi pada bulan dan tahun tertentu
$currentMonth = date('m');
$currentYear = date('Y');
$sqlBus = "SELECT SUM(jt.harga) AS total_penjualan
          FROM pesanantiketbus ptb
          JOIN jadwal_tiket_bus jt ON ptb.id_jadwaltiketbus = jt.id_jadwaltiketbus
          WHERE ptb.status_pembayaran = 'Lunas'
          AND MONTH(ptb.timeorder) = $currentMonth
          AND YEAR(ptb.timeorder) = $currentYear";
$resultBus = $conn->query($sqlBus);
$totalPenjualanBus = ($resultBus->num_rows > 0) ? $resultBus->fetch_assoc()['total_penjualan'] : 0;

$sqlKapal = "SELECT SUM(jk.harga) AS total_penjualan
            FROM pesanantiketkapal ptk
            JOIN jadwal_tiket_kapal jk ON ptk.id_jadwaltiketkapal = jk.id_jadwaltiketkapal
            WHERE ptk.status_pembayaran = 'Lunas'
            AND MONTH(ptk.timeorder) = $currentMonth
            AND YEAR(ptk.timeorder) = $currentYear";
$resultKapal = $conn->query($sqlKapal);
$totalPenjualanKapal = ($resultKapal->num_rows > 0) ? $resultKapal->fetch_assoc()['total_penjualan'] : 0;

$sqlKereta = "SELECT SUM(jk.harga) AS total_penjualan
              FROM pesanantiketkereta ptk
              JOIN jadwal_tiket_kereta jk ON ptk.id_jadwaltiketkereta = jk.id_jadwaltiketkereta
              WHERE ptk.status_pembayaran = 'Lunas'
              AND MONTH(ptk.timeorder) = $currentMonth
              AND YEAR(ptk.timeorder) = $currentYear";
$resultKereta = $conn->query($sqlKereta);
$totalPenjualanKereta = ($resultKereta->num_rows > 0) ? $resultKereta->fetch_assoc()['total_penjualan'] : 0;

$sqlPesawat = "SELECT SUM(jp.harga) AS total_penjualan
               FROM pesanantiketpesawat ptp
               JOIN jadwal_tiket_pesawat jp ON ptp.id_jadwaltiketpesawat = jp.id_jadwaltiketpesawat
               WHERE ptp.status_pembayaran = 'Lunas'
               AND MONTH(ptp.timeorder) = $currentMonth
               AND YEAR(ptp.timeorder) = $currentYear";
$resultPesawat = $conn->query($sqlPesawat);


$totalPenjualanPesawat = ($resultPesawat->num_rows > 0) ? $resultPesawat->fetch_assoc()['total_penjualan'] : 0;

// Menghitung total keseluruhan penjualan
$totalPenjualanSemua = $totalPenjualanBus + $totalPenjualanKapal + $totalPenjualanKereta + $totalPenjualanPesawat;

// Memformat total penjualan ke dalam format Rupiah
$formattedTotalPenjualanBus = formatRupiah($totalPenjualanBus);
$formattedTotalPenjualanKapal = formatRupiah($totalPenjualanKapal);
$formattedTotalPenjualanKereta = formatRupiah($totalPenjualanKereta);
$formattedTotalPenjualanPesawat = formatRupiah($totalPenjualanPesawat);
$formattedTotalPenjualanSemua = formatRupiah($totalPenjualanSemua);

// Data penjualan bulanan untuk digunakan dalam grafik
$monthlyTotalSales = array(
    'Bus' => $totalPenjualanBus,
    'Kapal' => $totalPenjualanKapal,
    'Kereta' => $totalPenjualanKereta,
    'Pesawat' => $totalPenjualanPesawat
);
?>

<?php
// Include file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Kueri SQL untuk menghitung total pengguna
$sql = "SELECT COUNT(*) AS total_pengguna FROM pengguna";

// Eksekusi kueri
$result = $conn->query($sql);

// Inisialisasi variabel untuk menyimpan total pengguna
$totalPengguna = 0;

// Periksa apakah kueri berhasil dieksekusi
if ($result) {
    // Ambil hasil kueri
    $row = $result->fetch_assoc();
    
    // Simpan total pengguna ke dalam variabel
    $totalPengguna = $row['total_pengguna'];
} else {
    // Jika terjadi kesalahan saat menjalankan kueri
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
?>

<?php
// Include file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Kueri SQL untuk menghitung total pengguna
$sql = "SELECT COUNT(*) AS total_metopen FROM metodepembayaran";

// Eksekusi kueri
$result = $conn->query($sql);

// Inisialisasi variabel untuk menyimpan total pengguna
$total_metopen = 0;

// Periksa apakah kueri berhasil dieksekusi
if ($result) {
    // Ambil hasil kueri
    $row = $result->fetch_assoc();
    
    // Simpan total pengguna ke dalam variabel
    $total_metopen = $row['total_metopen'];
} else {
    // Jika terjadi kesalahan saat menjalankan kueri
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
?>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Penjualan Tiket  (Bulanan)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                    echo ' ' . $formattedTotalPenjualanSemua;
                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Penjualan Tiket Tahunan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                    echo ' ' . $formattedTotalPenjualanSemua;
                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengguna Aktif
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> <?php
                                    echo ' ' . $totalPengguna;
                                ?></div>
                                                </div>
                                                <div class="col">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="bi bi-people-fill fa-2x text-gray-300" ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Metode Pembayaran Aktif</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo '' .$total_metopen; ?></div>
                                        </div>
                                        <div class="col-auto">
                                         
                                            <i class="bi bi-credit-card fa-2x text-gray-300 "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                  <div class="columns">
                  <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Penjualan Tiket Bus (Bulanan)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                    echo ' ' . $formattedTotalPenjualanBus;
                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <img src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/bus_transportatin_school_bus_travel_icon_194002-d1f5-original.png" height="40px" width="40px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                  <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Penjualan Tiket Kapal (Bulanan)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                    echo ' ' . $formattedTotalPenjualanKapal;
                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <img src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/cruiseshiptransportationlogistictravel_109809-7c90-original.png" height="40px" width="40px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Penjualan Tiket Kereta (Bulanan)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                    echo ' ' . $formattedTotalPenjualanKereta;
                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <img src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/trainonrailroad_89231-6e58-original.png" height="40px" width="40px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                       
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Penjualan Tiket Pesawat (Bulanan)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                    echo ' ' . $formattedTotalPenjualanPesawat;
                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <img src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/airplaneshape_119680-6657-original.png" height="40px" width="40px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>


                
    <canvas id="monthlySalesChart" width="400" height="200" style="margin-top:-580px; margin-left:270px;width:400px; height:200px;"></canvas>
    <script>
        var ctx = document.getElementById('monthlySalesChart').getContext('2d');
        var monthlySalesData = {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: 'Grafik Total Penjualan Bulanan',
                data: <?php echo json_encode(array_values($monthlySales)); ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        var monthlySalesChart = new Chart(ctx, {
            type: 'bar',
            data: monthlySalesData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value, index, values) {
                                return 'Rp ' + value;
                            }
                        }
                    }
                }
            }
        });
    </script>

</div>



            
                   

                    
                       

                

                        <div class="col-lg-6 mb-4">

                     

                           

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Pack N Go 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarToggler = document.querySelector(".sidebar-toggler");
            const sidebar = document.querySelector("#accordionSidebar");
    
            sidebarToggler.addEventListener("click", function() {
                sidebar.classList.toggle("toggled");
            });
        });
    </script>
    
</body>

</html>