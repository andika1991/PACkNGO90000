<?php

// Membuka koneksi ke database
include 'koneksi.php';

// Mendapatkan data dari form
$waktu_keberangkatan = $_POST['waktu_keberangkatan'];
$waktu_kedatangan = $_POST['waktu_kedatangan'];
$bandara_keberangkatan = $_POST['bandara_keberangkatan'];
$bandara_kedatangan = $_POST['bandara_kedatangan'];
$harga = $_POST['harga'];
$kelas = $_POST['kelas'];
$kapasitas_stok_tiket = $_POST['kapasitas_stok_tiket'];
$deskripsi_jadwal = $_POST['deskripsi_jadwal'];
$status_jadwal = $_POST['status_jadwal'];
$nomor_penerbangan=$_POST['nomor_penerbangan'];

// Memeriksa apakah ID vendor pesawat ada
if (isset($_POST['id_vendorpesawat'])) {
    $id_vendorpesawat = $_POST['id_vendorpesawat'];
} else {
    // Menampilkan pesan error
    echo "<script>alert('ID vendor pesawat tidak ditemukan.'); window.location.href='tambahjadwalpesawat.php';</script>";
    exit();
}

// Memasukkan data ke dalam database
// Memasukkan data ke dalam database
$query = "INSERT INTO jadwal_tiket_pesawat (waktu_keberangkatan, waktu_kedatangan, bandara_keberangkatan, 
bandara_kedatangan, harga, kelas, kapasitas_stok_tiket, deskripsi_jadwal, id_vendorpesawat, status_jadwal,nomor_penerbangan)
VALUES ('$waktu_keberangkatan', '$waktu_kedatangan', '$bandara_keberangkatan', 
'$bandara_kedatangan', $harga, '$kelas', $kapasitas_stok_tiket, '$deskripsi_jadwal', $id_vendorpesawat, '$status_jadwal','$nomor_penerbangan')";


// Menjalankan query
mysqli_query($conn, $query);

// Menutup koneksi ke database
mysqli_close($conn);

// Mengarahkan kembali ke halaman daftar jadwal pesawat
header("Location: jadwalpesawat.php");

?>
