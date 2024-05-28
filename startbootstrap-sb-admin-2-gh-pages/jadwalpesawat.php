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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Jadwal Tiket Pesawat</h1>
                    </div>

              
                

                    <!-- Main Content -->
             <!-- Table Pengguna -->
   <!-- Tambah Data Button -->
   <a href="tambahjadwalpswt.php" class="btn btn-primary">Tambah Data</a>
<!-- Modal Tambah Data -->

<h3>Jadwal Hari ini</h3>
<div class="table-responsive">
        <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Waktu Keberangkatan</th>
            <th>Waktu Kedatangan</th>
            <th>Bandara Keberangkatan</th>
            <th>Bandara Tujuan</th>
            <th>Harga tiket</th>
            <th>Kelas</th>
            <th>Stok Tiket</th>
            <th>Status</th>
            <th>No Penerbangan</th>
            <th>Maskapai Penyedia</th>
            <th>Aksi</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $updateQuery = "UPDATE jadwal_tiket_pesawat SET status_jadwal = 'On Going' WHERE waktu_keberangkatan <= NOW()";
        mysqli_query($conn, $updateQuery);
        
        // Update status tiket menjadi "Arrived" jika waktu kedatangan telah tiba
        $updateQuery = "UPDATE jadwal_tiket_pesawat SET status_jadwal = 'Arrived' WHERE waktu_kedatangan <= NOW()";
        mysqli_query($conn, $updateQuery);
        $query = "SELECT 
        jtp.id_jadwaltiketpesawat,
        jtp.waktu_keberangkatan,
        jtp.waktu_kedatangan,
        jtp.bandara_keberangkatan,
        jtp.bandara_kedatangan,
        jtp.harga,
        jtp.kelas,
        jtp.kapasitas_stok_tiket,
        jtp.status_jadwal,
        jtp.nomor_penerbangan,
        jtp.deskripsi_jadwal,
        vp.nama_vendor 
    FROM 
        jadwal_tiket_pesawat jtp
    JOIN 
        vendor_pesawat vp 
    ON 
        jtp.id_vendorpesawat = vp.id_vendorpesawat
    WHERE 
        DATE(jtp.waktu_keberangkatan) = CURDATE();
    ";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id_jadwaltiketpesawat"] . "</td>";
                echo "<td>" . $row["waktu_keberangkatan"] . "</td>";
                echo "<td>" . $row["waktu_kedatangan"] . "</td>";
                echo "<td>" . $row["bandara_keberangkatan"] . "</td>";
                echo "<td>" . $row["bandara_kedatangan"] . "</td>";
                echo "<td>" . $row["harga"] . "</td>";
                echo "<td>" . $row["kelas"] . "</td>";
                echo "<td>" . $row["kapasitas_stok_tiket"] . "</td>";
                echo "<td>" . $row["status_jadwal"] . "</td>";
                echo "<td>" . $row["nomor_penerbangan"] . "</td>";
                echo "<td>" . $row["nama_vendor"] . "</td>";
                echo "<td>
               <a href='editjadwalpswt.php?id=" . $row["id_jadwaltiketpesawat"] . "' class='btn btn-primary btn-sm edit-btn'>Edit</a>
                <button class='btn btn-danger btn-sm delete-btn' data-id_jadwaltiketpesawat='" . $row["id_jadwaltiketpesawat"] . "' data-toggle='modal' data-target='#deleteModal'>Delete</button>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>0 results</td></tr>";
        }
        ?>
    </tbody>
</table>
</div>
<h3>Jadwal Tiket Pesawat All</h3>
<div class="table-responsive">
        <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Waktu Keberangkatan</th>
            <th>Waktu Kedatangan</th>
            <th>Bandara Keberangkatan</th>
            <th>Bandara Tujuan</th>
            <th>Harga tiket</th>
            <th>Kelas</th>
            <th>Stok Tiket</th>
            <th>Status</th>
            <th>No Penerbangan</th>
            <th>Maskapai Penyedia</th>
            <th>Aksi</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';

        $query = "SELECT id_jadwaltiketpesawat,waktu_keberangkatan,waktu_kedatangan,bandara_keberangkatan,deskripsi_jadwal,bandara_kedatangan,harga,kelas ,kapasitas_stok_tiket,status_jadwal,nomor_penerbangan,vendor_pesawat.nama_vendor FROM `jadwal_tiket_pesawat`,vendor_pesawat;";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id_jadwaltiketpesawat"] . "</td>";
                echo "<td>" . $row["waktu_keberangkatan"] . "</td>";
                echo "<td>" . $row["waktu_kedatangan"] . "</td>";
                echo "<td>" . $row["bandara_keberangkatan"] . "</td>";
                echo "<td>" . $row["bandara_kedatangan"] . "</td>";
                echo "<td>" . $row["harga"] . "</td>";
                echo "<td>" . $row["kelas"] . "</td>";
                echo "<td>" . $row["kapasitas_stok_tiket"] . "</td>";
                echo "<td>" . $row["status_jadwal"] . "</td>";
                echo "<td>" . $row["nomor_penerbangan"] . "</td>";
                echo "<td>" . $row["nama_vendor"] . "</td>";
                echo "<td>
               
                <a href='editjadwalpswt.php?id=" . $row["id_jadwaltiketpesawat"] . "' class='btn btn-primary btn-sm edit-btn'>Edit</a>
                <button class='btn btn-danger btn-sm delete-btn' data-id_jadwaltiketpesawat='" . $row["id_jadwaltiketpesawat"] . "' data-toggle='modal' data-target='#deleteModal'>Delete</button>

                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>0 results</td></tr>";
        }
        ?>
    </tbody>
</table>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Modal Hapus Jadwal Tiket Pesawat -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Data Jadwal Tiket Pesawat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data jadwal tiket pesawat ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a id="deleteBtn" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript untuk mengatur atribut href dari tombol hapus
    $(document).ready(function() {
        $('.delete-btn').click(function() {
            var jadwalId = $(this).data('id_jadwaltiketpesawat');
            $('#deleteBtn').attr('href', 'hapustktpswt.php?id_jadwaltiketpesawat=' + jadwalId);
        });
    });
</script>



                 

                         
             


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