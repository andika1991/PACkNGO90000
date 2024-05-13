<?php
// Sertakan file koneksi
include 'session.php';

// Periksa apakah pengguna telah login
if (isset($_SESSION['email'])) {
    // Ambil data dari form
    $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $usia = mysqli_real_escape_string($conn, $_POST['nik']);
    $jenis_kelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
    $no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $selected_seat = mysqli_real_escape_string($conn, $_POST['selected_seat']);
    $jadwal_tiketbus = mysqli_real_escape_string($conn, $_POST['id_jadwaltiketbus']);

    // Ambil ID pengguna dari sesi
    $id_pengguna = $_SESSION['id_pengguna'];

    // Query untuk menyimpan data penumpang ke dalam database
    $query = "INSERT INTO `datapenumpangbus`(`jenis_kelamin`, `nama_lengkap`, `no_hp`, `email`, `nik`, `kursi`, `id_pengguna`, `id_jadwaltiketbus`)
    VALUES ('$jenis_kelamin', '$nama_lengkap', '$no_hp', '$email', '$usia', '$selected_seat', '$id_pengguna', '$jadwal_tiketbus')";

    // Eksekusi query INSERT INTO
    if (mysqli_query($conn, $query)) {
        // Ambil ID data penumpang yang sesuai dari database
        $id_data_penumpang = mysqli_insert_id($conn);
        
        // Redirect ke halaman pilihan pembayaran dengan membawa informasi yang diperlukan
        header("Location: pilihpembayaran.php?id_pengguna=$id_pengguna&id_jadwaltiketbus=$jadwal_tiketbus&id_datapenumpang=$id_data_penumpang");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Error: Pengguna belum login.";
}
?>
