<?php
// Include file koneksi.php
include 'koneksi.php';

// Tangkap id vendor yang akan dihapus
$id = $_GET['id'];

// Nonaktifkan sementara foreign key checks
$query_disable_fk = "SET FOREIGN_KEY_CHECKS=0";
mysqli_query($conn, $query_disable_fk);

// Lakukan query untuk mendapatkan path logo vendor yang akan dihapus
$query_select = "SELECT logo_vendor FROM vendor_bus WHERE id_vendorbus = $id";
$result_select = mysqli_query($conn, $query_select);

// Periksa apakah query SELECT berhasil dieksekusi
if ($result_select) {
    $row = mysqli_fetch_assoc($result_select);
    $logoPath = $row['logo_vendor'];

    // Hapus file logo dari direktori penyimpanan
    if (unlink($logoPath)) {
        // Jika berhasil menghapus file, lanjutkan dengan menghapus data vendor dari database
        $query_delete = "DELETE FROM vendor_bus WHERE id_vendorbus = $id";
        $result_delete = mysqli_query($conn, $query_delete);

        // Periksa apakah query DELETE berhasil dieksekusi
        if ($result_delete) {
            // Redirect kembali ke halaman utama jika berhasil
            header("Location: vendorbus.php");
        } else {
            // Tampilkan pesan error jika query DELETE gagal dieksekusi
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Tampilkan pesan error jika gagal menghapus file
        echo "Error: Failed to delete image file";
    }
} else {
    // Tampilkan pesan error jika query SELECT gagal dieksekusi
    echo "Error: " . mysqli_error($conn);
}

// Aktifkan kembali foreign key checks
$query_enable_fk = "SET FOREIGN_KEY_CHECKS=1";
mysqli_query($conn, $query_enable_fk);

// Tutup koneksi database
mysqli_close($conn);
?>
