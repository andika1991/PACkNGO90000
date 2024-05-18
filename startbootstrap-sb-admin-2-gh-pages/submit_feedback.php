<?php
// Include file koneksi database
include 'koneksi.php';

// Ambil data yang dikirim melalui method POST
$nama = $_POST['nama'];
$pelayanan = $_POST['pelayanan'];
$penilaian = $_POST['penilaian'];
$kritik = $_POST['kritik'];

// Query untuk menyimpan data feedback ke dalam database
$query = "INSERT INTO feedback (nama, p1, p2, saran) VALUES (?, ?, ?, ?)";
if ($stmt = $conn->prepare($query)) {
    // Bind parameter ke query
    $stmt->bind_param("ssss", $nama, $pelayanan, $penilaian, $kritik);

    // Eksekusi query
    if ($stmt->execute()) {
        // Redirect ke halaman sukses jika penyimpanan berhasil
        header("Location: feedback_sukses.php");
    } else {
        // Redirect ke halaman error jika terjadi kesalahan
        header("Location: feedback_error.php");
    }
} else {
    // Redirect ke halaman error jika terjadi kesalahan dalam persiapan statement
    header("Location: feedback_error.php");
}

// Tutup koneksi database
$stmt->close();
$conn->close();
?>
