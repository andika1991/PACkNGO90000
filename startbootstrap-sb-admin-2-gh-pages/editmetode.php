<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel Admin</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
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

            <!-- Heading -->
            <div class="sidebar-heading">
                Userr
            </div>

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
               
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                      
               
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
        
                <div class="container-fluid">
<?php
// Include your database connection file
include 'koneksi.php';

// Check if ID is set
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch data based on ID
    $query = "SELECT * FROM metodepembayaran WHERE id_metode = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Assign fetched data to variables
        $nama_metode = $row['nama_metode'];
        $nomor_metode = $row['Nomor_metode'];
        $kategori_metode = $row['kategori_metode'];
        $deskripsi_metode = $row['Deksripsi_metode'];
        $logoMetode = $row['logo_metode'];
    } else {
        // Handle if no data found
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    // Handle if ID is not set
    echo "ID tidak ditemukan.";
    exit();
}
?>

<h1 class="h3 mb-2 text-gray-800">Edit Metode Pembayaran</h1>
<p class="mb-4">Isi formulir di bawah ini untuk mengedit metode pembayaran</p>

<!-- Form Edit Metode Pembayaran -->
<form method="POST" action="proses_edit_metode_pembayaran.php" enctype="multipart/form-data">
    <input type="hidden" name="id_metode" value="<?php echo $id; ?>">
    <div class="form-group">
        <label for="nama_metode">Nama Metode:</label>
        <input type="text" class="form-control" id="nama_metode" name="nama_metode" value="<?php echo $nama_metode; ?>" required>
    </div>
    <div class="form-group">
        <label for="nomor_metode">Nomor Metode:</label>
        <input type="text" class="form-control" id="nomor_metode" name="nomor_metode" value="<?php echo isset($nomor_metode) ? $nomor_metode : ''; ?>" required>
    </div>
    <div class="form-group">
        <label for="kategori_metode">Kategori Metode:</label>
        <select class="form-control" id="kategori_metode" name="kategori_metode" required>
            <option value="Bank" <?php if($kategori_metode == 'Bank') echo 'selected'; ?>>Bank</option>
            <option value="E-Wallet" <?php if($kategori_metode == 'E-Wallet') echo 'selected'; ?>>E-Wallet</option>
            <option value="Kartu Kredit" <?php if($kategori_metode == 'Kartu Kredit') echo 'selected'; ?>>Kartu Kredit</option>
        </select>
    </div>
    <div class="form-group">
        <label for="deskripsi_metode">Deskripsi Metode:</label>
        <textarea class="form-control" id="deskripsi_metode" name="deskripsi_metode" rows="8" cols="50" required><?php echo isset($deskripsi_metode) ? $deskripsi_metode : ''; ?></textarea>
    </div>
    <div class="form-group">
        <label for="logo_metode">Logo Metode:</label>
        <img src="<?php echo $logoMetode; ?>" alt="Logo Metode" style="max-width: 100px; max-height: 100px;"><br>
        <input type="file" class="form-control-file" id="logo_metode" name="logo_metode">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>


            
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