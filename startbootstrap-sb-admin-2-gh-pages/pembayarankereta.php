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
         /* Styling untuk navbar */
         body {
            font-family: Poppins;
            background-color: #E7E9ED;
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
        .square {
            width: 514px; /* Lebar persegi */
            height: 283px; /* Tinggi persegi */
            border-radius: 20px; /* Sudut melengkung */
            background-color: #0071CC; /* Warna persegi */
            display: inline-block; /* Pastikan bentuk persegi */
            margin: 50px; /* Ruang antar-persegi */
        }

        /* Atur carousel item */
        .carousel-item {
            text-align: center; /* Menyelaraskan konten ke tengah */
            padding: 20px; /* Memberikan ruang dalam */
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

.form-steps {
    display: flex;
    justify-content: center;
    margin-top: 1rem; /* Atur margin atas sesuai kebutuhan */
}

.form-steps__item {
    flex: 1;
    text-align: center;
}

.form-steps__item-content {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.form-steps__item-icon {
    width: 36px; 
    height: 36px; 
    line-height: 36px; 
    border-radius: 50%;
    background-color: #f8f9fa;
    color: #495057; 
    font-size: 1rem; 
}

.form-steps__item-line {
    flex: 1;
    width: 2px; 
    background-color: #f8f9fa; 
}

.form-steps__item-text {
    font-size: 0.875rem; 
    margin-top: 0.5rem; 
}

.form-steps__item--completed .form-steps__item-icon {
    background-color: #007bff; 
    color: #fff; 
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
    background-color: #f8f9fa; /* Warna latar belakang header */
    color: #333; /* Warna teks header */
}

td {
    background-color: #ffffff; /* Warna latar belakang sel data */
    color: #555; /* Warna teks sel data */
}

/* Hover effect pada baris tabel */
tr:hover {
    background-color: #f1f1f1; /* Warna latar belakang saat hover */
}

/* Tombol Beli */
.button-beli {
    background-color: #007bff;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

.button-beli:hover {
    background-color: #0056b3;
}







h1 {
    font-style: normal;
    text-align: center;
    color:black;
}

html, body {
    margin: 0;
    padding: 0;
}

.page-header {
    padding: 1.5rem;
}
.bus {
            width: 800px;
            background-color: #e0e0e0;
            border-radius: 20px;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            grid-gap: 10px;
        }
        .seat {
            background-color: #ccc;
            border: 1px solid #999;
            border-radius: 5px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
        }
        .seat.selected {
            background-color: #007bff;
            color: #fff;
        }
        .driver {
            background-color: #333;
            color: #fff;
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
    background-color: #f8f9fa; /* Warna latar belakang header */
    color: #333; /* Warna teks header */
}

td {
    background-color: #ffffff; /* Warna latar belakang sel data */
    color: #555; /* Warna teks sel data */
}

/* Hover effect pada baris tabel */
tr:hover {
    background-color: #f1f1f1; /* Warna latar belakang saat hover */
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


/* Gaya untuk formulir */
form {
    margin-top: 20px;
    max-width: 400px;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ced4da;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #007bff;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}
nav ul li a.login {
    background-color: #D9D9D9; 
    color: #0C2E53; 
    border-radius: 5px; 
    padding: 10px;
}
nav ul li a.login:hover,
nav ul li a.register:hover {
    background-color: #2980b9; 
}
input[type="submit"]:hover {
    background-color: #0056b3;
}
/* CSS untuk progress bar */
.form-steps__item.step-2 .form-steps__item-icon {
    background-color: #007bff; /* Warna biru untuk langkah pertama */
    color: #fff; /* Warna teks putih */
}
.line {
    width: 95%;
    border-bottom: 5px solid #007bff; 
    margin-top: 10px; 
    margin: 0 auto;
    margin-bottom: 10px; 
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

.contaifoner {
    background-color: #FFFFFF; /* Warna latar belakang putih */
    width: 600px; /* Lebar container */
    height: 400px; /* Tinggi container */
    padding: 20px; /* Padding untuk mengatur ukuran shape */
    display: inline-block; /* Membuat container sesuai dengan ukuran teks di dalamnya */
}
.custom-button {
    font-size: 24px;
    background-color: #007bff;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    position: absolute;
    bottom: 900px; /* Sesuaikan dengan jarak dari bawah */
    right: 20px; /* Sesuaikan dengan jarak dari kanan */
}

main{
    padding-bottom:140px;
}
.RincianBiaya {
    width: 646px;
    height: 67px;
    text-align: center;
    color: #010101;
    font-size: 32px;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    line-height: 32px; /* Sesuaikan dengan kebutuhan */
    word-wrap: break-word;
    position: absolute;
    top: 800px;
    right: 0;
}
.Tiket {
    text-align: center;
    color: black;
    font-size: 24px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    line-height: 22px;
    word-wrap: break-word;
    position: absolute;
    top: 880px;
    right: 500px;
}
.Biayaadm {
    text-align: center;
    color: black;
    font-size: 24px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    line-height: 22px;
    word-wrap: break-word;
    position: absolute;
    top: 920px;
    right: 350px;
}

.Biayabagasi {
    text-align: center;
    color: black;
    font-size: 24px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    line-height: 22px;
    word-wrap: break-word;
    position: absolute;
    top: 960px;
    right: 418px;
}

.Biayalayanan {
    text-align: center;
    color: black;
    font-size: 24px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    line-height: 22px;
    word-wrap: break-word;
    position: absolute;
    top: 1000px;
    right: 398px;
}
.Line2 {
    width: 550px; 
    height: 0; 
    border: 1px black solid; 
    position: absolute;
    top: 1050px;
    left: 780px;
}


.Totalpembayaran {
    text-align: center;
    color: black;
    font-size: 24px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    line-height: 22px;
    word-wrap: break-word;
    position: absolute;
    top: 1080px;
    right: 350px;
}
#Rincian {
    background-color: #FFFFFF; /* Warna latar belakang putih */
    width: 590px; /* Lebar container */
    height: 400px; /* Tinggi container */
    margin-left:140px;
    padding: 20px; /* Padding untuk mengatur ukuran shape */
    display: inline-block; /* Membuat container sesuai dengan ukuran teks di dalamnya */
}

.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
    justify-content: center;
    align-items: center;
}

.popup-content {
    background-color: #FFFFFF;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

.popup button {
    margin: 10px;
}

.invoice-id {
    position: absolute; /* Mengatur posisi absolut */
    top: 292px; /* Jarak dari bagian atas */
    right: 20px; /* Jarak dari bagian kanan */
 
    color: black; /* Warna teks */
    padding: 10px; /* Padding */
    border-radius: 5px; /* Sudut melengkung */
    font-size: 30px; /* Ukuran teks */
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
                <li><a href="index.php#kereta-form">Home</a></li>
                <li><a href="kirimfeedback.php">Kirim Feedback</a></li>
                <li><a href="tentangkami.php">Tentang Kami</a></li>
                <li><a href="faq.php">FAQ</a></li>

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


<img src="img/gambar23.svg"><br><br>
<div class="keberangkatan">
    <div class="DaftarKeberangkatan">PEMBAYARAN</div> 
  </div><br> 

  <?php
// Include file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Periksa apakah parameter id tiket ada dalam URL
if(isset($_GET['id_jadwaltiketkereta'])) {
    // Ambil ID tiket dari URL
    $id_tiket = $_GET['id_jadwaltiketkereta'];

    // Buat query untuk mengambil detail tiket berdasarkan ID
    $query = "SELECT j.*, v.nama_vendor, v.logo_vendor, v.alamat_vendor
    FROM jadwal_tiket_kereta AS j
    JOIN vendor_kereta AS v ON j.id_vendorkrta = v.id_vendorkrta
    WHERE j.id_jadwaltiketkereta = '$id_tiket'
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
       echo "<p style='font-size: 16px; color: #333;margin-left:50px; font-weight: 600; margin-bottom: 15px;margin-top:-10px;'>Alamat : " . $row['alamat_vendor'] . "</p>";
       
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




echo "<p style='position: absolute; top: 0; right: 0; font-size: 48px; color: #0071CC; font-family: Poppins; font-weight: 500;  word-wrap: break-word; margin-top: 450px; margin-right:600px'> " . $jam_keberangkatan . "</p>";
echo "<div style='font-size: 23px; color: #0C2F54; position: absolute; top: 0; right: 0; margin-right: 110px; margin-top: 480px;'>" . $row['stasiun_keberangkatan'] . "</div>";
 
echo "<div style='position: absolute; top: 0; right: 0; margin-right: 350px; margin-top: 540px;' ><img src='img/arrowdown.svg'></div>";

echo "<div style='width: auto; height: auto; color: black; font-size: 18px; font-family: Poppins; font-weight: 700; line-height: 22px; word-wrap: break-word; position: absolute; top: 625px; right: 340px;'>Kedatangan</div>";
echo "<p style='position: absolute; top: 0; right: 0; font-size: 48px; color: #0071CC; font-family: Poppins; font-weight: 500;  word-wrap: break-word; margin-top: 640px; margin-right:600px'> " . $jam_kedatangan . "</p>";
echo "<div style='font-size: 23px; color: #0C2F54; position: absolute; top: 0; right: 0; margin-right: 110px; margin-top: 670px;'>" . $row['stasiun_kedatangan'] . "</div>";

          

        }
    } else {
        echo "Tiket tidak ditemukan.";
    }

    // Tutup koneksi database

} else {
    echo "ID Tiket tidak ditemukan.";
}






echo "<div class='line' ></div>";
echo "<p style='text-align:center; font-weight:bold; color:#0071CC; font-size:20px;'>Data Penumpang</p>";




// Atur zona waktu PHP ke Indonesia
date_default_timezone_set('Asia/Jakarta');

// Fungsi untuk menghasilkan invoice_id
$invoice_id = generateInvoiceID($conn);

// Periksa apakah data-datanya ada di URL
if(isset($_GET['id_pengguna']) && isset($_GET['id_jadwaltiketkereta']) && isset($_GET['harga']) && isset($_GET['id_datapenumpang']) && isset($_GET['id_metode'])) {
    // Ambil data dari URL
    $id_pengguna = $_GET['id_pengguna'];
    $id_jadwaltiketkereta = $_GET['id_jadwaltiketkereta'];
    $harga = $_GET['harga'];
    $id_datapenumpang = $_GET['id_datapenumpang'];
    $id_metode = $_GET['id_metode'];

    // Data untuk dimasukkan
    $timeorder = date('Y-m-d H:i:s'); // Waktu saat ini

    // Query untuk memasukkan data
    $query_insert = "INSERT INTO pesanantiketkereta (bukti_bayar, status_pembayaran, id_datapenumpang, id_metode, invoice_id, TIMEORDER, id_pengguna, id_jadwaltiketkereta)
                     VALUES (NULL, 'Belum Bayar', $id_datapenumpang, $id_metode, '$invoice_id', '$timeorder', $id_pengguna, $id_jadwaltiketkereta)";

    // Eksekusi query INSERT
    if(mysqli_query($conn, $query_insert)) {
  

        // Query untuk menampilkan data yang diminta
        $query_select = "SELECT pa.invoice_id, pa.TIMEORDER, jtb.waktu_keberangkatan, jtb.waktu_kedatangan, jtb.stasiun_keberangkatan, jtb.stasiun_kedatangan, jtb.kelas, jtb.status_jadwal, vb.nama_vendor, dpb.jenis_kelamin, dpb.nama_lengkap, dpb.no_hp, dpb.email, dpb.nik, mp.nama_metode, mp.nomor_metode, mp.logo_metode, mp.Deksripsi_metode FROM pesanantiketkereta AS pa JOIN jadwal_tiket_kereta AS jtb ON pa.id_jadwaltiketkereta = jtb.id_jadwaltiketkereta JOIN vendor_kereta AS vb ON jtb.id_vendorkrta = vb.id_vendorkrta JOIN datapenumpangkereta AS dpb ON pa.id_datapenumpang = dpb.id_datapenumpang JOIN metodepembayaran AS mp ON pa.id_metode = mp.id_metode WHERE pa.invoice_id = '$invoice_id'";

        // Eksekusi query SELECT
        $result = mysqli_query($conn, $query_select);

        // Tampilkan hasil query SELECT
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
          
                echo '<div class="invoice-id">' . "Invoice ID: " . $row["invoice_id"] . '</div>';

                echo "<div style='position: absolute; top: 320px; right: 1100px;'>";
                echo "<span style='color: #8E9A9D; font-size: 32px; font-family: Poppins; font-weight: 400; line-height: 22px; word-wrap: break-word;'>IDR </span>";
                echo "<span style='color: #DC3545; font-size: 32px; font-family: Poppins; font-weight: 700; line-height: 22px; word-wrap: break-word;'>" . $harga_formatted  . "</span>";
                echo "</div>";
                
                echo "<div style='color:black; margin-left:40px;margin-top:-20px;'>";
                echo "Nama Lengkap: " . $row["nama_lengkap"] . "<br>";
                echo "NIK: " . $row["nik"] . "<br>";
                echo "Jenis Kelamin: " . $row["jenis_kelamin"] . "<br>";
                echo "No HP: " . $row["no_hp"] . "<br>";
                echo "Email: " . $row["email"] . "<br>";
             
                echo "</div>";

                echo "<div class='line' ></div>";
echo "<p style='text-align:center; font-weight:bold; color:#0071CC; font-size:20px;'>Silahkan Lakukan Pembayaran</p>";
echo "<p style='color:#0071CC;margin-left:40px;margin-top:-20px;font-weight:medium;' >Metode Pembayaran : " . $row["nama_metode"] . "</p><br>";
echo "<img src='" . $row["logo_metode"] . "' alt='Logo Metode' style='width: 150px; height: 100px; margin-top:-40px;margin-left:40px;'><br>";
echo "<p style='color:#0071CC; margin-left: 40px; margin-top: -3px; font-weight: medium; position: relative;'>Nomor Pembayaran:</p>";
echo "<p style='font-weight: bold; background-color: #0071CC; font-size: 22px; color: #000000; margin-left:40px; margin-top: -45px; display: inline-block;'>" . $row["nomor_metode"] . "</p><br>";
echo "<p style='color:#0071CC; margin-left: 40px; margin-top: -10px; font-weight: medium; position: relative;'>Tata Cara Pembayaran:</p>";
echo "<div style='color:black; margin-left:40px; margin-top:-20px;'>" . nl2br($row["Deksripsi_metode"]) . "</div><br>";

                echo "<div style='position: absolute; top: 0;color:black; right: 0; margin-right: 100px; margin-top: 1030px;'>Waktu Order: " . $row["TIMEORDER"] . "</div><br>";
       
              
                
            }
        } else {
            echo "Tidak ada data yang ditemukan.";
        }
    } else {
        echo "Error: " . $query_insert . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Data tidak lengkap. Silakan kembali ke halaman sebelumnya dan pastikan semua data terisi.";
}



// Fungsi untuk menghasilkan invoice_id
function generateInvoiceID($conn) {
    // Lakukan pengambilan data terakhir
    $query_last_invoice = "SELECT MAX(CAST(SUBSTRING(invoice_id, 9) AS UNSIGNED)) AS last_id FROM pesanantiketkereta";
    $result_last_invoice = mysqli_query($conn, $query_last_invoice);

    // Periksa jika query berhasil dieksekusi
    if (!$result_last_invoice) {
        // Jika tidak, tampilkan pesan kesalahan
        echo "Error: " . mysqli_error($conn);
        return false;
    }

    // Ambil nilai terakhir
    $row_last_invoice = mysqli_fetch_assoc($result_last_invoice);
    $last_id = $row_last_invoice['last_id'];

    // Jika tidak ada nilai terakhir, mulai dari 1
    if($last_id === null) {
        $last_id = 1;
    } else {
        $last_id += 1;
    }

    // Format nomor urut menjadi string dengan panjang 7 karakter
    $formatted_id = str_pad($last_id, 7, '0', STR_PAD_LEFT);

    // Kembalikan nilai invoice_id
    return 'PACKNGOK' . $formatted_id;
}
?>



?>

    <h2>Upload Bukti Pembayaran</h2>
    <button onclick="showUploadForm()">Upload Bukti Pembayaran</button>

    <div id="uploadForm" style="display: none;">
        <form action="uploadkereta.php" method="POST" enctype="multipart/form-data">
            <label for="bukti_pembayaran">Pilih File Bukti Pembayaran:</label>
            <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*">
            <input type="hidden" name="invoice_id" value="<?php echo $invoice_id; ?>">
            <input type="hidden" name="id_datapenumpang" value="<?php echo $id_datapenumpang; ?>">
            <input type="hidden" name="id_jadwaltiketbus" value="<?php echo $id_jadwaltiketbus; ?>">
            <input type="hidden" name="id_metode" value="<?php echo $id_metode; ?>">
            <input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna; ?>">
            <br><br>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>

    <script>
        function showUploadForm() {
            var uploadForm = document.getElementById("uploadForm");
            uploadForm.style.display = "block";
        }
    </script>

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

       
            <p class="copyright-text text-1">Copyright <i class="far fa-copyright"></i> 2024 <a href="tentangkami.php">PACK N GO</a> All Rights Reserved.</p><span class="copyright-text text-1"><em>~ powered by </em>PACK N GO ~</span>	</div>
    </div>
</div>
</footer>
</body>
</html>
