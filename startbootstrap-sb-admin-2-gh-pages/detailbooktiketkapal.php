<?php

include 'session.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/769968477.css"> 
    <link rel="stylesheet" href="css/875398515.css">
    <link rel="stylesheet" href="css/1882545488.css">
    <link rel="stylesheet" href="css/boostrap.min.css"> 
    <link rel="stylesheet" href="css/datepicker3.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/sb-admin-2.min.css"> 
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/toastr.min.css">
    <title>PACK N GO</title>
    <style>
   
   body {
            font-family: Poppins;
            background-color: #F6F7F8;
        }
        header {
            background-color: #FFFFFF;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    position: sticky; /* Buat header menjadi sticky */
    top: 0;           /* Header tetap berada di bagian atas saat digulir */
    z-index: 1000;    /* Pastikan header berada di atas konten lainnya */
        }

        .logo img {
            height: 80px;
            width: 250px;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            color: #0C2E53;
            font-size: 18px;
            transition: color 0.3s;
            padding: 0 10px;
        }

        nav a:hover {
            color: #107ACF;
            text-decoration: none;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
        }

        .content img {
            max-width: 40%; /* Membuat gambar lebih besar */
            height: auto;
            margin-right: 20px; /* Beri jarak antara gambar dan formulir */
        }

        .form-container {
            width: 50%; /* Menambah lebar formulir */
            padding: 20px;
           
            margin-top: 0px; /* Tambah jarak antara kontainer dan heading */
        }

        .form-container h2 {
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 80px; /* Memberikan jarak antara h2 dan form */
        }

        .form-container form {
            display: flex;
            flex-direction: column;
            gap: 30px; /* Jarak antar elemen dalam form */
        }

        .form-container .form-group {
            display: flex;
            align-items: center; /* Posisikan elemen dalam satu baris */
            gap: 10px; /* Jarak antar elemen dalam form */
        }

        .form-container label {
            font-weight: bold;
            font-size: 18px; /* Membuat teks label lebih besar */
            width: 100px; /* Memberikan lebar tetap untuk label */
        }

        .form-container input {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px; /* Membuat teks input lebih besar */
            flex: 1; /* Memperpanjang field input */
        }

        .form-container button {
    padding: 15px;
    background-color: #107ACF;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: block;
    width: 200px; 
    margin: 0 auto;
}

nav ul li a.login {
    background-color: #D9D9D9; 
    color: #0C2E53; 
    border-radius: 5px; 
    padding: 10px;
}


nav ul li a.register {
    background-color: #D9D9D9; 
    color: #0C2E53; 
    border-radius: 5px;
    padding: 10px;
}

/* Hover effect untuk tautan "Login" dan "Daftar" */
nav ul li a.login:hover,
nav ul li a.register:hover {
    background-color: #2980b9; /* Warna lebih gelap untuk "Login" saat di-hover */
}

/* Hover effect untuk "Daftar" */
nav ul li a.register:hover {
    background-color: #c0392b; /* Warna lebih gelap untuk "Daftar" saat di-hover */
}
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
            }

            .content img {
                max-width: 70%; /* Menyesuaikan ukuran gambar */
            }

            .form-container {
                width: 100%; /* Formulir memenuhi lebar layar */
            }

            .form-container .form-group {
                flex-direction: column;
                align-items: stretch; /* Berubah ke tata letak vertikal */
            }

            .form-container label {
                width: auto; /* Tidak ada batasan lebar */
            }
        }

        .text {
            color: #0071CC; /* Warna Merah */
        }

        ul {
    padding: 0; /* Menghilangkan padding default */
    margin: 0;  /* Menghilangkan margin default */
}

li {
    list-style: none; /* Menghilangkan bullet */
}

a {
    text-decoration: none; /* Hilangkan garis bawah */
    color: #333; /* Warna teks */
}

.icon {
    vertical-align: middle; /* Menyelaraskan ikon dengan teks */
    margin-right: 5px; /* Memberikan sedikit ruang antara ikon dan teks */
    width: 16px; /* Ukuran ikon lebih kecil */
    height: 16px; /* Ukuran ikon lebih kecil */
}

/* Styling untuk tabel */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan */
}

th, td {
    border: 1px solid #e0e0e0;
    text-align: left;
    padding: 12px; /* Sesuaikan padding untuk memperbaiki tata letak */
    font-family: Arial, sans-serif; /* Font yang mudah dibaca */
}

th {
    background-color: #f8f9fa; 
    color: #333; 
}

td {
    background-color: #ffffff; 
    color: #555; 
}


tr:hover {
    background-color: #f1f1f1; 
}

nav ul li a.login:hover,
nav ul li a.register:hover {
    background-color: #2980b9; 
}
/* Tombol Beli */
.button-beli {
    background-color: #007bff;
    font-weight: bold;
    font-size:20px;
    color: #ffffff;
    padding: 8px 8px;
    border: none;
    margin-left:1000px;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block; /* Menjadikan tombol sebagai elemen inline */
}

.button-beli:hover {
    background-color: #0056b3;
    text-decoration: none;
}

nav ul li a.login {
    background-color: #D9D9D9; 
    color: #0C2E53; 
    border-radius: 5px; 
    padding: 10px;
}

.keberangkatan {
    display: flex;
    justify-content: center;
    background-color: #0071CC;
    padding: 20px;
    border-radius: 8px; 
    max-width: 1296px; 
    margin: 0 auto; 
}

.DaftarKeberangkatan {
    color: #DEE3E4;
    margin-left:30px;
    font-size: 32px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
}


    </style>
</head>
<body>
<header>
<div class="logo">
            <img src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/PACKNGO1-77e7-original.png" alt="PACK N GO Logo">
        </div>
        <nav>
            <ul>
                <li><a href="homeakun.php">Home</a></li>
                <li><a href="kirimfeedback.php">Kirim Feedback</a></li>
                <li><a href="tentangkami.php">Tentang Kami</a></li>
                <li><a href="faq.html">FAQ</a></li>

                <?php
                // Periksa apakah pengguna sudah login
                if (isset($_SESSION['username_pengguna'])) {
                    // Jika sudah login, tampilkan nama pengguna dan opsi logout
                    $username = $_SESSION['username_pengguna'];
                    echo "<li><a href='akun.php' class='login'><img src='img/Group.jpg' alt='User Icon'> $username</a></li>";
    
                } else {
                    // Jika belum login, tampilkan opsi login
                    echo "<li><a href='loginuser.html' class='login'><i class='fas fa-lock'></i> Login</a></li>";
                }
                ?>
            </ul>
        </nav>
</header>
<img src="img/gbg6.svg"> <br> <br> <br>

<div class="keberangkatan">
    <div class="DaftarKeberangkatan">Detail Tiket Jadwal Keberangkatan</div> 
            </div>
<main>
<?php
// Include file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Periksa apakah parameter id tiket ada dalam URL
if(isset($_GET['id'])) {
    // Ambil ID tiket dari URL
    $id_tiket = $_GET['id'];

    // Buat query untuk mengambil detail tiket berdasarkan ID
    $query = "SELECT j.*, v.nama_vendor, v.logo_vendor, v.alamat_vendor
    FROM jadwal_tiket_kapal AS j
    JOIN vendor_kapal AS v ON j.id_vendor = v.id_vendor
    WHERE j.id_jadwaltiketkapal = '$id_tiket'
    ";
    
    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dieksekusi
    if(mysqli_num_rows($result) > 0) {
        // Tampilkan detail tiket
        while($row = mysqli_fetch_assoc($result)) {
            // Tampilkan detail tiket sesuai kebutuhan
       ;
       echo "<div class='StatusTiketTersedia' style='color: #0071CC; font-size: 24px; font-family: Poppins; font-weight: 500; line-height: 21.60px; word-wrap: break-word; margin-left:60px;margin-top:20px;'>Status Tiket: " . $row['status_jadwal'] . "</div>";
       echo "<div class='Maskapai' style='width: 99px; height: 22px; color: black; font-size: 18px; font-family: Poppins; font-weight: 700; line-height: 22px; word-wrap: break-word; margin-left:80px;'><p>Penyedia</p></div>";

       echo "<img style='width: 92px; height: 78px; margin-left:80px; margin-top:20px;' src='" . $row['logo_vendor'] . "' alt='Logo Vendor'><br>";
       echo "<p style='font-size: 18px; color: #333;  margin-left:50px;font-weight: 600; margin-bottom: 5px;'>Nama Penyedia: " . $row['nama_vendor'] . "</p>";
       echo "<p style='font-size: 16px; color: #333;margin-left:50px; font-weight: 600; margin-bottom: 15px;margin-top:-10px;'>Alamat Penyedia: " . $row['alamat_vendor'] . "</p>";
       
            echo "<div style='display: flex; align-items: center;'>";
echo "<img src='img/uang.svg' style='width:70px; margin-left: 60px;'>";
$harga_formatted = number_format($row['harga'], 0, ',', '.');
$tanggal_keberangkatan_indonesia = strftime("%A, %d %B %Y", strtotime($row['waktu_keberangkatan']));

echo "<div class='Idr30000' style='width: 215px; height: 42px; margin-left: 40px; margin-bottom: 20px;'>"; 
echo "<span style='color: #8E9A9D; font-size: 32px; font-family: Poppins; font-weight: 400; line-height: 22px; word-wrap: break-word;'>IDR </span>";
echo "<span style='color: #DC3545; font-size: 32px; font-family: Poppins; font-weight: 700; line-height: 22px; word-wrap: break-word;'>" . $harga_formatted  . "</span>";
echo "</div>";
echo "</div>";
echo "<div style='font-size: 24px; color: #DC3545; margin-left: 40px; margin-top: -30px;'>Class: " . $row['kelas'] . "</div>"; 

echo "<div style='font-size: 24px; color: #0071CC; margin-left: 40px; margin-top: ;'> Stok Tiket: " . $row['kapasitas_stok_tiket'] . "</div>"; 
            
$jam_keberangkatan = date("H:i", strtotime($row['waktu_keberangkatan']));
$jam_kedatangan = date("H:i", strtotime($row['waktu_kedatangan']));
echo "<div style='width: auto; height: auto; color: black; font-size: 18px; font-family: Poppins; font-weight: 700; line-height: 22px; word-wrap: break-word; position: absolute; top: 400px; right: 300px;'>" . $tanggal_keberangkatan_indonesia . "</div>";
echo "<div style='width: auto; height: auto; color: black; font-size: 18px; font-family: Poppins; font-weight: 700; line-height: 22px; word-wrap: break-word; position: absolute; top: 435px; right: 320px;'>Keberangkatan</div>";




echo "<p style='position: absolute; top: 0; right: 0; font-size: 48px; color: #0071CC; font-family: Poppins; font-weight: 500;  word-wrap: break-word; margin-top: 450px; margin-right:345px'> " . $jam_keberangkatan . "</p>";
echo "<div style='font-size: 23px; color: #0C2F54; position: absolute; top: 0; right: 0; margin-right: 80px; margin-top: 510px;'>" . $row['pelabuhan_keberangkatan'] . "</div>";
 
echo "<div style='position: absolute; top: 0; right: 0; margin-right: 350px; margin-top: 540px;' ><img src='img/arrowdown.svg'></div>";

echo "<div style='width: auto; height: auto; color: black; font-size: 18px; font-family: Poppins; font-weight: 700; line-height: 22px; word-wrap: break-word; position: absolute; top: 625px; right: 340px;'>Kedatangan</div>";
echo "<p style='position: absolute; top: 0; right: 0; font-size: 48px; color: #0071CC; font-family: Poppins; font-weight: 500;  word-wrap: break-word; margin-top: 640px; margin-right:345px'> " . $jam_kedatangan . "</p>";
echo "<div style='font-size: 23px; color: #0C2F54; position: absolute; top: 0; right: 0; margin-right: 100px; margin-top: 700px;'>" . $row['pelabuhan_kedatangan'] . "</div>";

          
echo "<div style='background-color: #007bff; padding: 10px; border-radius: 5px; border-radius: 8px; max-width: 1296px; margin: 0 auto; '>";
echo "<p style='  display: flex;justify-content: center; margin-bottom: 10px; color: #fff;  font-size: 32px;font-weight: 700;'>Informasi Tambahan</p>";
echo "<p style='color: #fff;'>" . $row['deskripsi_jadwal'] . "</p>";
echo "</div>";

echo "<p style='  display: flex;justify-content: center; margin-bottom: 10px; color: #0C2F54;  font-size: 32px;font-weight: 700;'>Fasilitas</p>";

echo "<div style='display: flex; flex-direction: row; align-items: center;'>";
echo "<img src='img/secure.svg' style=' margin-right: 20px; margin-left:40px;'>";
echo "<img src='img/refund.svg' style=' margin-right: 20px;margin-left:40px;'>";
echo "<img src='img/nyapu.svg' style=' margin-right: 20px;margin-left:100px;'>";
echo "<img src='img/selonjor.svg' style=' margin-right: 20px;margin-left:100px;'>";
echo "<img src='img/fast.svg' style='margin-left:40px;'>";
echo "</div>";

echo "<div style='display: flex; flex-direction: row; align-items: center; color:#0C2F54;'>";
echo "<div style='margin-right: 10px; text-align:center; margin-left:60px;'>Tiket 100% Aman dan Legal</div>";
echo "<div style='margin-right: 30px;text-align:center; margin-left:90px;'>Bisa Batalkan Tiket<br> Minimal H-3, FULL REFFUND 100%</div>";
echo "<div style='margin-right: 10px;text-align:center;margin-left:40px;'>Kebersihan dan Kenyamanan<br>menjadi prioritas layanan</div>";
echo "<div style='margin-right: 10px;text-align:center;margin-left:40px;'>Tersedia Tempat Istirahat Full AC</div>";
echo "<div style='text-align:center;'>Proses Pelayanan Baik dan Cepat</div>";
echo "</div>";


            echo "<a href='isidatakapal.php?id=" . $row['id_jadwaltiketkapal'] . "' class='button-beli' ><img src='img/isidata.svg'>Lanjut Pengisian Data</a>";
            // Tampilkan detail lainnya...
        }
    } else {
        echo "Tiket tidak ditemukan.";
    }

    // Tutup koneksi database
    mysqli_close($conn);
} else {
    echo "ID Tiket tidak ditemukan.";
}
?>


</main>



<footer id="footer" class="mt-0">
    <section class="section bg-white shadow-md pt-4 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon text-primary"> <img src="img/Icon (7).png"> </div>
                        <h4 class="text">Pencarian Tiket Lengkap</h4>
                        <p>Mencari dan membandingkan harga dan promo tiket pesawat, pelni, kereta, dan hotel lengkap.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon text-primary"> <img src="img/Vector (1).png"> </div>
                        <h4 class="text">Terjamin Keamanan</h4>
                        <p>Data pribadi dan pesanan Anda terjamin keamanannya di server kami (HTTPS).</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon text-primary"> <img src="img/Vector (2).png"> </div>
                        <h4 class="text">Harga Sudah Termasuk Pajak</h4>
                        <p>Harga yang ditampilkan sudah termasuk pajak, Iuran Wajib Jasa Raharja, & fuel surcharge.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="featured-box text-center">
                        <div class="featured-box-icon text-primary"> <img src="img/Icon (6).png"> </div>
                        <h4 class="text">Issued Otomatis</h4>
                        <p>Otomatis memproses tiket dan
                            bisa langsung mendownload tiket.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-4">
        <div class="row g-4 d-flex justify-content-between">
            <div class="col-md-4">
                <div class="d-flex justify-content-center justify-content-md-start">
                    <h1 class="text-3 d-block mb-2">PACK N GO</h1>
                </div>
                <span class="text-1 text-muted">PACK N GO menyajikan informasi terkini untuk perjalanan wisata Anda, lengkap dengan daftar harga tiket pesawat, kereta, pelni dan hotel murah.</span>
                <div class="d-flex mt-3">
                    <div class="p-2" style="border-top: 1px solid #ced4da;">
                        <i class="bi bi-building"></i>
                    </div>
                    <div class="p-2">
                        <p class="text">Jln.Sumantri Brodjonegoro Unila</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-2">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="p-2">
                        <p class="text">081256689025</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-2">
                        <i class="bi bi-envelope-paper-fill"></i>
                    </div>
                    <div class="p-2">
                        <a class="text" href="/cdn-cgi/l/email-protection#8bfffeece2eae5ffe4b3cbece6eae2e7a5e8e4e6"><span class="__cf_email__" data-cfemail="c7b3b2a0aea6a9b3a8ff87a0aaa6aeabe9a4a8aa">packngo8@gmail.com</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-evenly justify-content-md-around">
                <div>
                    <h1 class="text-3 d-block mb-2">Layanan Bantuan</h1>
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="" target="_blank">
                                <img src="img/🦆 icon _headset one_.png" alt="Customer Service" class="icon"> Customer Service
                            </a>
                        </li>
                    </ul>
                    
                </div>
                <div>
                    <h1 class="text-3 d-block mb-2">Web Check-In</h1>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="https://www.lionair.co.id/kelola-pemesanan/web-check-in" target="_blank">Lion Air</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.batikair.com/en/Checkin" target="_blank">Batik Air</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://checkin.batikair.com/dx/IWCI/#/check-in/start?locale=en-US" target="_blank">Wings Air</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://book.citilink.co.id/SearchWebCheckin.aspx" target="_blank">Citilink</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.airasia.com/check-in/en/gb" target="_blank">Air Asia</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://checkin.si.amadeus.net/1ASIHSSCWEBGA/sscwga/checkin?ln=en" target="_blank">Garuda Indonesia</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://webcheckin.sriwijayaair.co.id/webcheckin/" target="_blank">Sriwijaya</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-4">
                <h1 class="text-3 d-block mb-2">Partner Pembayaran</h1>
                <ul class="payments-types my-3 d-flex justify-content-between justify-content-md-start">
                    <li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;" data-bs-toggle="tooltip" src="https://faiztravel.co.id/asset/images/bank/bca.png" alt="BCA" title="" data-bs-original-title="BCA" aria-label="BCA" /></div></a></li><li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;" data-bs-toggle="tooltip" src="https://faiztravel.co.id/asset/images/bank/bri.png" alt="BRI" title="" data-bs-original-title="BRI" aria-label="BRI" /></div></a></li><li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;" data-bs-toggle="tooltip" src="https://faiztravel.co.id/asset/images/bank/bni.png" alt="BNI" title="" data-bs-original-title="BNI" aria-label="BNI" /></div></a></li><li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;" data-bs-toggle="tooltip" src="https://faiztravel.co.id/asset/images/bank/mandiri.png" alt="MANDIRI" title="" data-bs-original-title="MANDIRI" aria-label="MANDIRI" /></div></a></li><li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;" data-bs-toggle="tooltip" src="https://faiztravel.co.id/asset/images/bank/permata.png" alt="PERMATA" title="" data-bs-original-title="PERMATA" aria-label="PERMATA" /></div></a></li><li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;" data-bs-toggle="tooltip" src="https://faiztravel.co.id/asset/images/bank/cimb-niaga.png" alt="CIMB_NIAGA" title="" data-bs-original-title="CIMB_NIAGA" aria-label="CIMB_NIAGA" /></div></a></li><li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;" data-bs-toggle="tooltip" src="https://faiztravel.co.id/asset/images/bank/bsi.png" alt="BSI" title="" data-bs-original-title="BSI" aria-label="BSI" /></div></a></li><li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;" data-bs-toggle="tooltip" src="https://faiztravel.co.id/asset/images/bank/keb-hana-indonesia.png" alt="KEB_HANA_INDONESIA" title="" data-bs-original-title="KEB_HANA_INDONESIA" aria-label="KEB_HANA_INDONESIA" /></div></a></li><li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;" data-bs-toggle="tooltip" src="https://faiztravel.co.id/asset/images/bank/maybank.png" alt="MAYBANK" title="" data-bs-original-title="MAYBANK" aria-label="MAYBANK" /></div></a></li><li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;" data-bs-toggle="tooltip" src="https://faiztravel.co.id/asset/images/bank/danamon.png" alt="DANAMON" title="" data-bs-original-title="DANAMON" aria-label="DANAMON" /></div></a></li>
                    <li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;height: 30px;" data-bs-toggle="tooltip" src="img/GOPAY.jpeg" alt="GOPAY" title="" data-bs-original-title="GOPAY" aria-label="GOPAY" /></div></a></li>
                    <li>
                        <a href="javascript:;" style="cursor: auto;"><div class="featured-box-icon text-primary border border-primary rounded p-2">
                            <img 
                              style="width: 70px; height: 30px; object-fit: contain;"
                              data-bs-toggle="tooltip"
                              src="img/Dana (1).png" 
                              alt="DANA" 
                              title=""
                              data-bs-original-title="DANA"
                              aria-label="DANA" 
                            />
                          </div>
                        </a>
                      </li>
                      <li><a href="javascript:;" style="cursor:auto"><div class="featured-box-icon text-primary border border-primary rounded p-2"> <img style="width: 70px;height: 30px;" data-bs-toggle="tooltip" src="img/th (20).jpeg" alt="GOPAY" title="" data-bs-original-title="GOPAY" aria-label="GOPAY" /></div></a></li>
                      
               
               
                </ul>
                <h1 class="text-3 d-block mb-2">Jam Operasional</h1>
                <div class="d-flex my-2 d-block">
                    <div class="p-1">
                        Senin-Sabtu
                    </div>
                    <div class="p-1">
                        <p class="m-0 text-primary">: <span ="text-muted">8:00 - 21:00 WIB</p>
                    </div>
                </div>
                <div class="d-flex my-2 ">
                    <div class="p-1">
                        Minggu / Hari Libur
                    </div>
                    <div class="p-1">
                        <p class="m-0 text-primary"> : <span ="text-muted">8:00 - 16:00 WIB</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="footer-copyright mt-2 pt-2">

       
            <p class="copyright-text text-1">Copyright <i class="far fa-copyright"></i> 2024 <a href="tentangkami.html">PACK N GO</a> All Rights Reserved.</p><span class="copyright-text text-1"><em>~ powered by </em>PACK N GO ~</span>	</div>
    </div>
</div>
</footer>

</body>
</html>

