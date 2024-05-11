<?php
// Mulai sesi
session_start();

// Sertakan file koneksi
include 'koneksi.php';



// Periksa apakah permintaan adalah metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah email dan password telah dikirim melalui formulir
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        // Ambil nilai email dan password dari formulir, dan sanitasi input
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = $_POST["password"]; // Jangan gunakan mysqli_real_escape_string untuk password hash

        // Query dengan parameterisasi untuk mencegah SQL injection
        $stmt = $conn->prepare("SELECT * FROM pengguna WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Periksa apakah query mengembalikan hasil
        if ($result->num_rows == 1) {
            // Ambil data pengguna dari hasil query
            $row = $result->fetch_assoc();

            // Verifikasi kata sandi dengan hash yang disimpan di database
            if (password_verify($password, $row['password'])) {
                // Jika verifikasi berhasil, simpan informasi pengguna dalam sesi
                $_SESSION['email'] = $email;
                $_SESSION['username_pengguna'] = $row['username_pengguna'];

                // Redirect ke halaman utama atau halaman lain yang sesuai
                header("Location: homeakun.php#bus-form");
                exit; // Penting untuk menghentikan eksekusi skrip setelah redirect
            } else {
                // Jika verifikasi gagal, tampilkan pesan kesalahan
                echo "Password salah. Silakan coba lagi.";
            }
        } else {
            // Jika email tidak ditemukan, tampilkan pesan kesalahan
            echo "Email tidak ditemukan. Silakan coba lagi.";
        }

        // Tutup statement
        $stmt->close();
    } else {
        // Jika email dan password tidak dikirim, tampilkan pesan kesalahan
        echo "Email dan password harus diisi.";
    }
} else {
    echo "Metode tidak didukung.";
}

// Tutup koneksi database
$conn->close();
?>

