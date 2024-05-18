<?php
include 'koneksi.php';

// Periksa apakah ID tiket sudah diterima melalui URL
if (isset($_GET['id'])) {
    $id_tiket = $_GET['id'];

    // Update status tiket menjadi "Refunded"
    $query = "UPDATE pesanantiketkereta SET status_pembayaran = 'Refunded' WHERE id_pesanantiket = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $id_tiket);
        $stmt->execute();
        $stmt->close();
        
        // Redirect kembali ke halaman daftar tiket dengan pesan sukses
        header("Location: riwayatpesanan.php?message=success");
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    // Redirect jika tidak ada ID tiket yang diterima
    header("Location: riwayatpesanan.php");
}
?>