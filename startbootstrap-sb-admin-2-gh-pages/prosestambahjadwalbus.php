<?php

// Membuka koneksi ke database
include 'koneksi.php';

// Mendapatkan data dari form
$waktu_keberangkatan = $_POST['waktu_keberangkatan'];
$waktu_kedatangan = $_POST['waktu_kedatangan'];
$pelabuhan_keberangkatan = $_POST['terminal_keberangkatan'];
$pelabuhan_kedatangan = $_POST['terminal_kedatangan'];
$harga = $_POST['harga'];
$kategori = $_POST['kelas'];
$kapasitas_stok_tiket = $_POST['kapasitas_stok_tiket'];
$deskripsi_jadwal = $_POST['deskripsi_jadwal'];
$status_jadwal = $_POST['status_jadwal'];
$no_kendaraan=$_POST['no_kendaraan'];


if (isset($_POST['id_vendorbus'])) {
    $id_vendorbus = $_POST['id_vendorbus'];
} else {
    // Menampilkan pesan error
    echo "<script>alert('ID vendor KAPAL tidak ditemukan.'); window.location.href='tambahjadwalkapal.php';</script>";
    exit();
}


$query = "INSERT INTO jadwal_tiket_bus (waktu_keberangkatan, waktu_kedatangan, terminal_keberangkatan, 
terminal_kedatangan, harga, kelas, kapasitas_stok_tiket, deskripsi_jadwal, id_vendorbus, status_jadwal,no_kendaraan)
VALUES ('$waktu_keberangkatan', '$waktu_kedatangan', '$pelabuhan_keberangkatan', 
'$pelabuhan_kedatangan', $harga, '$kategori', $kapasitas_stok_tiket, '$deskripsi_jadwal', $id_vendorbus, '$status_jadwal','$no_kendaraan')";


// Menjalankan query
mysqli_query($conn, $query);

// Menutup koneksi ke database
mysqli_close($conn);

// Mengarahkan kembali ke halaman daftar jadwal pesawat
header("Location: jadwalbus.php");

?>