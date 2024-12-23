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
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Vendor penyedia Tiket Pesawat</h1>
                      

                    </div>

              
                

                    <!-- Main Content -->
             <!-- Table Pengguna -->
   <!-- Tambah Data Button -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
    Tambah Data
</button>

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Data Vendor Pesawat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Tambah Data Vendor Kapal -->
                <form method="POST" action="tambahvendorpswt.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_vendor">Nama Vendor:</label>
                        <input type="text" class="form-control" id="nama_vendor" name="nama_vendor" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_vendor">Alamat Vendor:</label>
                        <input type="text" class="form-control" id="alamat_vendor" name="alamat_vendor" required>
                    </div>
                    <div class="form-group">
                        <label for="logo_vendor">Logo Vendor:</label>
                        <input type="file" class="form-control-file" id="logo_vendor" name="logo_vendor" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>


        <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Vendor</th>
            <th>Alamat</th>
            <th>Logo</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';

        $query = "SELECT * FROM vendor_pesawat";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id_vendorpesawat"] . "</td>";
                echo "<td>" . $row["nama_vendor"] . "</td>";
                echo "<td>" . $row["alamat_vendor"] . "</td>";
                echo "<td><img src='" . $row["logo_vendor"] . "' alt='Logo Vendor' style='max-width: 100px; max-height: 100px;'></td>"; // Menampilkan gambar dengan tag img
                echo "<td>
                <button class='btn btn-primary btn-sm edit-btn' data-id='" . $row["id_vendorpesawat"] . "'  data-nama='" . $row["nama_vendor"] . "'  data-alamat='" . $row["alamat_vendor"] . "'  data-logo='" . $row["logo_vendor"] . "'  data-toggle='modal'  data-target='#editModal'>Edit</button>
                <button class='btn btn-danger btn-sm delete-btn' data-id='" . $row["id_vendorpesawat"] . "' data-toggle='modal' data-target='#deleteModal'>Delete</button>
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
<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data Vendor Pesawat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <input type="hidden" id="editId" name="edit-id">
                    <div class="form-group">
                        <label for="editNamaVendor">Nama Vendor:</label>
                        <input type="text" class="form-control" id="editNamaVendor" name="edit-nama-vendor">
                    </div>
                    <div class="form-group">
                        <label for="editAlamatVendor">Alamat Vendor:</label>
                        <input type="text" class="form-control" id="editAlamatVendor" name="edit-alamat-vendor">
                    </div>
                    <div class="form-group">
    <label for="editNewLogoVendor">Logo Vendor Baru:</label>
    <input type="file" class="form-control" id="editNewLogoVendor" name="edit-new-logo-vendor">
</div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    // Fill modal fields with user data when the edit button is clicked
    $('.edit-btn').click(function() {
        var id = $(this).data('id');
        var nama = $(this).data('nama');
        var alamat = $(this).data('alamat');
        $('#editId').val(id);
        $('#editNamaVendor').val(nama);
        $('#editAlamatVendor').val(alamat);
    });

    // Handle form submission for editing user data
    $('#editForm').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        // Ambil nilai input file baru jika ada
        var newLogo = $('#editNewLogoVendor')[0].files[0];
        if (newLogo) {
            formData.append('edit-new-logo-vendor', newLogo);
        }
        $.ajax({
            type: "POST",
            url: "editvendorpswt.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Close modal and reload page
                $('#editModal').modal('hide');
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});

</script>



<!-- Modal Hapus Vendor -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Data Vendor Pesawat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data vendor ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a id="deleteVendorBtn" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript untuk mengatur atribut href dari tombol hapus
    $(document).ready(function() {
        $('.delete-btn').click(function() {
            var vendorId = $(this).data('id');
            $('#deleteVendorBtn').attr('href', 'hapusvendorpswt.php?id=' + vendorId);
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

</body>
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
</html>