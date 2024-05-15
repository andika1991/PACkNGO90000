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
            position: relative; /* Mengatur konteks posisi untuk elemen di dalamnya */
            padding-bottom: 40px;
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

        html, body {
            margin: 0;
            padding: 0;
        }

        .tiketorderborder {
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }

        .gambar-container {
            text-align: center;
            margin: 0 20px;
            cursor: pointer;
            display: inline-block;
        }

        .gambar-caption {
            margin-top: 10px;
            font-size: 18px;
        }



/* Dasar penataan formulir pencarian */
.search-form {
    display: none; /* Sembunyikan formulir secara default */
    background-color: white;

    padding: 20px;
    border: 1px solid #D5D3D3;
    border-radius: 4px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
    transition: opacity 0.3s ease; /* Transisi untuk penampilan */
    opacity: 0; /* Membuat transisi yang halus */
    visibility: hidden; /* Menyembunyikan secara visual */
    margin-bottom: 20px; /* Jarak di bawah formulir */
      /* Menentukan batas lebar dan mengatur margin */
      max-width: 1200px; /* Membatasi lebar maksimal */
    margin: 0 auto; /* Memusatkan secara horizontal */
}

.search-form:target {
    display: block; /* Tampilkan saat ditargetkan */
    opacity: 1; /* Buat terlihat */
    visibility: visible; /* Juga buat terlihat */
}

.search-form .form-group {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 0;
}

.search-form label {
    font-size: 16px;
    font-weight: bold;
    color: #535B61;
}


.search-form select, .search-form input {
    padding: 10px;
    border: 1px solid #D5D3D3;
    border-radius: 4px;
    font-size: 14px;
    flex: 1;
}

.search-form button {
    background-color: #0071CC;
    color: white;
    padding: 10px 20px;
    border-radius: 4px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.search-form button:hover {
    background-color: #005999;
}

/* Penataan responsif untuk layar lebih kecil */
@media (max-width: 768px) {
    .search-form {
        padding: 15px;
    }

    .search-form .form-group {
        flex-direction: column;
        align-items: stretch;
    }
}

/* Pastikan label tampil sebagai blok untuk menempatkan input di bawahnya */
label {
    display: block; /* Mengubah label menjadi elemen blok */
    font-size: 16px; /* Ukuran teks label */
    font-weight: bold; /* Teks label tebal */
    color: #535B61; /* Warna teks label */
    margin-bottom: 5px; /* Jarak antara label dan input */
}

/* Atur input untuk berada di bawah label */
input {
    width: 100%; /* Memastikan input memenuhi lebar yang diinginkan */
    padding: 10px; /* Padding dalam input */
    border: 1px solid #D5D3D3; /* Garis batas */
    border-radius: 4px; /* Sudut melengkung */
}


/* Mengatur panjang field dengan lebar tetap */
.form-control {
    width: 300px; /* Atur lebar tetap untuk select */
    box-sizing: border-box; /* Memastikan padding dan border dihitung dalam lebar total */
    padding: 10px; /* Memberikan padding */
    border-radius: 4px; /* Membuat sudut melengkung */
    
}

/* Mengatur panjang field dalam persentase relatif ke kontainer induknya */
.form-control-relative {
    width: 50%; /* Menggunakan lebar relatif 50% */
    box-sizing: border-box; /* Memastikan padding dan border dihitung dalam lebar total */
    padding: 10px; /* Memberikan padding */
    border-radius: 4px; /* Membuat sudut melengkung */
}



/* CSS untuk submenu */
.submenu {
    display: none;
    position: absolute;
    z-index: 1;
}

.profile-menu:hover .submenu {
    display: block;
}

/* CSS untuk tampilan submenu */
.profile-menu {
    position: relative;
}

.profile-menu a {
    color: #333;
    text-decoration: none;
}

.profile-menu .submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 160px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 1;
}

.profile-menu .submenu li {
    padding: 10px;
}

.profile-menu .submenu li a {
    color: #333;
    display: block;
    padding: 8px 12px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.profile-menu .submenu li a:hover {
    background-color: #f4f4f4;
}

.imgal {
    margin-left: 70px; /* Menggeser gambar 10px ke kanan */
    height:30px;
    
}


/* Form group sebagai container untuk menempatkan elemen di sebelahnya */
.form-group {
    display: flex; /* Susun elemen dalam satu baris */
    gap: 20px; /* Jarak antara elemen */
    align-items: center; /* Menjaga keselarasan vertikal */
}



/* Atur input dan select untuk keseragaman */
.form-control {
    padding: 10px; /* Tambahkan padding */
    border: 1px solid #ccc; /* Tambahkan border */
    border-radius: 4px; /* Tambahkan sudut melengkung */
    font-size: 14px; /* Ukuran teks */
    flex: 1; /* Pastikan elemen mengisi ruang */
}

/* Responsif untuk layar lebih kecil */
@media (max-width: 768px) {
    .form-group {
        flex-direction: column; /* Ubah ke tata letak vertikal */
        align-items: stretch; /* Pastikan elemen memenuhi lebar */
    }
}

.romu{
    background-image: url('img/background.svg'); 
}
.form-horizontal {
    display: flex; /* Menggunakan flexbox */
    flex-direction: row; /* Menyusun elemen secara horizontal */
    gap: 20px; /* Ruang antara elemen */
    align-items: flex-start; /* Selaraskan di bagian atas */
}

.form-vertical {
    display: flex; /* Menggunakan flexbox */
    flex-direction: column; /* Menyusun elemen secara vertikal */
    gap: 10px; /* Ruang antara elemen */
}

label {
            margin-bottom: 5px; /* Memberikan jarak antara label dan elemen select */
        }

        /* Gaya untuk elemen select */
        select {
            padding: 5px; /* Memberikan sedikit padding */
            border: 1px solid #ccc; /* Memberikan batas yang jelas */
            border-radius: 4px; /* Memberikan tepi melengkung */
            width: 100%; /* Memastikan select menyesuaikan lebar */
        }

/* Kontainer formulir dengan tata letak vertikal */
.form-container {
    display: flex; /* Menggunakan flexbox */
    flex-direction: column; /* Tata letak vertikal */
    justify-content: flex-start; /* Tetap di atas jika tidak ada elemen lain */
    padding: 20px; /* Ruang dalam */
    background-color: #f9f9f9; /* Warna latar belakang */
    border: 1px solid #ccc; /* Batas kontainer */
    border-radius: 5px; /* Tepi melengkung */
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15); /* Bayangan */
    margin-bottom: 20px; /* Memberikan jarak dari elemen lain di bawah */
}

/* Gaya untuk tombol */
.submit-button {
 
  
    width: 900px; /* adjust the width to your liking */
  height: 40px; /* adjust the height to your liking */
 
  font-size: 16px; /* increase the font size to make the text more prominent */
    background: #0071CC; /* Warna latar */
    color: white; /* Warna teks putih */
    border: none; /* Menghilangkan batas */
    border-radius: 5px; /* Tepi melengkung */
    text-align: center; /* Menyelaraskan teks ke tengah */
    cursor: pointer; /* Kursor tangan saat hover */

    align-self: flex-end; /* Memastikan tombol di ujung kanan jika dalam flexbox */



}

.submit-button:hover {
    background: #0056b3; /* Warna saat hover */
}

/* Atur input dan select untuk tata letak vertikal */
.form-group {
    display: flex; /* Menggunakan flexbox */
    flex-direction: column; /* Tata letak vertikal */
    gap: 20px; /* Jarak antar-elemen dalam grup */
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Group 1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/gb21.jpg"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="romu"> 
    <br>
<h2 style="text-align:center;">Booking Tiket <span class="text-primary border rounded bg-white"><b>MURAH</b></span> & Dijamin Cepat<span class="text-primary border rounded bg-white"></span></h2>
<div class="tiketorderborder">
    <div class="gambar-container">
        <a href="#kereta-form">
            <img src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/trainonrailroad_89231-6e58-original.png" height="40px" width="40px">
            <div class="gambar-caption">Tiket Kereta</div>
        </a>
    </div>
    
    <div class="gambar-container">
        <a href="#pesawat-form">
            <img src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/airplaneshape_119680-6657-original.png" height="40px" width="40px">
            <div class="gambar-caption">Tiket Pesawat</div>
        </a>
    </div>
    
    <div class="gambar-container">
        <a href="#bus-form">
            <img src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/bus_transportatin_school_bus_travel_icon_194002-d1f5-original.png" height="40px" width="40px">
            <div class="gambar-caption">Tiket Bus</div>
        </a>
    </div>
    
    <div class="gambar-container">
        <a href="#kapal-form">
            <img src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/cruiseshiptransportationlogistictravel_109809-7c90-original.png" height="40px" width="40px">
            <div class="gambar-caption">Tiket Kapal</div>
        </a>
    </div>
</div>











<div class="search-form" id="kereta-form">
    <form action="carikereta.php" method="POST">
        <label for="stasiun_keberangkatan">Stasiun Keberangkatan:</label>
    <select class="form-control" id="stasiun_keberangkatan" name="stasiun_keberangkatan" required>
        <!-- Pilihan stasiun keberangkatan -->
       
        <option value="Stasiun Gambir (GMR) - Jakarta">Stasiun Gambir (GMR) - Jakarta</option>
        <option value="Stasiun Pasar Senen (PSE) - Jakarta">Stasiun Pasar Senen (PSE) - Jakarta</option>
        <option value="Stasiun Bandung (BD) - Bandung">Stasiun Bandung (BD) - Bandung</option>
        <option value="Stasiun Surabaya Gubeng (SGU) - Surabaya">Stasiun Surabaya Gubeng (SGU) - Surabaya</option>
        <option value="Stasiun Semarang Tawang (SMT) - Semarang">Stasiun Semarang Tawang (SMT) - Semarang</option>
        <option value="Stasiun Yogyakarta Tugu (YK) - Yogyakarta">Stasiun Yogyakarta Tugu (YK) - Yogyakarta</option>
        <option value="Stasiun Malang (ML) - Malang">Stasiun Malang (ML) - Malang</option>
        <option value="Stasiun Solo Balapan (SLO) - Solo">Stasiun Solo Balapan (SLO) - Solo</option>
        <option value="Stasiun Medan (MDN) - Medan">Stasiun Medan (MDN) - Medan</option>
        <option value="Stasiun Palembang (PLB) - Palembang">Stasiun Palembang (PLB) - Palembang</option>
        <option value="Stasiun Cirebon (CN) - Cirebon">Stasiun Cirebon (CN) - Cirebon</option>
        <option value="Stasiun Surakarta (SR) - Surakarta">Stasiun Surakarta (SR) - Surakarta</option>
        <option value="Stasiun Pekalongan (PKG) - Pekalongan">Stasiun Pekalongan (PKG) - Pekalongan</option>
        <option value="Stasiun Jember (JBB) - Jember">Stasiun Jember (JBB) - Jember</option>
        <option value="Stasiun Kediri (KDI) - Kediri">Stasiun Kediri (KDI) - Kediri</option>
        <option value="Stasiun Probolinggo (PB) - Probolinggo">Stasiun Probolinggo (PB) - Probolinggo</option>
        <option value="Stasiun Madiun (MI) - Madiun">Stasiun Madiun (MI) - Madiun</option>
        <option value="Stasiun Kutoarjo (KTA) - Kutoarjo">Stasiun Kutoarjo (KTA) - Kutoarjo</option>
        <option value="Stasiun Tasikmalaya (TSM) - Tasikmalaya">Stasiun Tasikmalaya (TSM) - Tasikmalaya</option>
        <option value="Stasiun Purwokerto (PWT) - Purwokerto">Stasiun Purwokerto (PWT) - Purwokerto</option>
        <option value="Stasiun Cilacap (CIL) - Cilacap">Stasiun Cilacap (CIL) - Cilacap</option>
        <option value="Stasiun Pekanbaru (PKU) - Pekanbaru">Stasiun Pekanbaru (PKU) - Pekanbaru</option>
        <option value="Stasiun Jombang (JOB) - Jombang">Stasiun Jombang (JOB) - Jombang</option>
        <option value="Stasiun Kroya (KRY) - Kroya">Stasiun Kroya (KRY) - Kroya</option>
        <option value="Stasiun Tegal (TG) - Tegal">Stasiun Tegal (TG) - Tegal</option>
        <option value="Stasiun Bojonegoro (BJN) - Bojonegoro">Stasiun Bojonegoro (BJN) - Bojonegoro</option>
        <option value="Stasiun Jember Baru (JBB) - Jember">Stasiun Jember Baru (JBB) - Jember</option>
        <option value="Stasiun Padalarang (PDG) - Padalarang">Stasiun Padalarang (PDG) - Padalarang</option>
        <option value="Stasiun Karanganyar (KA) - Karanganyar">Stasiun Karanganyar (KA) - Karanganyar</option>
        <option value="Stasiun Cilacap (CIL) - Cilacap">Stasiun Cilacap (CIL) - Cilacap</option>
        <option value="Stasiun Padang (PD) - Padang">Stasiun Padang (PD) - Padang</option>
        <option value="Stasiun Batang (BTG) - Batang">Stasiun Batang (BTG) - Batang</option>
        <option value="Stasiun Blitar (BL) - Blitar">Stasiun Blitar (BL) - Blitar</option>
        <option value="Stasiun Rangkasbitung (RKS) - Rangkasbitung">Stasiun Rangkasbitung (RKS) - Rangkasbitung</option>
        <option value="Stasiun Kertosono (KS) - Kertosono">Stasiun Kertosono (KS) - Kertosono</option>
        <option value="Stasiun Magelang (MLG) - Magelang">Stasiun Magelang (MLG) - Magelang</option>
        <option value="Stasiun Banyuwangi Baru (BB) - Banyuwangi">Stasiun Banyuwangi Baru (BB) - Banyuwangi</option>
        <option value="Stasiun Pamekasan (PMK) - Pamekasan">Stasiun Pamekasan (PMK) - Pamekasan</option>
        <option value="Stasiun Bumiayu (BMU) - Bumiayu">Stasiun Bumiayu (BMU) - Bumiayu</option>
        <option value="Stasiun Klaten (KT) - Klaten">Stasiun Klaten (KT) - Klaten</option>
        <option value="Stasiun Kaliwungu (KAL) - Kaliwungu">Stasiun Kaliwungu (KAL) - Kaliwungu</option>
        <option value="Stasiun Martapura (MT) - Martapura">Stasiun Martapura (MT) - Martapura</option>
        <option value="Stasiun Banjar (BJ) - Banjar">Stasiun Banjar (BJ) - Banjar</option>
        <option value="Stasiun Indramayu (IMY) - Indramayu">Stasiun Indramayu (IMY) - Indramayu</option>
        <option value="Stasiun Rangkasbitung (RKS) - Rangkasbitung">Stasiun Rangkasbitung (RKS) - Rangkasbitung</option>
        <option value="Stasiun Prabumulih (PBM) - Prabumulih">Stasiun Prabumulih (PBM) - Prabumulih</option>
        <option value="Stasiun Lubuklinggau (LLG) - Lubuklinggau">Stasiun Lubuklinggau (LLG) - Lubuklinggau</option>
        <option value="Stasiun Lahat (LH) - Lahat">Stasiun Lahat (LH) - Lahat</option>
        <option value="Stasiun Baturaja (BTR) - Baturaja">Stasiun Baturaja (BTR) - Baturaja</option>
        <option value="Stasiun Muaraenim (MNM) - Muaraenim">Stasiun Muaraenim (MNM) - Muaraenim</option>
        <option value="Stasiun Pagaralam (PGL) - Pagaralam">Stasiun Pagaralam (PGL) - Pagaralam</option>
        <option value="Stasiun Curup (CRP) - Curup">Stasiun Curup (CRP) - Curup</option>
        <option value="Stasiun Tebingtinggi (TBG) - Tebingtinggi">Stasiun Tebingtinggi (TBG) - Tebingtinggi</option>
        <option value="Stasiun Rantau Prapat (RPP) - Rantau Prapat">Stasiun Rantau Prapat (RPP) - Rantau Prapat</option>
        <option value="Stasiun Siantar (SIA) - Siantar">Stasiun Siantar (SIA) - Siantar</option>
        <option value="Stasiun Kisaran (KIS) - Kisaran">Stasiun Kisaran (KIS) - Kisaran</option>
        <option value="Stasiun Tanjungbalai (TJB) - Tanjungbalai">Stasiun Tanjungbalai (TJB) - Tanjungbalai</option>
        <option value="Stasiun Bangkinang (BK) - Bangkinang">Stasiun Bangkinang (BK) - Bangkinang</option>
        <option value="Stasiun Dumai (DM) - Dumai">Stasiun Dumai (DM) - Dumai</option>
        <option value="Stasiun Muara Bulian (MB) - Muara Bulian">Stasiun Muara Bulian (MB) - Muara Bulian</option>
        <option value="Stasiun Kotabumi (KBI) - Kotabumi">Stasiun Kotabumi (KBI) - Kotabumi</option>
        <option value="Stasiun Prabumulih (PBM) - Prabumulih">Stasiun Prabumulih (PBM) - Prabumulih</option>
        <option value="Stasiun Tarahan (TRA) - Tarahan">Stasiun Tarahan (TRA) - Tarahan</option>
        <option value="Stasiun Pringsewu (PGW) - Pringsewu">Stasiun Pringsewu (PGW) - Pringsewu</option>
        <option value="Stasiun Kebumen (KBM) - Kebumen">Stasiun Kebumen (KBM) - Kebumen</option>
        <option value="Stasiun Banyumas (BM) - Banyumas">Stasiun Banyumas (BM) - Banyumas</option>
        <option value="Stasiun Kebumen (KBM) - Kebumen">Stasiun Kebumen (KBM) - Kebumen</option>
        <option value="Stasiun Purbalingga (PBG) - Purbalingga">Stasiun Purbalingga (PBG) - Purbalingga</option>
        <option value="Stasiun Banjar (BJR) - Banjar">Stasiun Banjar (BJR) - Banjar</option>
        <option value="Stasiun Karanganyar (KRG) - Karanganyar">Stasiun Karanganyar (KRG) - Karanganyar</option>
        <option value="Stasiun Sukoharjo (SKH) - Sukoharjo">Stasiun Sukoharjo (SKH) - Sukoharjo</option>
        <option value="Stasiun Ngawi (NW) - Ngawi">Stasiun Ngawi (NW) - Ngawi</option>
        <option value="Stasiun Sragen (SRAG) - Sragen">Stasiun Sragen (SRAG) - Sragen</option>
        <option value="Stasiun Tulungagung (TG) - Tulungagung">Stasiun Tulungagung (TG) - Tulungagung</option>
        <option value="Stasiun Nganjuk (NJ) - Nganjuk">Stasiun Nganjuk (NJ) - Nganjuk</option>
        <option value="Stasiun Kertosono (KS) - Kertosono">Stasiun Kertosono (KS) - Kertosono</option>
        <option value="Stasiun Trenggalek (TG) - Trenggalek">Stasiun Trenggalek (TG) - Trenggalek</option>
        <option value="Stasiun Madiun Kota Baru (MK) - Madiun Kota Baru">Stasiun Madiun Kota Baru (MK) - Madiun Kota Baru</option>
        <option value="Stasiun Magetan (MT) - Magetan">Stasiun Magetan (MT) - Magetan</option>
        <option value="Stasiun Sidoarjo (SDA) - Sidoarjo">Stasiun Sidoarjo (SDA) - Sidoarjo</option>
        <option value="Stasiun Porong (PRG) - Porong">Stasiun Porong (PRG) - Porong</option>
        <option value="Stasiun Lawang (LWG) - Lawang">Stasiun Lawang (LWG) - Lawang</option>
        <option value="Stasiun Mojokerto (MJ) - Mojokerto">Stasiun Mojokerto (MJ) - Mojokerto</option>
        <option value="Stasiun Lamongan (LN) - Lamongan">Stasiun Lamongan (LN) - Lamongan</option>
        <option value="Stasiun Tuban (TN) - Tuban">Stasiun Tuban (TN) - Tuban</option>
        <option value="Stasiun Bojonegoro (BJN) - Bojonegoro">Stasiun Bojonegoro (BJN) - Bojonegoro</option>
        <option value="Stasiun Ngawi (NW) - Ngawi">Stasiun Ngawi (NW) - Ngawi</option>
        <option value="Stasiun Kertosono (KS) - Kertosono">Stasiun Kertosono (KS) - Kertosono</option>
        <option value="Stasiun Blitar (BL) - Blitar">Stasiun Blitar (BL) - Blitar</option>
        <option value="Stasiun Pare (PRE) - Pare">Stasiun Pare (PRE) - Pare</option>
        <option value="Stasiun Kepanjen (KPJ) - Kepanjen">Stasiun Kepanjen (KPJ) - Kepanjen</option>
        <option value="Stasiun Tulungagung (TG) - Tulungagung">Stasiun Tulungagung (TG) - Tulungagung</option>
        <option value="Stasiun Ponorogo (PGO) - Ponorogo">Stasiun Ponorogo (PGO) - Ponorogo</option>
        <option value="Stasiun Pacitan (PTN) - Pacitan">Stasiun Pacitan (PTN) - Pacitan</option>
        <option value="Stasiun Trenggalek (TG) - Trenggalek">Stasiun Trenggalek (TG) - Trenggalek</option>
        <option value="Stasiun Prambanan (PR) - Prambanan">Stasiun Prambanan (PR) - Prambanan</option>
        <option value="Stasiun Wates (WTS) - Wates">Stasiun Wates (WTS) - Wates</option>
        <option value="Stasiun Kutoarjo (KTA) - Kutoarjo">Stasiun Kutoarjo (KTA) - Kutoarjo</option>
        <option value="Stasiun Purworejo (PWJ) - Purworejo">Stasiun Purworejo (PWJ) - Purworejo</option>
        <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
    </select>
        
    <label for="stasiun_kedatangan">Stasiun Kedatangan:</label>
    <select class="form-control" id="stasiun_kedatangan" name="stasiun_kedatangan" required>
        <!-- Pilihan bandara kedatangan -->
        <option value="Stasiun Gambir (GMR) - Jakarta">Stasiun Gambir (GMR) - Jakarta</option>
    <option value="Stasiun Pasar Senen (PSE) - Jakarta">Stasiun Pasar Senen (PSE) - Jakarta</option>
    <option value="Stasiun Bandung (BD) - Bandung">Stasiun Bandung (BD) - Bandung</option>
    <option value="Stasiun Surabaya Gubeng (SGU) - Surabaya">Stasiun Surabaya Gubeng (SGU) - Surabaya</option>
    <option value="Stasiun Semarang Tawang (SMT) - Semarang">Stasiun Semarang Tawang (SMT) - Semarang</option>
    <option value="Stasiun Yogyakarta Tugu (YK) - Yogyakarta">Stasiun Yogyakarta Tugu (YK) - Yogyakarta</option>
    <option value="Stasiun Malang (ML) - Malang">Stasiun Malang (ML) - Malang</option>
    <option value="Stasiun Solo Balapan (SLO) - Solo">Stasiun Solo Balapan (SLO) - Solo</option>
    <option value="Stasiun Medan (MDN) - Medan">Stasiun Medan (MDN) - Medan</option>
    <option value="Stasiun Palembang (PLB) - Palembang">Stasiun Palembang (PLB) - Palembang</option>
    <option value="Stasiun Cirebon (CN) - Cirebon">Stasiun Cirebon (CN) - Cirebon</option>
    <option value="Stasiun Surakarta (SR) - Surakarta">Stasiun Surakarta (SR) - Surakarta</option>
    <option value="Stasiun Pekalongan (PKG) - Pekalongan">Stasiun Pekalongan (PKG) - Pekalongan</option>
    <option value="Stasiun Jember (JBB) - Jember">Stasiun Jember (JBB) - Jember</option>
    <option value="Stasiun Kediri (KDI) - Kediri">Stasiun Kediri (KDI) - Kediri</option>
    <option value="Stasiun Probolinggo (PB) - Probolinggo">Stasiun Probolinggo (PB) - Probolinggo</option>
    <option value="Stasiun Madiun (MI) - Madiun">Stasiun Madiun (MI) - Madiun</option>
    <option value="Stasiun Kutoarjo (KTA) - Kutoarjo">Stasiun Kutoarjo (KTA) - Kutoarjo</option>
    <option value="Stasiun Tasikmalaya (TSM) - Tasikmalaya">Stasiun Tasikmalaya (TSM) - Tasikmalaya</option>
    <option value="Stasiun Purwokerto (PWT) - Purwokerto">Stasiun Purwokerto (PWT) - Purwokerto</option>
    <option value="Stasiun Cilacap (CIL) - Cilacap">Stasiun Cilacap (CIL) - Cilacap</option>
    <option value="Stasiun Pekanbaru (PKU) - Pekanbaru">Stasiun Pekanbaru (PKU) - Pekanbaru</option>
    <option value="Stasiun Jombang (JOB) - Jombang">Stasiun Jombang (JOB) - Jombang</option>
    <option value="Stasiun Kroya (KRY) - Kroya">Stasiun Kroya (KRY) - Kroya</option>
    <option value="Stasiun Tegal (TG) - Tegal">Stasiun Tegal (TG) - Tegal</option>
    <option value="Stasiun Bojonegoro (BJN) - Bojonegoro">Stasiun Bojonegoro (BJN) - Bojonegoro</option>
    <option value="Stasiun Jember Baru (JBB) - Jember">Stasiun Jember Baru (JBB) - Jember</option>
    <option value="Stasiun Padalarang (PDG) - Padalarang">Stasiun Padalarang (PDG) - Padalarang</option>
    <option value="Stasiun Karanganyar (KA) - Karanganyar">Stasiun Karanganyar (KA) - Karanganyar</option>
    <option value="Stasiun Cilacap (CIL) - Cilacap">Stasiun Cilacap (CIL) - Cilacap</option>
    <option value="Stasiun Padang (PD) - Padang">Stasiun Padang (PD) - Padang</option>
    <option value="Stasiun Batang (BTG) - Batang">Stasiun Batang (BTG) - Batang</option>
    <option value="Stasiun Blitar (BL) - Blitar">Stasiun Blitar (BL) - Blitar</option>
    <option value="Stasiun Rangkasbitung (RKS) - Rangkasbitung">Stasiun Rangkasbitung (RKS) - Rangkasbitung</option>
    <option value="Stasiun Kertosono (KS) - Kertosono">Stasiun Kertosono (KS) - Kertosono</option>
    <option value="Stasiun Magelang (MLG) - Magelang">Stasiun Magelang (MLG) - Magelang</option>
    <option value="Stasiun Banyuwangi Baru (BB) - Banyuwangi">Stasiun Banyuwangi Baru (BB) - Banyuwangi</option>
    <option value="Stasiun Pamekasan (PMK) - Pamekasan">Stasiun Pamekasan (PMK) - Pamekasan</option>
    <option value="Stasiun Bumiayu (BMU) - Bumiayu">Stasiun Bumiayu (BMU) - Bumiayu</option>
    <option value="Stasiun Klaten (KT) - Klaten">Stasiun Klaten (KT) - Klaten</option>
    <option value="Stasiun Kaliwungu (KAL) - Kaliwungu">Stasiun Kaliwungu (KAL) - Kaliwungu</option>
    <option value="Stasiun Martapura (MT) - Martapura">Stasiun Martapura (MT) - Martapura</option>
    <option value="Stasiun Banjar (BJ) - Banjar">Stasiun Banjar (BJ) - Banjar</option>
    <option value="Stasiun Indramayu (IMY) - Indramayu">Stasiun Indramayu (IMY) - Indramayu</option>
    <option value="Stasiun Rangkasbitung (RKS) - Rangkasbitung">Stasiun Rangkasbitung (RKS) - Rangkasbitung</option>
    <option value="Stasiun Prabumulih (PBM) - Prabumulih">Stasiun Prabumulih (PBM) - Prabumulih</option>
    <option value="Stasiun Lubuklinggau (LLG) - Lubuklinggau">Stasiun Lubuklinggau (LLG) - Lubuklinggau</option>
    <option value="Stasiun Lahat (LH) - Lahat">Stasiun Lahat (LH) - Lahat</option>
    <option value="Stasiun Baturaja (BTR) - Baturaja">Stasiun Baturaja (BTR) - Baturaja</option>
    <option value="Stasiun Muaraenim (MNM) - Muaraenim">Stasiun Muaraenim (MNM) - Muaraenim</option>
    <option value="Stasiun Pagaralam (PGL) - Pagaralam">Stasiun Pagaralam (PGL) - Pagaralam</option>
    <option value="Stasiun Curup (CRP) - Curup">Stasiun Curup (CRP) - Curup</option>
    <option value="Stasiun Tebingtinggi (TBG) - Tebingtinggi">Stasiun Tebingtinggi (TBG) - Tebingtinggi</option>
    <option value="Stasiun Rantau Prapat (RPP) - Rantau Prapat">Stasiun Rantau Prapat (RPP) - Rantau Prapat</option>
    <option value="Stasiun Siantar (SIA) - Siantar">Stasiun Siantar (SIA) - Siantar</option>
    <option value="Stasiun Kisaran (KIS) - Kisaran">Stasiun Kisaran (KIS) - Kisaran</option>
    <option value="Stasiun Tanjungbalai (TJB) - Tanjungbalai">Stasiun Tanjungbalai (TJB) - Tanjungbalai</option>
    <option value="Stasiun Bangkinang (BK) - Bangkinang">Stasiun Bangkinang (BK) - Bangkinang</option>
    <option value="Stasiun Dumai (DM) - Dumai">Stasiun Dumai (DM) - Dumai</option>
    <option value="Stasiun Muara Bulian (MB) - Muara Bulian">Stasiun Muara Bulian (MB) - Muara Bulian</option>
    <option value="Stasiun Kotabumi (KBI) - Kotabumi">Stasiun Kotabumi (KBI) - Kotabumi</option>
    <option value="Stasiun Prabumulih (PBM) - Prabumulih">Stasiun Prabumulih (PBM) - Prabumulih</option>
    <option value="Stasiun Tarahan (TRA) - Tarahan">Stasiun Tarahan (TRA) - Tarahan</option>
    <option value="Stasiun Pringsewu (PGW) - Pringsewu">Stasiun Pringsewu (PGW) - Pringsewu</option>
    <option value="Stasiun Kebumen (KBM) - Kebumen">Stasiun Kebumen (KBM) - Kebumen</option>
    <option value="Stasiun Banyumas (BM) - Banyumas">Stasiun Banyumas (BM) - Banyumas</option>
    <option value="Stasiun Kebumen (KBM) - Kebumen">Stasiun Kebumen (KBM) - Kebumen</option>
    <option value="Stasiun Purbalingga (PBG) - Purbalingga">Stasiun Purbalingga (PBG) - Purbalingga</option>
    <option value="Stasiun Banjar (BJR) - Banjar">Stasiun Banjar (BJR) - Banjar</option>
    <option value="Stasiun Karanganyar (KRG) - Karanganyar">Stasiun Karanganyar (KRG) - Karanganyar</option>
    <option value="Stasiun Sukoharjo (SKH) - Sukoharjo">Stasiun Sukoharjo (SKH) - Sukoharjo</option>
    <option value="Stasiun Ngawi (NW) - Ngawi">Stasiun Ngawi (NW) - Ngawi</option>
    <option value="Stasiun Sragen (SRAG) - Sragen">Stasiun Sragen (SRAG) - Sragen</option>
    <option value="Stasiun Tulungagung (TG) - Tulungagung">Stasiun Tulungagung (TG) - Tulungagung</option>
    <option value="Stasiun Nganjuk (NJ) - Nganjuk">Stasiun Nganjuk (NJ) - Nganjuk</option>
    <option value="Stasiun Kertosono (KS) - Kertosono">Stasiun Kertosono (KS) - Kertosono</option>
    <option value="Stasiun Trenggalek (TG) - Trenggalek">Stasiun Trenggalek (TG) - Trenggalek</option>
    <option value="Stasiun Madiun Kota Baru (MK) - Madiun Kota Baru">Stasiun Madiun Kota Baru (MK) - Madiun Kota Baru</option>
    <option value="Stasiun Magetan (MT) - Magetan">Stasiun Magetan (MT) - Magetan</option>
    <option value="Stasiun Sidoarjo (SDA) - Sidoarjo">Stasiun Sidoarjo (SDA) - Sidoarjo</option>
    <option value="Stasiun Porong (PRG) - Porong">Stasiun Porong (PRG) - Porong</option>
    <option value="Stasiun Lawang (LWG) - Lawang">Stasiun Lawang (LWG) - Lawang</option>
    <option value="Stasiun Mojokerto (MJ) - Mojokerto">Stasiun Mojokerto (MJ) - Mojokerto</option>
    <option value="Stasiun Lamongan (LN) - Lamongan">Stasiun Lamongan (LN) - Lamongan</option>
    <option value="Stasiun Tuban (TN) - Tuban">Stasiun Tuban (TN) - Tuban</option>
    <option value="Stasiun Bojonegoro (BJN) - Bojonegoro">Stasiun Bojonegoro (BJN) - Bojonegoro</option>
    <option value="Stasiun Ngawi (NW) - Ngawi">Stasiun Ngawi (NW) - Ngawi</option>
    <option value="Stasiun Kertosono (KS) - Kertosono">Stasiun Kertosono (KS) - Kertosono</option>
    <option value="Stasiun Blitar (BL) - Blitar">Stasiun Blitar (BL) - Blitar</option>
    <option value="Stasiun Pare (PRE) - Pare">Stasiun Pare (PRE) - Pare</option>
    <option value="Stasiun Kepanjen (KPJ) - Kepanjen">Stasiun Kepanjen (KPJ) - Kepanjen</option>
    <option value="Stasiun Tulungagung (TG) - Tulungagung">Stasiun Tulungagung (TG) - Tulungagung</option>
    <option value="Stasiun Ponorogo (PGO) - Ponorogo">Stasiun Ponorogo (PGO) - Ponorogo</option>
    <option value="Stasiun Pacitan (PTN) - Pacitan">Stasiun Pacitan (PTN) - Pacitan</option>
    <option value="Stasiun Trenggalek (TG) - Trenggalek">Stasiun Trenggalek (TG) - Trenggalek</option>
    <option value="Stasiun Prambanan (PR) - Prambanan">Stasiun Prambanan (PR) - Prambanan</option>
    <option value="Stasiun Wates (WTS) - Wates">Stasiun Wates (WTS) - Wates</option>
    <option value="Stasiun Kutoarjo (KTA) - Kutoarjo">Stasiun Kutoarjo (KTA) - Kutoarjo</option>
    <option value="Stasiun Purworejo (PWJ) - Purworejo">Stasiun Purworejo (PWJ) - Purworejo</option>
    </select>
        
        <label for="date">Tanggal Keberangkatan:</label>
        <input type="date" id="date" name="date" required><br><br>
        
        <button type="submit">Cari Tiket</button>
    </form>
</div>

<div class="search-form" id="pesawat-form">
    <form action="caripesawat.php" method="POST">
        <label for="bandara_keberangkatan">Bandara Keberangkatan:</label>
        <select class="form-control" id="bandara_keberangkatan" name="bandara_keberangkatan" required>
            <!-- Pilihan bandara keberangkatan -->
            <option >Pilih Bandara Keberangkatan</option>
            <option value="Bandara Internasional Soekarno-Hatta (CGK) - Jakarta">Bandara Internasional Soekarno-Hatta (CGK) - Jakarta</option>
<option value="Bandara Internasional Ngurah Rai (DPS) - Denpasar, Bali">Bandara Internasional Ngurah Rai (DPS) - Denpasar, Bali</option>
<option value="Bandara Internasional Juanda (SUB) - Surabaya">Bandara Internasional Juanda (SUB) - Surabaya</option>
<option value="Bandara Internasional Sultan Hasanuddin (UPG) - Makassar">Bandara Internasional Sultan Hasanuddin (UPG) - Makassar</option>
<option value="Bandara Internasional Adisutjipto (JOG) - Yogyakarta">Bandara Internasional Adisutjipto (JOG) - Yogyakarta</option>
<option value="Bandara Internasional Adi Soemarmo (SOC) - Solo">Bandara Internasional Adi Soemarmo (SOC) - Solo</option>
<option value="Bandara Internasional Kualanamu (KNO) - Medan">Bandara Internasional Kualanamu (KNO) - Medan</option>
<option value="Bandara Internasional Sultan Mahmud Badaruddin II (PLM) - Palembang">Bandara Internasional Sultan Mahmud Badaruddin II (PLM) - Palembang</option>
<option value="Bandara Internasional Lombok Praya (LOP) - Lombok">Bandara Internasional Lombok Praya (LOP) - Lombok</option>
<option value="Bandara Internasional Minangkabau (PDG) - Padang">Bandara Internasional Minangkabau (PDG) - Padang</option>
<option value="Bandara Internasional Husein Sastranegara (BDO) - Bandung">Bandara Internasional Husein Sastranegara (BDO) - Bandung</option>
<option value="Bandara Internasional Syamsudin Noor (BDJ) - Banjarmasin">Bandara Internasional Syamsudin Noor (BDJ) - Banjarmasin</option>
<option value="Bandara Internasional El Tari (KOE) - Kupang">Bandara Internasional El Tari (KOE) - Kupang</option>
<option value="Bandara Internasional Ahmad Yani (SRG) - Semarang">Bandara Internasional Ahmad Yani (SRG) - Semarang</option>
<option value="Bandara Internasional Sepinggan (BPN) - Balikpapan">Bandara Internasional Sepinggan (BPN) - Balikpapan</option>
<option value="Bandara Internasional Supadio (PNK) - Pontianak">Bandara Internasional Supadio (PNK) - Pontianak</option>
<option value="Bandara Internasional Sultan Aji Muhammad Sulaiman (BTH) - Batam">Bandara Internasional Sultan Aji Muhammad Sulaiman (BTH) - Batam</option>
<option value="Bandara Internasional Sam Ratulangi (MDC) - Manado">Bandara Internasional Sam Ratulangi (MDC) - Manado</option>
<option value="Bandara Internasional Halim Perdanakusuma (HLP) - Jakarta">Bandara Internasional Halim Perdanakusuma (HLP) - Jakarta</option>
<option value="Bandara Internasional Silangit (DTB) - Silangit">Bandara Internasional Silangit (DTB) - Silangit</option>
<option value="Bandara Internasional Fatmawati Soekarno (BKS) - Bengkulu">Bandara Internasional Fatmawati Soekarno (BKS) - Bengkulu</option>
<option value="Bandara Internasional Frans Kaisiepo (BIK) - Biak">Bandara Internasional Frans Kaisiepo (BIK) - Biak</option>
<option value="Bandara Internasional Radin Inten II (TKG) - Lampung">Bandara Internasional Radin Inten II (TKG) - Lampung</option>
<option value="Bandara Internasional Pattimura (AMQ) - Ambon">Bandara Internasional Pattimura (AMQ) - Ambon</option>
<option value="Bandara Internasional Sentani (DJJ) - Jayapura">Bandara Internasional Sentani (DJJ) - Jayapura</option>
<option value="Bandara Internasional H.A.S Hanandjoeddin (TJQ) - Tanjung Pandan">Bandara Internasional H.A.S Hanandjoeddin (TJQ) - Tanjung Pandan</option>
<option value="Bandara Internasional Sultan Thaha (DJB) - Jambi">Bandara Internasional Sultan Thaha (DJB) - Jambi</option>
<option value="Bandara Internasional Sultan Iskandar Muda (BTJ) - Banda Aceh">Bandara Internasional Sultan Iskandar Muda (BTJ) - Banda Aceh</option>
<option value="Bandara Internasional Blimbingsari (BWX) - Banyuwangi">Bandara Internasional Blimbingsari (BWX) - Banyuwangi</option>
<option value="Bandara Internasional Sultan Babullah (TTE) - Ternate">Bandara Internasional Sultan Babullah (TTE) - Ternate</option>
<option value="Bandara Internasional Tjilik Riwut (PLW) - Palu">Bandara Internasional Tjilik Riwut (PLW) - Palu</option>
<option value="Bandara Internasional Maimun Saleh (SBG) - Sabang">Bandara Internasional Maimun Saleh (SBG) - Sabang</option>
<option value="Bandara Internasional Matahora (WKB) - Waikabubak">Bandara Internasional Matahora (WKB) - Waikabubak</option>
<option value="Bandara Internasional Jalaluddin (GTO) - Gorontalo">Bandara Internasional Jalaluddin (GTO) - Gorontalo</option>
<option value="Bandara Internasional Selaparang (AMI) - Mataram">Bandara Internasional Selaparang (AMI) - Mataram</option>
<option value="Bandara Internasional Bukit Siguntang (PGK) - Pangkal Pinang">Bandara Internasional Bukit Siguntang (PGK) - Pangkal Pinang</option>
<option value="Bandara Internasional Hasa Hasa (BUI) - Buli">Bandara Internasional Hasa Hasa (BUI) - Buli</option>
<option value="Bandara Internasional Raja Haji Fisabilillah (TNJ) - Tanjung Pinang">Bandara Internasional Raja Haji Fisabilillah (TNJ) - Tanjung Pinang</option>
<option value="Bandara Internasional Letkol Wisnu (TMC) - Tembagapura">Bandara Internasional Letkol Wisnu (TMC) - Tembagapura</option>
<option value="Bandara Internasional Dominique Edward Osok (SOQ) - Sorong">Bandara Internasional Dominique Edward Osok (SOQ) - Sorong</option>
<option value="Bandara Internasional Syukuran Aminuddin Amir (LUW) - Luwuk">Bandara Internasional Syukuran Aminuddin Amir (LUW) - Luwuk</option>
<option value="Bandara Internasional Jatitujuh (KJT) - Majalengka">Bandara Internasional Jatitujuh (KJT) - Majalengka</option>
<option value="Bandara Internasional Lembuswana (LLJ) - Belitung">Bandara Internasional Lembuswana (LLJ) - Belitung</option>
<option value="Bandara Internasional Umbu Mehang Kunda (WGP) - Waingapu">Bandara Internasional Umbu Mehang Kunda (WGP) - Waingapu</option>
<option value="Bandara Internasional Tjilik Riwut (PKY) - Palangkaraya">Bandara Internasional Tjilik Riwut (PKY) - Palangkaraya</option>
<option value="Bandara Internasional RADJABAGUSWIDJAJA (KTG) - Ketapang">Bandara Internasional RADJABAGUSWIDJAJA (KTG) - Ketapang</option>
<option value="Bandara Internasional Tembagapura (SRI) - Tembagapura">Bandara Internasional Tembagapura (SRI) - Tembagapura</option>
<option value="Bandara Internasional El Tari (NAH) - Naha">Bandara Internasional El Tari (NAH) - Naha</option>
<option value="Bandara Internasional Bontang (BXT) - Bontang">Bandara Internasional Bontang (BXT) - Bontang</option>
<option value="Bandara Internasional Wai Oti (PSU) - Putussibau">Bandara Internasional Wai Oti (PSU) - Putussibau</option>
<option value="Bandara Internasional Lepo-Lepo (MAL) - Mangole">Bandara Internasional Lepo-Lepo (MAL) - Mangole</option>
<option value="Bandara Internasional Sultan Aji Muhamad Sulaiman (BUW) - Bau Bau">Bandara Internasional Sultan Aji Muhamad Sulaiman (BUW) - Bau Bau</option>
<option value="Bandara Internasional Sultan Babullah (SQR) - Soroako">Bandara Internasional Sultan Babullah (SQR) - Soroako</option>
<option value="Bandara Internasional Raden Sadjad (KTG) - Ketapang">Bandara Internasional Raden Sadjad (KTG) - Ketapang</option>
<option value="Bandara Internasional Umbu Mehang Kunda (WGP) - Waingapu">Bandara Internasional Umbu Mehang Kunda (WGP) - Waingapu</option>
<option value="Bandara Internasional Tjilik Riwut (PKY) - Palangkaraya">Bandara Internasional Tjilik Riwut (PKY) - Palangkaraya</option>
<option value="Bandara Internasional Tembagapura (SRI) - Tembagapura">Bandara Internasional Tembagapura (SRI) - Tembagapura</option>
<option value="Bandara Internasional El Tari (NAH) - Naha">Bandara Internasional El Tari (NAH) - Naha</option>
<option value="Bandara Internasional Bontang (BXT) - Bontang">Bandara Internasional Bontang (BXT) - Bontang</option>
<option value="Bandara Internasional Wai Oti (PSU) - Putussibau">Bandara Internasional Wai Oti (PSU) - Putussibau</option>
<option value="Bandara Internasional Lepo-Lepo (MAL) - Mangole">Bandara Internasional Lepo-Lepo (MAL) - Mangole</option>
<option value="Bandara Internasional Sultan Aji Muhamad Sulaiman (BUW) - Bau Bau">Bandara Internasional Sultan Aji Muhamad Sulaiman (BUW) - Bau Bau</option>
<option value="Bandara Internasional Sultan Babullah (SQR) - Soroako">Bandara Internasional Sultan Babullah (SQR) - Soroako</option>
<option value="Bandara Internasional Raden Sadjad (KTG) - Ketapang">Bandara Internasional Raden Sadjad (KTG) - Ketapang</option>
<option value="Bandara Internasional Changi (SIN) - Singapura">Bandara Internasional Changi (SIN) - Singapura</option>
<option value="Bandara Internasional Kuala Lumpur (KUL) - Malaysia">Bandara Internasional Kuala Lumpur (KUL) - Malaysia</option>
<option value="Bandara Internasional Suvarnabhumi (BKK) - Bangkok, Thailand">Bandara Internasional Suvarnabhumi (BKK) - Bangkok, Thailand</option>
<option value="Bandara Internasional Hong Kong (HKG) - Hong Kong">Bandara Internasional Hong Kong (HKG) - Hong Kong</option>
<option value="Bandara Internasional Beijing Capital (PEK) - Beijing, China">Bandara Internasional Beijing Capital (PEK) - Beijing, China</option>
<option value="Bandara Internasional Incheon (ICN) - Seoul, Korea Selatan">Bandara Internasional Incheon (ICN) - Seoul, Korea Selatan</option>
<option value="Bandara Internasional Narita (NRT) - Tokyo, Jepang">Bandara Internasional Narita (NRT) - Tokyo, Jepang</option>
<option value="Bandara Internasional Dubai (DXB) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai (DXB) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Heathrow (LHR) - London, Inggris">Bandara Internasional Heathrow (LHR) - London, Inggris</option>
<option value="Bandara Internasional John F. Kennedy (JFK) - New York City, Amerika Serikat">Bandara Internasional John F. Kennedy (JFK) - New York City, Amerika Serikat</option>
<option value="Bandara Internasional Charles de Gaulle (CDG) - Paris, Prancis">Bandara Internasional Charles de Gaulle (CDG) - Paris, Prancis</option>
<option value="Bandara Internasional Frankfurt (FRA) - Frankfurt, Jerman">Bandara Internasional Frankfurt (FRA) - Frankfurt, Jerman</option>
<option value="Bandara Internasional Los Angeles (LAX) - Los Angeles, Amerika Serikat">Bandara Internasional Los Angeles (LAX) - Los Angeles, Amerika Serikat</option>
<option value="Bandara Internasional Barajas (MAD) - Madrid, Spanyol">Bandara Internasional Barajas (MAD) - Madrid, Spanyol</option>
<option value="Bandara Internasional Leonardo da Vinci (FCO) - Roma, Italia">Bandara Internasional Leonardo da Vinci (FCO) - Roma, Italia</option>
<option value="Bandara Internasional O'Hare (ORD) - Chicago, Amerika Serikat">Bandara Internasional O'Hare (ORD) - Chicago, Amerika Serikat</option>
<option value="Bandara Internasional Denver (DEN) - Denver, Amerika Serikat">Bandara Internasional Denver (DEN) - Denver, Amerika Serikat</option>
<option value="Bandara Internasional Dubai World Central (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai World Central (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Abu Dhabi (AUH) - Abu Dhabi, Uni Emirat Arab">Bandara Internasional Abu Dhabi (AUH) - Abu Dhabi, Uni Emirat Arab</option>
<option value="Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi">Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi</option>
<option value="Bandara Internasional King Fahd (DMM) - Dammam, Arab Saudi">Bandara Internasional King Fahd (DMM) - Dammam, Arab Saudi</option>
<option value="Bandara Internasional Prince Mohammad bin Abdulaziz (MED) - Madinah, Arab Saudi">Bandara Internasional Prince Mohammad bin Abdulaziz (MED) - Madinah, Arab Saudi</option>
<option value="Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Imam Khomeini (IKA) - Tehran, Iran">Bandara Internasional Imam Khomeini (IKA) - Tehran, Iran</option>
<option value="Bandara Internasional Hamad (DOH) - Doha, Qatar">Bandara Internasional Hamad (DOH) - Doha, Qatar</option>
<option value="Bandara Internasional Istanbul (IST) - Istanbul, Turki">Bandara Internasional Istanbul (IST) - Istanbul, Turki</option>
<option value="Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko">Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko</option>
<option value="Bandara Internasional Dubai Creek (DCG) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Creek (DCG) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Dallas/Fort Worth (DFW) - Dallas/Fort Worth, Amerika Serikat">Bandara Internasional Dallas/Fort Worth (DFW) - Dallas/Fort Worth, Amerika Serikat</option>
<option value="Bandara Internasional Dubai Creek (DCG) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Creek (DCG) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Orlando (MCO) - Orlando, Amerika Serikat">Bandara Internasional Orlando (MCO) - Orlando, Amerika Serikat</option>
<option value="Bandara Internasional Ninoy Aquino (MNL) - Manila, Filipina">Bandara Internasional Ninoy Aquino (MNL) - Manila, Filipina</option>
<option value="Bandara Internasional Indira Gandhi (DEL) - Delhi, India">Bandara Internasional Indira Gandhi (DEL) - Delhi, India</option>
<option value="Bandara Internasional Chhatrapati Shivaji (BOM) - Mumbai, India">Bandara Internasional Chhatrapati Shivaji (BOM) - Mumbai, India</option>
<option value="Bandara Internasional Kempegowda (BLR) - Bengaluru, India">Bandara Internasional Kempegowda (BLR) - Bengaluru, India</option>
<option value="Bandara Internasional Rajiv Gandhi (HYD) - Hyderabad, India">Bandara Internasional Rajiv Gandhi (HYD) - Hyderabad, India</option>
<option value="Bandara Internasional Chennai (MAA) - Chennai, India">Bandara Internasional Chennai (MAA) - Chennai, India</option>
<option value="Bandara Internasional Netaji Subhas Chandra Bose (CCU) - Kolkata, India">Bandara Internasional Netaji Subhas Chandra Bose (CCU) - Kolkata, India</option>
<option value="Bandara Internasional Chaudhary Charan Singh (LKO) - Lucknow, India">Bandara Internasional Chaudhary Charan Singh (LKO) - Lucknow, India</option>
<option value="Bandara Internasional Jaipur (JAI) - Jaipur, India">Bandara Internasional Jaipur (JAI) - Jaipur, India</option>
<option value="Bandara Internasional Sardar Vallabhbhai Patel (AMD) - Ahmedabad, India">Bandara Internasional Sardar Vallabhbhai Patel (AMD) - Ahmedabad, India</option>
<option value="Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Bandaranaike (CMB) - Colombo, Sri Lanka">Bandara Internasional Bandaranaike (CMB) - Colombo, Sri Lanka</option>
<option value="Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi">Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi</option>
<option value="Bandara Internasional King Khalid (RUH) - Riyadh, Arab Saudi">Bandara Internasional King Khalid (RUH) - Riyadh, Arab Saudi</option>
<option value="Bandara Internasional Prince Mohammad bin Abdulaziz (MED) - Madinah, Arab Saudi">Bandara Internasional Prince Mohammad bin Abdulaziz (MED) - Madinah, Arab Saudi</option>
<option value="Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko">Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko</option>
<option value="Bandara Internasional Cairo (CAI) - Cairo, Mesir">Bandara Internasional Cairo (CAI) - Cairo, Mesir</option>
<option value="Bandara Internasional Hamad (DOH) - Doha, Qatar">Bandara Internasional Hamad (DOH) - Doha, Qatar</option>
<option value="Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Hamad (DOH) - Doha, Qatar">Bandara Internasional Hamad (DOH) - Doha, Qatar</option>
<option value="Bandara Internasional Istanbul (IST) - Istanbul, Turki">Bandara Internasional Istanbul (IST) - Istanbul, Turki</option>
<option value="Bandara Internasional Muscat (MCT) - Muscat, Oman">Bandara Internasional Muscat (MCT) - Muscat, Oman</option>
<option value="Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko">Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko</option>
<option value="Bandara Internasional Cairo (CAI) - Cairo, Mesir">Bandara Internasional Cairo (CAI) - Cairo, Mesir</option>
<option value="Bandara Internasional Hamad (DOH) - Doha, Qatar">Bandara Internasional Hamad (DOH) - Doha, Qatar</option>
<option value="Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Hamad (DOH) - Doha, Qatar">Bandara Internasional Hamad (DOH) - Doha, Qatar</option>
<option value="Bandara Internasional Istanbul (IST) - Istanbul, Turki">Bandara Internasional Istanbul (IST) - Istanbul, Turki</option>
<option value="Bandara Internasional Muscat (MCT) - Muscat, Oman">Bandara Internasional Muscat (MCT) - Muscat, Oman</option>
<option value="Bandara Internasional Eleftherios Venizelos (ATH) - Athena, Yunani">Bandara Internasional Eleftherios Venizelos (ATH) - Athena, Yunani</option>
<option value="Bandara Internasional Dublin (DUB) - Dublin, Irlandia">Bandara Internasional Dublin (DUB) - Dublin, Irlandia</option>
<option value="Bandara Internasional Sydney (SYD) - Sydney, Australia">Bandara Internasional Sydney (SYD) - Sydney, Australia</option>
<option value="Bandara Internasional Auckland (AKL) - Auckland, Selandia Baru">Bandara Internasional Auckland (AKL) - Auckland, Selandia Baru</option>
<option value="Bandara Internasional Hong Kong (HKG) - Hong Kong">Bandara Internasional Hong Kong (HKG) - Hong Kong</option>
<option value="Bandara Internasional Incheon (ICN) - Seoul, Korea Selatan">Bandara Internasional Incheon (ICN) - Seoul, Korea Selatan</option>
<option value="Bandara Internasional Narita (NRT) - Tokyo, Jepang">Bandara Internasional Narita (NRT) - Tokyo, Jepang</option>
<option value="Bandara Internasional Dubai (DXB) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai (DXB) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Heathrow (LHR) - London, Inggris">Bandara Internasional Heathrow (LHR) - London, Inggris</option>
<option value="Bandara Internasional John F. Kennedy (JFK) - New York City, Amerika Serikat">Bandara Internasional John F. Kennedy (JFK) - New York City, Amerika Serikat</option>
<option value="Bandara Internasional Charles de Gaulle (CDG) - Paris, Prancis">Bandara Internasional Charles de Gaulle (CDG) - Paris, Prancis</option>
<option value="Bandara Internasional Frankfurt (FRA) - Frankfurt, Jerman">Bandara Internasional Frankfurt (FRA) - Frankfurt, Jerman</option>
<option value="Bandara Internasional Los Angeles (LAX) - Los Angeles, Amerika Serikat">Bandara Internasional Los Angeles (LAX) - Los Angeles, Amerika Serikat</option>
<option value="Bandara Internasional Barajas (MAD) - Madrid, Spanyol">Bandara Internasional Barajas (MAD) - Madrid, Spanyol</option>
<option value="Bandara Internasional Leonardo da Vinci (FCO) - Roma, Italia">Bandara Internasional Leonardo da Vinci (FCO) - Roma, Italia</option>
<option value="Bandara Internasional O'Hare (ORD) - Chicago, Amerika Serikat">Bandara Internasional O'Hare (ORD) - Chicago, Amerika Serikat</option>
<option value="Bandara Internasional Denver (DEN) - Denver, Amerika Serikat">Bandara Internasional Denver (DEN) - Denver, Amerika Serikat</option>
<option value="Bandara Internasional Dubai World Central (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai World Central (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Abu Dhabi (AUH) - Abu Dhabi, Uni Emirat Arab">Bandara Internasional Abu Dhabi (AUH) - Abu Dhabi, Uni Emirat Arab</option>
<option value="Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi">Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi</option>
        </select>
        <label for="bandara_kedatangan">Bandara Kedatangan:</label>
        <select class="form-control" id="bandara_kedatangan" name="bandara_kedatangan" required>
            <!-- Pilihan bandara kedatangan -->
            <option >Pilih Bandara Tujuan</option>
            <option value="Bandara Internasional Soekarno-Hatta (CGK) - Jakarta">Bandara Internasional Soekarno-Hatta (CGK) - Jakarta</option>
<option value="Bandara Internasional Ngurah Rai (DPS) - Denpasar, Bali">Bandara Internasional Ngurah Rai (DPS) - Denpasar, Bali</option>
<option value="Bandara Internasional Juanda (SUB) - Surabaya">Bandara Internasional Juanda (SUB) - Surabaya</option>
<option value="Bandara Internasional Sultan Hasanuddin (UPG) - Makassar">Bandara Internasional Sultan Hasanuddin (UPG) - Makassar</option>
<option value="Bandara Internasional Adisutjipto (JOG) - Yogyakarta">Bandara Internasional Adisutjipto (JOG) - Yogyakarta</option>
<option value="Bandara Internasional Adi Soemarmo (SOC) - Solo">Bandara Internasional Adi Soemarmo (SOC) - Solo</option>
<option value="Bandara Internasional Kualanamu (KNO) - Medan">Bandara Internasional Kualanamu (KNO) - Medan</option>
<option value="Bandara Internasional Sultan Mahmud Badaruddin II (PLM) - Palembang">Bandara Internasional Sultan Mahmud Badaruddin II (PLM) - Palembang</option>
<option value="Bandara Internasional Lombok Praya (LOP) - Lombok">Bandara Internasional Lombok Praya (LOP) - Lombok</option>
<option value="Bandara Internasional Minangkabau (PDG) - Padang">Bandara Internasional Minangkabau (PDG) - Padang</option>
<option value="Bandara Internasional Husein Sastranegara (BDO) - Bandung">Bandara Internasional Husein Sastranegara (BDO) - Bandung</option>
<option value="Bandara Internasional Syamsudin Noor (BDJ) - Banjarmasin">Bandara Internasional Syamsudin Noor (BDJ) - Banjarmasin</option>
<option value="Bandara Internasional El Tari (KOE) - Kupang">Bandara Internasional El Tari (KOE) - Kupang</option>
<option value="Bandara Internasional Ahmad Yani (SRG) - Semarang">Bandara Internasional Ahmad Yani (SRG) - Semarang</option>
<option value="Bandara Internasional Sepinggan (BPN) - Balikpapan">Bandara Internasional Sepinggan (BPN) - Balikpapan</option>
<option value="Bandara Internasional Supadio (PNK) - Pontianak">Bandara Internasional Supadio (PNK) - Pontianak</option>
<option value="Bandara Internasional Sultan Aji Muhammad Sulaiman (BTH) - Batam">Bandara Internasional Sultan Aji Muhammad Sulaiman (BTH) - Batam</option>
<option value="Bandara Internasional Sam Ratulangi (MDC) - Manado">Bandara Internasional Sam Ratulangi (MDC) - Manado</option>
<option value="Bandara Internasional Halim Perdanakusuma (HLP) - Jakarta">Bandara Internasional Halim Perdanakusuma (HLP) - Jakarta</option>
<option value="Bandara Internasional Silangit (DTB) - Silangit">Bandara Internasional Silangit (DTB) - Silangit</option>
<option value="Bandara Internasional Fatmawati Soekarno (BKS) - Bengkulu">Bandara Internasional Fatmawati Soekarno (BKS) - Bengkulu</option>
<option value="Bandara Internasional Frans Kaisiepo (BIK) - Biak">Bandara Internasional Frans Kaisiepo (BIK) - Biak</option>
<option value="Bandara Internasional Radin Inten II (TKG) - Lampung">Bandara Internasional Radin Inten II (TKG) - Lampung</option>
<option value="Bandara Internasional Pattimura (AMQ) - Ambon">Bandara Internasional Pattimura (AMQ) - Ambon</option>
<option value="Bandara Internasional Sentani (DJJ) - Jayapura">Bandara Internasional Sentani (DJJ) - Jayapura</option>
<option value="Bandara Internasional H.A.S Hanandjoeddin (TJQ) - Tanjung Pandan">Bandara Internasional H.A.S Hanandjoeddin (TJQ) - Tanjung Pandan</option>
<option value="Bandara Internasional Sultan Thaha (DJB) - Jambi">Bandara Internasional Sultan Thaha (DJB) - Jambi</option>
<option value="Bandara Internasional Sultan Iskandar Muda (BTJ) - Banda Aceh">Bandara Internasional Sultan Iskandar Muda (BTJ) - Banda Aceh</option>
<option value="Bandara Internasional Blimbingsari (BWX) - Banyuwangi">Bandara Internasional Blimbingsari (BWX) - Banyuwangi</option>
<option value="Bandara Internasional Sultan Babullah (TTE) - Ternate">Bandara Internasional Sultan Babullah (TTE) - Ternate</option>
<option value="Bandara Internasional Tjilik Riwut (PLW) - Palu">Bandara Internasional Tjilik Riwut (PLW) - Palu</option>
<option value="Bandara Internasional Maimun Saleh (SBG) - Sabang">Bandara Internasional Maimun Saleh (SBG) - Sabang</option>
<option value="Bandara Internasional Matahora (WKB) - Waikabubak">Bandara Internasional Matahora (WKB) - Waikabubak</option>
<option value="Bandara Internasional Jalaluddin (GTO) - Gorontalo">Bandara Internasional Jalaluddin (GTO) - Gorontalo</option>
<option value="Bandara Internasional Selaparang (AMI) - Mataram">Bandara Internasional Selaparang (AMI) - Mataram</option>
<option value="Bandara Internasional Bukit Siguntang (PGK) - Pangkal Pinang">Bandara Internasional Bukit Siguntang (PGK) - Pangkal Pinang</option>
<option value="Bandara Internasional Hasa Hasa (BUI) - Buli">Bandara Internasional Hasa Hasa (BUI) - Buli</option>
<option value="Bandara Internasional Raja Haji Fisabilillah (TNJ) - Tanjung Pinang">Bandara Internasional Raja Haji Fisabilillah (TNJ) - Tanjung Pinang</option>
<option value="Bandara Internasional Letkol Wisnu (TMC) - Tembagapura">Bandara Internasional Letkol Wisnu (TMC) - Tembagapura</option>
<option value="Bandara Internasional Dominique Edward Osok (SOQ) - Sorong">Bandara Internasional Dominique Edward Osok (SOQ) - Sorong</option>
<option value="Bandara Internasional Syukuran Aminuddin Amir (LUW) - Luwuk">Bandara Internasional Syukuran Aminuddin Amir (LUW) - Luwuk</option>
<option value="Bandara Internasional Jatitujuh (KJT) - Majalengka">Bandara Internasional Jatitujuh (KJT) - Majalengka</option>
<option value="Bandara Internasional Lembuswana (LLJ) - Belitung">Bandara Internasional Lembuswana (LLJ) - Belitung</option>
<option value="Bandara Internasional Umbu Mehang Kunda (WGP) - Waingapu">Bandara Internasional Umbu Mehang Kunda (WGP) - Waingapu</option>
<option value="Bandara Internasional Tjilik Riwut (PKY) - Palangkaraya">Bandara Internasional Tjilik Riwut (PKY) - Palangkaraya</option>
<option value="Bandara Internasional RADJABAGUSWIDJAJA (KTG) - Ketapang">Bandara Internasional RADJABAGUSWIDJAJA (KTG) - Ketapang</option>
<option value="Bandara Internasional Tembagapura (SRI) - Tembagapura">Bandara Internasional Tembagapura (SRI) - Tembagapura</option>
<option value="Bandara Internasional El Tari (NAH) - Naha">Bandara Internasional El Tari (NAH) - Naha</option>
<option value="Bandara Internasional Bontang (BXT) - Bontang">Bandara Internasional Bontang (BXT) - Bontang</option>
<option value="Bandara Internasional Wai Oti (PSU) - Putussibau">Bandara Internasional Wai Oti (PSU) - Putussibau</option>
<option value="Bandara Internasional Lepo-Lepo (MAL) - Mangole">Bandara Internasional Lepo-Lepo (MAL) - Mangole</option>
<option value="Bandara Internasional Sultan Aji Muhamad Sulaiman (BUW) - Bau Bau">Bandara Internasional Sultan Aji Muhamad Sulaiman (BUW) - Bau Bau</option>
<option value="Bandara Internasional Sultan Babullah (SQR) - Soroako">Bandara Internasional Sultan Babullah (SQR) - Soroako</option>
<option value="Bandara Internasional Raden Sadjad (KTG) - Ketapang">Bandara Internasional Raden Sadjad (KTG) - Ketapang</option>
<option value="Bandara Internasional Umbu Mehang Kunda (WGP) - Waingapu">Bandara Internasional Umbu Mehang Kunda (WGP) - Waingapu</option>
<option value="Bandara Internasional Tjilik Riwut (PKY) - Palangkaraya">Bandara Internasional Tjilik Riwut (PKY) - Palangkaraya</option>
<option value="Bandara Internasional Tembagapura (SRI) - Tembagapura">Bandara Internasional Tembagapura (SRI) - Tembagapura</option>
<option value="Bandara Internasional El Tari (NAH) - Naha">Bandara Internasional El Tari (NAH) - Naha</option>
<option value="Bandara Internasional Bontang (BXT) - Bontang">Bandara Internasional Bontang (BXT) - Bontang</option>
<option value="Bandara Internasional Wai Oti (PSU) - Putussibau">Bandara Internasional Wai Oti (PSU) - Putussibau</option>
<option value="Bandara Internasional Lepo-Lepo (MAL) - Mangole">Bandara Internasional Lepo-Lepo (MAL) - Mangole</option>
<option value="Bandara Internasional Sultan Aji Muhamad Sulaiman (BUW) - Bau Bau">Bandara Internasional Sultan Aji Muhamad Sulaiman (BUW) - Bau Bau</option>
<option value="Bandara Internasional Sultan Babullah (SQR) - Soroako">Bandara Internasional Sultan Babullah (SQR) - Soroako</option>
<option value="Bandara Internasional Raden Sadjad (KTG) - Ketapang">Bandara Internasional Raden Sadjad (KTG) - Ketapang</option>
<option value="Bandara Internasional Changi (SIN) - Singapura">Bandara Internasional Changi (SIN) - Singapura</option>
<option value="Bandara Internasional Kuala Lumpur (KUL) - Malaysia">Bandara Internasional Kuala Lumpur (KUL) - Malaysia</option>
<option value="Bandara Internasional Suvarnabhumi (BKK) - Bangkok, Thailand">Bandara Internasional Suvarnabhumi (BKK) - Bangkok, Thailand</option>
<option value="Bandara Internasional Hong Kong (HKG) - Hong Kong">Bandara Internasional Hong Kong (HKG) - Hong Kong</option>
<option value="Bandara Internasional Beijing Capital (PEK) - Beijing, China">Bandara Internasional Beijing Capital (PEK) - Beijing, China</option>
<option value="Bandara Internasional Incheon (ICN) - Seoul, Korea Selatan">Bandara Internasional Incheon (ICN) - Seoul, Korea Selatan</option>
<option value="Bandara Internasional Narita (NRT) - Tokyo, Jepang">Bandara Internasional Narita (NRT) - Tokyo, Jepang</option>
<option value="Bandara Internasional Dubai (DXB) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai (DXB) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Heathrow (LHR) - London, Inggris">Bandara Internasional Heathrow (LHR) - London, Inggris</option>
<option value="Bandara Internasional John F. Kennedy (JFK) - New York City, Amerika Serikat">Bandara Internasional John F. Kennedy (JFK) - New York City, Amerika Serikat</option>
<option value="Bandara Internasional Charles de Gaulle (CDG) - Paris, Prancis">Bandara Internasional Charles de Gaulle (CDG) - Paris, Prancis</option>
<option value="Bandara Internasional Frankfurt (FRA) - Frankfurt, Jerman">Bandara Internasional Frankfurt (FRA) - Frankfurt, Jerman</option>
<option value="Bandara Internasional Los Angeles (LAX) - Los Angeles, Amerika Serikat">Bandara Internasional Los Angeles (LAX) - Los Angeles, Amerika Serikat</option>
<option value="Bandara Internasional Barajas (MAD) - Madrid, Spanyol">Bandara Internasional Barajas (MAD) - Madrid, Spanyol</option>
<option value="Bandara Internasional Leonardo da Vinci (FCO) - Roma, Italia">Bandara Internasional Leonardo da Vinci (FCO) - Roma, Italia</option>
<option value="Bandara Internasional O'Hare (ORD) - Chicago, Amerika Serikat">Bandara Internasional O'Hare (ORD) - Chicago, Amerika Serikat</option>
<option value="Bandara Internasional Denver (DEN) - Denver, Amerika Serikat">Bandara Internasional Denver (DEN) - Denver, Amerika Serikat</option>
<option value="Bandara Internasional Dubai World Central (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai World Central (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Abu Dhabi (AUH) - Abu Dhabi, Uni Emirat Arab">Bandara Internasional Abu Dhabi (AUH) - Abu Dhabi, Uni Emirat Arab</option>
<option value="Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi">Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi</option>
<option value="Bandara Internasional King Fahd (DMM) - Dammam, Arab Saudi">Bandara Internasional King Fahd (DMM) - Dammam, Arab Saudi</option>
<option value="Bandara Internasional Prince Mohammad bin Abdulaziz (MED) - Madinah, Arab Saudi">Bandara Internasional Prince Mohammad bin Abdulaziz (MED) - Madinah, Arab Saudi</option>
<option value="Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Imam Khomeini (IKA) - Tehran, Iran">Bandara Internasional Imam Khomeini (IKA) - Tehran, Iran</option>
<option value="Bandara Internasional Hamad (DOH) - Doha, Qatar">Bandara Internasional Hamad (DOH) - Doha, Qatar</option>
<option value="Bandara Internasional Istanbul (IST) - Istanbul, Turki">Bandara Internasional Istanbul (IST) - Istanbul, Turki</option>
<option value="Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko">Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko</option>
<option value="Bandara Internasional Dubai Creek (DCG) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Creek (DCG) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Dallas/Fort Worth (DFW) - Dallas/Fort Worth, Amerika Serikat">Bandara Internasional Dallas/Fort Worth (DFW) - Dallas/Fort Worth, Amerika Serikat</option>
<option value="Bandara Internasional Dubai Creek (DCG) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Creek (DCG) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Orlando (MCO) - Orlando, Amerika Serikat">Bandara Internasional Orlando (MCO) - Orlando, Amerika Serikat</option>
<option value="Bandara Internasional Ninoy Aquino (MNL) - Manila, Filipina">Bandara Internasional Ninoy Aquino (MNL) - Manila, Filipina</option>
<option value="Bandara Internasional Indira Gandhi (DEL) - Delhi, India">Bandara Internasional Indira Gandhi (DEL) - Delhi, India</option>
<option value="Bandara Internasional Chhatrapati Shivaji (BOM) - Mumbai, India">Bandara Internasional Chhatrapati Shivaji (BOM) - Mumbai, India</option>
<option value="Bandara Internasional Kempegowda (BLR) - Bengaluru, India">Bandara Internasional Kempegowda (BLR) - Bengaluru, India</option>
<option value="Bandara Internasional Rajiv Gandhi (HYD) - Hyderabad, India">Bandara Internasional Rajiv Gandhi (HYD) - Hyderabad, India</option>
<option value="Bandara Internasional Chennai (MAA) - Chennai, India">Bandara Internasional Chennai (MAA) - Chennai, India</option>
<option value="Bandara Internasional Netaji Subhas Chandra Bose (CCU) - Kolkata, India">Bandara Internasional Netaji Subhas Chandra Bose (CCU) - Kolkata, India</option>
<option value="Bandara Internasional Chaudhary Charan Singh (LKO) - Lucknow, India">Bandara Internasional Chaudhary Charan Singh (LKO) - Lucknow, India</option>
<option value="Bandara Internasional Jaipur (JAI) - Jaipur, India">Bandara Internasional Jaipur (JAI) - Jaipur, India</option>
<option value="Bandara Internasional Sardar Vallabhbhai Patel (AMD) - Ahmedabad, India">Bandara Internasional Sardar Vallabhbhai Patel (AMD) - Ahmedabad, India</option>
<option value="Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Bandaranaike (CMB) - Colombo, Sri Lanka">Bandara Internasional Bandaranaike (CMB) - Colombo, Sri Lanka</option>
<option value="Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi">Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi</option>
<option value="Bandara Internasional King Khalid (RUH) - Riyadh, Arab Saudi">Bandara Internasional King Khalid (RUH) - Riyadh, Arab Saudi</option>
<option value="Bandara Internasional Prince Mohammad bin Abdulaziz (MED) - Madinah, Arab Saudi">Bandara Internasional Prince Mohammad bin Abdulaziz (MED) - Madinah, Arab Saudi</option>
<option value="Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko">Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko</option>
<option value="Bandara Internasional Cairo (CAI) - Cairo, Mesir">Bandara Internasional Cairo (CAI) - Cairo, Mesir</option>
<option value="Bandara Internasional Hamad (DOH) - Doha, Qatar">Bandara Internasional Hamad (DOH) - Doha, Qatar</option>
<option value="Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Hamad (DOH) - Doha, Qatar">Bandara Internasional Hamad (DOH) - Doha, Qatar</option>
<option value="Bandara Internasional Istanbul (IST) - Istanbul, Turki">Bandara Internasional Istanbul (IST) - Istanbul, Turki</option>
<option value="Bandara Internasional Muscat (MCT) - Muscat, Oman">Bandara Internasional Muscat (MCT) - Muscat, Oman</option>
<option value="Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko">Bandara Internasional Mohammed V (CMN) - Casablanca, Maroko</option>
<option value="Bandara Internasional Cairo (CAI) - Cairo, Mesir">Bandara Internasional Cairo (CAI) - Cairo, Mesir</option>
<option value="Bandara Internasional Hamad (DOH) - Doha, Qatar">Bandara Internasional Hamad (DOH) - Doha, Qatar</option>
<option value="Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai Al Maktoum (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Hamad (DOH) - Doha, Qatar">Bandara Internasional Hamad (DOH) - Doha, Qatar</option>
<option value="Bandara Internasional Istanbul (IST) - Istanbul, Turki">Bandara Internasional Istanbul (IST) - Istanbul, Turki</option>
<option value="Bandara Internasional Muscat (MCT) - Muscat, Oman">Bandara Internasional Muscat (MCT) - Muscat, Oman</option>
<option value="Bandara Internasional Eleftherios Venizelos (ATH) - Athena, Yunani">Bandara Internasional Eleftherios Venizelos (ATH) - Athena, Yunani</option>
<option value="Bandara Internasional Dublin (DUB) - Dublin, Irlandia">Bandara Internasional Dublin (DUB) - Dublin, Irlandia</option>
<option value="Bandara Internasional Sydney (SYD) - Sydney, Australia">Bandara Internasional Sydney (SYD) - Sydney, Australia</option>
<option value="Bandara Internasional Auckland (AKL) - Auckland, Selandia Baru">Bandara Internasional Auckland (AKL) - Auckland, Selandia Baru</option>
<option value="Bandara Internasional Hong Kong (HKG) - Hong Kong">Bandara Internasional Hong Kong (HKG) - Hong Kong</option>
<option value="Bandara Internasional Incheon (ICN) - Seoul, Korea Selatan">Bandara Internasional Incheon (ICN) - Seoul, Korea Selatan</option>
<option value="Bandara Internasional Narita (NRT) - Tokyo, Jepang">Bandara Internasional Narita (NRT) - Tokyo, Jepang</option>
<option value="Bandara Internasional Dubai (DXB) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai (DXB) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Heathrow (LHR) - London, Inggris">Bandara Internasional Heathrow (LHR) - London, Inggris</option>
<option value="Bandara Internasional John F. Kennedy (JFK) - New York City, Amerika Serikat">Bandara Internasional John F. Kennedy (JFK) - New York City, Amerika Serikat</option>
<option value="Bandara Internasional Charles de Gaulle (CDG) - Paris, Prancis">Bandara Internasional Charles de Gaulle (CDG) - Paris, Prancis</option>
<option value="Bandara Internasional Frankfurt (FRA) - Frankfurt, Jerman">Bandara Internasional Frankfurt (FRA) - Frankfurt, Jerman</option>
<option value="Bandara Internasional Los Angeles (LAX) - Los Angeles, Amerika Serikat">Bandara Internasional Los Angeles (LAX) - Los Angeles, Amerika Serikat</option>
<option value="Bandara Internasional Barajas (MAD) - Madrid, Spanyol">Bandara Internasional Barajas (MAD) - Madrid, Spanyol</option>
<option value="Bandara Internasional Leonardo da Vinci (FCO) - Roma, Italia">Bandara Internasional Leonardo da Vinci (FCO) - Roma, Italia</option>
<option value="Bandara Internasional O'Hare (ORD) - Chicago, Amerika Serikat">Bandara Internasional O'Hare (ORD) - Chicago, Amerika Serikat</option>
<option value="Bandara Internasional Denver (DEN) - Denver, Amerika Serikat">Bandara Internasional Denver (DEN) - Denver, Amerika Serikat</option>
<option value="Bandara Internasional Dubai World Central (DWC) - Dubai, Uni Emirat Arab">Bandara Internasional Dubai World Central (DWC) - Dubai, Uni Emirat Arab</option>
<option value="Bandara Internasional Abu Dhabi (AUH) - Abu Dhabi, Uni Emirat Arab">Bandara Internasional Abu Dhabi (AUH) - Abu Dhabi, Uni Emirat Arab</option>
<option value="Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi">Bandara Internasional King Abdulaziz (JED) - Jeddah, Arab Saudi</option>
        </select>
        <label for="date">Tanggal Keberangkatan:</label>
        <input type="date" id="date" name="date" required><br><br>
        
        <button type="submit">Cari Tiket</button>
    </form>
</div>


<div class="search-form" id="bus-form">
    <form action="caribus.php" method="POST">
        <h4>Booking Tiket Bus</h4>
        <div class="form-horizontal"> <!-- Mengatur tata letak horizontal -->
        <div class="form-vertical">
        <h6><img src="img/icon.svg">Tujuan Terminal</h6>
        <label for="terminal_keberangkatan">Terminal Asal</label><br>
    
        <select class="form-control" id="terminal_keberangkatan" name="terminal_keberangkatan" required>
            <!-- Pilihan Pelabuhan keberangkatan -->
            <option value="">Pilih Terminal Keberangkatan</option>
            <option value="Terminal Lebak Bulus">Terminal Lebak Bulus</option>
        <option value="Terminal Kampung Rambutan">Terminal Kampung Rambutan</option>
        <option value="Terminal Kalideres">Terminal Kalideres</option>
        <option value="Terminal Pulo Gadung">Terminal Pulo Gadung</option>
        <option value="Terminal Cililitan">Terminal Cililitan</option>
        <option value="Terminal Rawamangun">Terminal Rawamangun</option>
        <option value="Terminal Blok M">Terminal Blok M</option>
        <option value="Terminal Tanjung Priok">Terminal Tanjung Priok</option>
        <option value="Terminal Kampung Melayu">Terminal Kampung Melayu</option>
        <option value="Terminal Pasar Minggu">Terminal Pasar Minggu</option>
        <option value="Terminal Senen">Terminal Senen</option>
        <option value="Terminal Pulogadung">Terminal Pulogadung</option>
        <option value="Terminal Pulo Gebang">Terminal Pulo Gebang</option>
        <option value="Terminal Tanah Abang">Terminal Tanah Abang</option>
        <option value="Terminal Manggarai">Terminal Manggarai</option>
        <option value="Terminal Pondok Cabe">Terminal Pondok Cabe</option>
        <option value="Terminal Bintaro">Terminal Bintaro</option>
        <option value="Terminal Kp Rambutan">Terminal Kp Rambutan</option>
        <option value="Terminal Cibubur">Terminal Cibubur</option>
        <option value="Terminal Depok">Terminal Depok</option>
        <option value="Terminal Kp Melayu">Terminal Kp Melayu</option>
        <option value="Terminal Kebayoran">Terminal Kebayoran</option>
        <option value="Terminal Kuningan">Terminal Kuningan</option>
        <option value="Terminal Ciputat">Terminal Ciputat</option>
        <option value="Terminal Pasar Rebo">Terminal Pasar Rebo</option>
        <option value="Terminal Serpong">Terminal Serpong</option>
        <option value="Terminal Cinere">Terminal Cinere</option>
        <option value="Terminal Pondok Labu">Terminal Pondok Labu</option>
        <option value="Terminal Kp Cina">Terminal Kp Cina</option>
        <option value="Terminal Gandaria">Terminal Gandaria</option>
        <option value="Terminal Lenteng Agung">Terminal Lenteng Agung</option>
        <option value="Terminal Tebet">Terminal Tebet</option>
        <option value="Terminal Jagakarsa">Terminal Jagakarsa</option>
        <option value="Terminal Ciracas">Terminal Ciracas</option>
        <option value="Terminal Ciganjur">Terminal Ciganjur</option>
        <option value="Terminal Cijantung">Terminal Cijantung</option>
        <option value="Terminal Cipinang">Terminal Cipinang</option>
        <option value="Terminal Klp Dua">Terminal Klp Dua</option>
        <option value="Terminal Klp Gading">Terminal Klp Gading</option>
        <option value="Terminal Cakung">Terminal Cakung</option>
        <option value="Terminal Cikokol">Terminal Cikokol</option>
        <option value="Terminal Sawah Besar">Terminal Sawah Besar</option>
        <option value="Terminal Setiabudi">Terminal Setiabudi</option>
        <option value="Terminal Kalisari">Terminal Kalisari</option>
        <option value="Terminal Karet">Terminal Karet</option>
        <option value="Terminal Kedoya">Terminal Kedoya</option>
        <option value="Terminal Grogol">Terminal Grogol</option>
        <option value="Terminal Slipi">Terminal Slipi</option>
        <option value="Terminal Kelapa Gading">Terminal Kelapa Gading</option>
        <option value="Terminal Cibitung">Terminal Cibitung</option>
        <option value="Terminal Margonda">Terminal Margonda</option>
        <option value="Terminal Parung">Terminal Parung</option>
        <option value="Terminal Pasar Jumat">Terminal Pasar Jumat</option>
        <option value="Terminal Rempoa">Terminal Rempoa</option>
        <option value="Terminal Balaraja">Terminal Balaraja</option>
        <option value="Terminal BSD">Terminal BSD</option>
        <option value="Terminal Cikarang">Terminal Cikarang</option>
        <option value="Terminal Kemanggisan">Terminal Kemanggisan</option>
        <option value="Terminal Kramat Jati">Terminal Kramat Jati</option>
        <option value="Terminal Kukusan">Terminal Kukusan</option>
        <option value="Terminal Pabuaran">Terminal Pabuaran</option>
        <option value="Terminal Pagedangan">Terminal Pagedangan</option>
        <option value="Terminal Poris">Terminal Poris</option>
        <option value="Terminal Serang">Terminal Serang</option>
        <option value="Terminal Soekarno Hatta">Terminal Soekarno Hatta</option>
        <option value="Terminal Tangerang">Terminal Tangerang</option>
        <option value="Terminal Tegal Alur">Terminal Tegal Alur</option>
        <option value="Terminal Teluk Naga">Terminal Teluk Naga</option>
        <option value="Terminal Tigaraksa">Terminal Tigaraksa</option>
        <option value="Terminal Tugu">Terminal Tugu</option>
        <option value="Terminal Waru">Terminal Waru</option>
        <option value="Terminal Soreang">Terminal Soreang</option>
        <option value="Terminal Batununggal">Terminal Batununggal</option>
        <option value="Terminal Cicaheum">Terminal Cicaheum</option>
        <option value="Terminal Cikutra">Terminal Cikutra</option>
        <option value="Terminal Cimindi">Terminal Cimindi</option>
        <option value="Terminal Cipedes">Terminal Cipedes</option>
        <option value="Terminal Cisomang Baru">Terminal Cisomang Baru</option>
        <option value="Terminal Cisomang Lama">Terminal Cisomang Lama</option>
        <option value="Terminal Guntur">Terminal Guntur</option>
        <option value="Terminal Jamika">Terminal Jamika</option>
        <option value="Terminal Karang Setra">Terminal Karang Setra</option>
        <option value="Terminal Kebon Kelapa">Terminal Kebon Kelapa</option>
        <option value="Terminal Lengkong">Terminal Lengkong</option>
        <option value="Terminal Leuwipanjang">Terminal Leuwipanjang</option>
        <option value="Terminal Soreang">Terminal Soreang</option>
        <option value="Terminal Cipeundeuy">Terminal Cipeundeuy</option>
        <option value="Terminal Margaasih">Terminal Margaasih</option>
        <option value="Terminal Baleendah">Terminal Baleendah</option>
        <option value="Terminal Pasirjati">Terminal Pasirjati</option>
        <option value="Terminal Tajur">Terminal Tajur</option>
        <option value="Terminal Cimahi">Terminal Cimahi</option>
        <option value="Terminal Cibabat">Terminal Cibabat</option>
        <option value="Terminal Cibolerang">Terminal Cibolerang</option>
        <option value="Terminal Cibeusi">Terminal Cibeusi</option>
        <option value="Terminal Cihanjuang">Terminal Cihanjuang</option>
        <option value="Terminal Cimareme">Terminal Cimareme</option>
        <option value="Terminal Cipageran">Terminal Cipageran</option>
        <option value="Terminal Cipatat">Terminal Cipatat</option>
        <option value="Terminal Cipeundeuy">Terminal Cipeundeuy</option>
        <option value="Terminal Cisarua">Terminal Cisarua</option>
        <option value="Terminal Dayeuhkolot">Terminal Dayeuhkolot</option>
        <option value="Terminal Garut">Terminal Garut</option>
        <option value="Terminal Katapang">Terminal Katapang</option>
        <option value="Terminal Margahayu">Terminal Margahayu</option>
        <option value="Terminal Majalaya">Terminal Majalaya</option>
        <option value="Terminal Rancaekek">Terminal Rancaekek</option>
        <option value="Terminal Soreang">Terminal Soreang</option>
        <option value="Terminal Bojongsoang">Terminal Bojongsoang</option>
        <option value="Terminal Cicalengka">Terminal Cicalengka</option>
        <option value="Terminal Cileunyi">Terminal Cileunyi</option>
        <option value="Terminal Jatinangor">Terminal Jatinangor</option>
        <option value="Terminal Paseh">Terminal Paseh</option>
        <option value="Terminal Tanjungsari">Terminal Tanjungsari</option>
        <option value="Terminal Cigugur">Terminal Cigugur</option>
        <option value="Terminal Banjaran">Terminal Banjaran</option>
        <option value="Terminal Cipeundeuy">Terminal Cipeundeuy</option>
        <option value="Terminal Leuwigoong">Terminal Leuwigoong</option>
        <option value="Terminal Lembang">Terminal Lembang</option>
        <option value="Terminal Padalarang">Terminal Padalarang</option>
        <option value="Terminal Parongpong">Terminal Parongpong</option>
        <option value="Terminal Ujung Berung">Terminal Ujung Berung</option>
        <option value="Terminal Cimareme">Terminal Cimareme</option>
        <option value="Terminal Cipageran">Terminal Cipageran</option>
        <option value="Terminal Cipatat">Terminal Cipatat</option>
        <option value="Terminal Cipeundeuy">Terminal Cipeundeuy</option>
        <option value="Terminal Cisarua">Terminal Cisarua</option>
        <option value="Terminal Dayeuhkolot">Terminal Dayeuhkolot</option>
        <option value="Terminal Garut">Terminal Garut</option>
        <option value="Terminal Katapang">Terminal Katapang</option>
        <option value="Terminal Margahayu">Terminal Margahayu</option>
        <option value="Terminal Majalaya">Terminal Majalaya</option>
        <option value="Terminal Rancaekek">Terminal Rancaekek</option>
        <option value="Terminal Soreang">Terminal Soreang</option>
        <option value="Terminal Bojongsoang">Terminal Bojongsoang</option>
        <option value="Terminal Cicalengka">Terminal Cicalengka</option>
        <option value="Terminal Cileunyi">Terminal Cileunyi</option>
        <option value="Terminal Jatinangor">Terminal Jatinangor</option>
        <option value="Terminal Paseh">Terminal Paseh</option>
        <option value="Terminal Tanjungsari">Terminal Tanjungsari</option>
        <option value="Terminal Cigugur">Terminal Cigugur</option>
        <option value="Terminal Banjaran">Terminal Banjaran</option>
        <option value="Terminal Cipeundeuy">Terminal Cipeundeuy</option>
        <option value="Terminal Leuwigoong">Terminal Leuwigoong</option>
        <option value="Terminal Lembang">Terminal Lembang</option>
        <option value="Terminal Padalarang">Terminal Padalarang</option>
        <option value="Terminal Parongpong">Terminal Parongpong</option>
        <option value="Terminal Ujung Berung">Terminal Ujung Berung</option>
        <option value="Terminal Pasirkoja">Terminal Pasirkoja</option>
        <option value="Terminal Bandung">Terminal Bandung</option>
        <option value="Terminal Cileunyi">Terminal Cileunyi</option>
        <option value="Terminal Majalaya">Terminal Majalaya</option>
        <option value="Terminal Soreang">Terminal Soreang</option>
        <option value="Terminal Ciawi">Terminal Ciawi</option>
        <option value="Terminal Cisarua">Terminal Cisarua</option>
        <option value="Terminal Cipanas">Terminal Cipanas</option>
        <option value="Terminal Citeko">Terminal Citeko</option>
        <option value="Terminal Cisarua">Terminal Cisarua</option>
        <option value="Terminal Ciawi">Terminal Ciawi</option>
        <option value="Terminal Cipanas">Terminal Cipanas</option>
        <option value="Terminal Citeko">Terminal Citeko</option>
        <option value="Terminal Cibodas">Terminal Cibodas</option>
        <option value="Terminal Ciwidey">Terminal Ciwidey</option>
        <option value="Terminal Leuwi Panjang">Terminal Leuwi Panjang</option>
        <option value="Terminal Kopo">Terminal Kopo</option>
        <option value="Terminal Buah Batu">Terminal Buah Batu</option>
        <option value="Terminal Leuwigajah">Terminal Leuwigajah</option>
        <option value="Terminal Baros">Terminal Baros</option>
        <option value="Terminal Purwakarta">Terminal Purwakarta</option>
        <option value="Terminal Ciater">Terminal Ciater</option>
        <option value="Terminal Padalarang">Terminal Padalarang</option>
        <option value="Terminal Lembang">Terminal Lembang</option>
        <option value="Terminal Parongpong">Terminal Parongpong</option>
        <option value="Terminal Cililin">Terminal Cililin</option>
        <option value="Terminal Cimahi">Terminal Cimahi</option>
        <option value="Terminal Majalaya">Terminal Majalaya</option>
        <option value="Terminal Soreang">Terminal Soreang</option>
        <option value="Terminal Ciranjang">Terminal Ciranjang</option>
        <option value="Terminal Sukabumi">Terminal Sukabumi</option>
        <option value="Terminal Cisaat">Terminal Cisaat</option>
        <option value="Terminal Cibadak">Terminal Cibadak</option>
        <option value="Terminal Ciambar">Terminal Ciambar</option>
        <option value="Terminal Cicurug">Terminal Cicurug</option>
        <option value="Terminal Cikembar">Terminal Cikembar</option>
        <option value="Terminal Cikidang">Terminal Cikidang</option>
        <option value="Terminal Ciracap">Terminal Ciracap</option>
        <option value="Terminal Cisaat">Terminal Cisaat</option>
        <option value="Terminal Cibadak">Terminal Cibadak</option>
        <option value="Terminal Ciambar">Terminal Ciambar</option>
        <option value="Terminal Cicurug">Terminal Cicurug</option>
        <option value="Terminal Cikembar">Terminal Cikembar</option>
        <option value="Terminal Cikidang">Terminal Cikidang</option>
        <option value="Terminal Ciracap">Terminal Ciracap</option>
        <option value="Terminal Pelabuhan Ratu">Terminal Pelabuhan Ratu</option>
        <option value="Terminal Sukabumi">Terminal Sukabumi</option>
        <option value="Terminal Cibadak">Terminal Cibadak</option>
        <option value="Terminal Cibuntu">Terminal Cibuntu</option>
        <option value="Terminal Cidadap">Terminal Cidadap</option>
        <option value="Terminal Cikakak">Terminal Cikakak</option>
        <option value="Terminal Cicurug">Terminal Cicurug</option>
        <option value="Terminal Cijulang">Terminal Cijulang</option>
        <option value="Terminal Cikatomas">Terminal Cikatomas</option>
        <option value="Terminal Cisoka">Terminal Cisoka</option>
        <option value="Terminal Maja">Terminal Maja</option>
        <option value="Terminal Malingping">Terminal Malingping</option>
        <option value="Terminal Rangkasbitung">Terminal Rangkasbitung</option>
        <option value="Terminal Caringin">Terminal Caringin</option>
        <option value="Terminal Bojong">Terminal Bojong</option>
        <option value="Terminal Sajira">Terminal Sajira</option>
        <option value="Terminal Serang">Terminal Serang</option>
        <option value="Terminal Pandeglang">Terminal Pandeglang</option>
        <option value="Terminal Banten">Terminal Banten</option>
        <option value="Terminal Rangkasbitung">Terminal Rangkasbitung</option>
        <option value="Terminal Tangerang">Terminal Tangerang</option>
        <option value="Terminal Cikupa">Terminal Cikupa</option>
        <option value="Terminal Mauk">Terminal Mauk</option>
        <option value="Terminal Sepatan">Terminal Sepatan</option>
        <option value="Terminal Serang">Terminal Serang</option>
        <option value="Terminal Cilegon">Terminal Cilegon</option>
        <option value="Terminal Labuhan">Terminal Labuhan</option>
        <option value="Terminal Panimbang">Terminal Panimbang</option>
        <option value="Terminal Sumur">Terminal Sumur</option>
        <option value="Terminal Bayah">Terminal Bayah</option>
        <option value="Terminal Cikarae">Terminal Cikarae</option>
        <option value="Terminal Cipanas">Terminal Cipanas</option>
        <option value="Terminal Cisimeut">Terminal Cisimeut</option>
        <option value="Terminal Cisuka">Terminal Cisuka</option>
        <option value="Terminal Kadugede">Terminal Kadugede</option>
        <option value="Terminal Kalapa">Terminal Kalapa</option>
        <option value="Terminal Limbangan">Terminal Limbangan</option>
        <option value="Terminal Panawuan">Terminal Panawuan</option>
        <option value="Terminal Pasir Eurih">Terminal Pasir Eurih</option>
        <option value="Terminal Singaparna">Terminal Singaparna</option>
        <option value="Terminal Wanaraja">Terminal Wanaraja</option>
    </select>
      <img class="imgal"src="img/cvws.svg"> 
    <label for="terminal_kedatangan">Terminal Tujuan:</label>
    <select class="form-control" id="terminal_kedatangan" name="terminal_kedatangan" required>
        <!-- Pilihan bandara kedatangan -->
        <option value="">Pilih Terminal Tujuan</option>
        <option value="Terminal Lebak Bulus">Terminal Lebak Bulus</option>
<option value="Terminal Kampung Rambutan">Terminal Kampung Rambutan</option>
<option value="Terminal Kalideres">Terminal Kalideres</option>
<option value="Terminal Pulo Gadung">Terminal Pulo Gadung</option>
<option value="Terminal Cililitan">Terminal Cililitan</option>
<option value="Terminal Rawamangun">Terminal Rawamangun</option>
<option value="Terminal Blok M">Terminal Blok M</option>
<option value="Terminal Tanjung Priok">Terminal Tanjung Priok</option>
<option value="Terminal Kampung Melayu">Terminal Kampung Melayu</option>
<option value="Terminal Pasar Minggu">Terminal Pasar Minggu</option>
<option value="Terminal Senen">Terminal Senen</option>
<option value="Terminal Pulogadung">Terminal Pulogadung</option>
<option value="Terminal Pulo Gebang">Terminal Pulo Gebang</option>
<option value="Terminal Tanah Abang">Terminal Tanah Abang</option>
<option value="Terminal Manggarai">Terminal Manggarai</option>
<option value="Terminal Pondok Cabe">Terminal Pondok Cabe</option>
<option value="Terminal Bintaro">Terminal Bintaro</option>
<option value="Terminal Kp Rambutan">Terminal Kp Rambutan</option>
<option value="Terminal Cibubur">Terminal Cibubur</option>
<option value="Terminal Depok">Terminal Depok</option>
<option value="Terminal Kp Melayu">Terminal Kp Melayu</option>
<option value="Terminal Kebayoran">Terminal Kebayoran</option>
<option value="Terminal Kuningan">Terminal Kuningan</option>
<option value="Terminal Ciputat">Terminal Ciputat</option>
<option value="Terminal Pasar Rebo">Terminal Pasar Rebo</option>
<option value="Terminal Serpong">Terminal Serpong</option>
<option value="Terminal Cinere">Terminal Cinere</option>
<option value="Terminal Pondok Labu">Terminal Pondok Labu</option>
<option value="Terminal Kp Cina">Terminal Kp Cina</option>
<option value="Terminal Gandaria">Terminal Gandaria</option>
<option value="Terminal Lenteng Agung">Terminal Lenteng Agung</option>
<option value="Terminal Tebet">Terminal Tebet</option>
<option value="Terminal Jagakarsa">Terminal Jagakarsa</option>
<option value="Terminal Ciracas">Terminal Ciracas</option>
<option value="Terminal Ciganjur">Terminal Ciganjur</option>
<option value="Terminal Cijantung">Terminal Cijantung</option>
<option value="Terminal Cipinang">Terminal Cipinang</option>
<option value="Terminal Klp Dua">Terminal Klp Dua</option>
<option value="Terminal Klp Gading">Terminal Klp Gading</option>
<option value="Terminal Cakung">Terminal Cakung</option>
<option value="Terminal Cikokol">Terminal Cikokol</option>
<option value="Terminal Sawah Besar">Terminal Sawah Besar</option>
<option value="Terminal Setiabudi">Terminal Setiabudi</option>
<option value="Terminal Kalisari">Terminal Kalisari</option>
<option value="Terminal Karet">Terminal Karet</option>
<option value="Terminal Kedoya">Terminal Kedoya</option>
<option value="Terminal Grogol">Terminal Grogol</option>
<option value="Terminal Slipi">Terminal Slipi</option>
<option value="Terminal Kelapa Gading">Terminal Kelapa Gading</option>
<option value="Terminal Cibitung">Terminal Cibitung</option>
<option value="Terminal Margonda">Terminal Margonda</option>
<option value="Terminal Parung">Terminal Parung</option>
<option value="Terminal Pasar Jumat">Terminal Pasar Jumat</option>
<option value="Terminal Rempoa">Terminal Rempoa</option>
<option value="Terminal Balaraja">Terminal Balaraja</option>
<option value="Terminal BSD">Terminal BSD</option>
<option value="Terminal Cikarang">Terminal Cikarang</option>
<option value="Terminal Kemanggisan">Terminal Kemanggisan</option>
<option value="Terminal Kramat Jati">Terminal Kramat Jati</option>
<option value="Terminal Kukusan">Terminal Kukusan</option>
<option value="Terminal Pabuaran">Terminal Pabuaran</option>
<option value="Terminal Pagedangan">Terminal Pagedangan</option>
<option value="Terminal Poris">Terminal Poris</option>
<option value="Terminal Serang">Terminal Serang</option>
<option value="Terminal Soekarno Hatta">Terminal Soekarno Hatta</option>
<option value="Terminal Tangerang">Terminal Tangerang</option>
<option value="Terminal Tegal Alur">Terminal Tegal Alur</option>
<option value="Terminal Teluk Naga">Terminal Teluk Naga</option>
<option value="Terminal Tigaraksa">Terminal Tigaraksa</option>
<option value="Terminal Tugu">Terminal Tugu</option>
<option value="Terminal Waru">Terminal Waru</option>
<option value="Terminal Soreang">Terminal Soreang</option>
<option value="Terminal Batununggal">Terminal Batununggal</option>
<option value="Terminal Cicaheum">Terminal Cicaheum</option>
<option value="Terminal Cikutra">Terminal Cikutra</option>
<option value="Terminal Cimindi">Terminal Cimindi</option>
<option value="Terminal Cipedes">Terminal Cipedes</option>
<option value="Terminal Cisomang Baru">Terminal Cisomang Baru</option>
<option value="Terminal Cisomang Lama">Terminal Cisomang Lama</option>
<option value="Terminal Guntur">Terminal Guntur</option>
<option value="Terminal Jamika">Terminal Jamika</option>
<option value="Terminal Karang Setra">Terminal Karang Setra</option>
<option value="Terminal Kebon Kelapa">Terminal Kebon Kelapa</option>
<option value="Terminal Lengkong">Terminal Lengkong</option>
<option value="Terminal Leuwipanjang">Terminal Leuwipanjang</option>
<option value="Terminal Soreang">Terminal Soreang</option>
<option value="Terminal Cipeundeuy">Terminal Cipeundeuy</option>
<option value="Terminal Margaasih">Terminal Margaasih</option>
<option value="Terminal Baleendah">Terminal Baleendah</option>
<option value="Terminal Pasirjati">Terminal Pasirjati</option>
<option value="Terminal Tajur">Terminal Tajur</option>
<option value="Terminal Cimahi">Terminal Cimahi</option>
<option value="Terminal Cibabat">Terminal Cibabat</option>
<option value="Terminal Cibolerang">Terminal Cibolerang</option>
<option value="Terminal Cibeusi">Terminal Cibeusi</option>
<option value="Terminal Cihanjuang">Terminal Cihanjuang</option>
<option value="Terminal Cimareme">Terminal Cimareme</option>
<option value="Terminal Cipageran">Terminal Cipageran</option>
<option value="Terminal Cipatat">Terminal Cipatat</option>
<option value="Terminal Cipeundeuy">Terminal Cipeundeuy</option>
<option value="Terminal Cisarua">Terminal Cisarua</option>
<option value="Terminal Dayeuhkolot">Terminal Dayeuhkolot</option>
<option value="Terminal Garut">Terminal Garut</option>
<option value="Terminal Katapang">Terminal Katapang</option>
<option value="Terminal Margahayu">Terminal Margahayu</option>
<option value="Terminal Majalaya">Terminal Majalaya</option>
<option value="Terminal Rancaekek">Terminal Rancaekek</option>
<option value="Terminal Soreang">Terminal Soreang</option>
<option value="Terminal Bojongsoang">Terminal Bojongsoang</option>
<option value="Terminal Cicalengka">Terminal Cicalengka</option>
<option value="Terminal Cileunyi">Terminal Cileunyi</option>
<option value="Terminal Jatinangor">Terminal Jatinangor</option>
<option value="Terminal Paseh">Terminal Paseh</option>
<option value="Terminal Tanjungsari">Terminal Tanjungsari</option>
<option value="Terminal Cigugur">Terminal Cigugur</option>
<option value="Terminal Banjaran">Terminal Banjaran</option>
<option value="Terminal Cipeundeuy">Terminal Cipeundeuy</option>
<option value="Terminal Leuwigoong">Terminal Leuwigoong</option>
<option value="Terminal Lembang">Terminal Lembang</option>
<option value="Terminal Padalarang">Terminal Padalarang</option>
<option value="Terminal Parongpong">Terminal Parongpong</option>
<option value="Terminal Ujung Berung">Terminal Ujung Berung</option>
<option value="Terminal Cimareme">Terminal Cimareme</option>
<option value="Terminal Cipageran">Terminal Cipageran</option>
<option value="Terminal Cipatat">Terminal Cipatat</option>
<option value="Terminal Cipeundeuy">Terminal Cipeundeuy</option>
<option value="Terminal Cisarua">Terminal Cisarua</option>
<option value="Terminal Dayeuhkolot">Terminal Dayeuhkolot</option>
<option value="Terminal Garut">Terminal Garut</option>
<option value="Terminal Katapang">Terminal Katapang</option>
<option value="Terminal Margahayu">Terminal Margahayu</option>
<option value="Terminal Majalaya">Terminal Majalaya</option>
<option value="Terminal Rancaekek">Terminal Rancaekek</option>
<option value="Terminal Soreang">Terminal Soreang</option>
<option value="Terminal Bojongsoang">Terminal Bojongsoang</option>
<option value="Terminal Cicalengka">Terminal Cicalengka</option>
<option value="Terminal Cileunyi">Terminal Cileunyi</option>
<option value="Terminal Jatinangor">Terminal Jatinangor</option>
<option value="Terminal Paseh">Terminal Paseh</option>
<option value="Terminal Tanjungsari">Terminal Tanjungsari</option>
<option value="Terminal Cigugur">Terminal Cigugur</option>
<option value="Terminal Banjaran">Terminal Banjaran</option>
<option value="Terminal Cipeundeuy">Terminal Cipeundeuy</option>
<option value="Terminal Leuwigoong">Terminal Leuwigoong</option>
<option value="Terminal Lembang">Terminal Lembang</option>
<option value="Terminal Padalarang">Terminal Padalarang</option>
<option value="Terminal Parongpong">Terminal Parongpong</option>
<option value="Terminal Ujung Berung">Terminal Ujung Berung</option>
<option value="Terminal Pasirkoja">Terminal Pasirkoja</option>
<option value="Terminal Bandung">Terminal Bandung</option>
<option value="Terminal Cileunyi">Terminal Cileunyi</option>
<option value="Terminal Majalaya">Terminal Majalaya</option>
<option value="Terminal Soreang">Terminal Soreang</option>
<option value="Terminal Ciawi">Terminal Ciawi</option>
<option value="Terminal Cisarua">Terminal Cisarua</option>
<option value="Terminal Cipanas">Terminal Cipanas</option>
<option value="Terminal Citeko">Terminal Citeko</option>
<option value="Terminal Cisarua">Terminal Cisarua</option>
<option value="Terminal Ciawi">Terminal Ciawi</option>
<option value="Terminal Cipanas">Terminal Cipanas</option>
<option value="Terminal Citeko">Terminal Citeko</option>
<option value="Terminal Cibodas">Terminal Cibodas</option>
<option value="Terminal Ciwidey">Terminal Ciwidey</option>
<option value="Terminal Leuwi Panjang">Terminal Leuwi Panjang</option>
<option value="Terminal Kopo">Terminal Kopo</option>
<option value="Terminal Buah Batu">Terminal Buah Batu</option>
<option value="Terminal Leuwigajah">Terminal Leuwigajah</option>
<option value="Terminal Baros">Terminal Baros</option>
<option value="Terminal Purwakarta">Terminal Purwakarta</option>
<option value="Terminal Ciater">Terminal Ciater</option>
<option value="Terminal Padalarang">Terminal Padalarang</option>
<option value="Terminal Lembang">Terminal Lembang</option>
<option value="Terminal Parongpong">Terminal Parongpong</option>
<option value="Terminal Cililin">Terminal Cililin</option>
<option value="Terminal Cimahi">Terminal Cimahi</option>
<option value="Terminal Majalaya">Terminal Majalaya</option>
<option value="Terminal Soreang">Terminal Soreang</option>
<option value="Terminal Ciranjang">Terminal Ciranjang</option>
<option value="Terminal Sukabumi">Terminal Sukabumi</option>
<option value="Terminal Cisaat">Terminal Cisaat</option>
<option value="Terminal Cibadak">Terminal Cibadak</option>
<option value="Terminal Ciambar">Terminal Ciambar</option>
<option value="Terminal Cicurug">Terminal Cicurug</option>
<option value="Terminal Cikembar">Terminal Cikembar</option>
<option value="Terminal Cikidang">Terminal Cikidang</option>
<option value="Terminal Ciracap">Terminal Ciracap</option>
<option value="Terminal Cisaat">Terminal Cisaat</option>
<option value="Terminal Cibadak">Terminal Cibadak</option>
<option value="Terminal Ciambar">Terminal Ciambar</option>
<option value="Terminal Cicurug">Terminal Cicurug</option>
<option value="Terminal Cikembar">Terminal Cikembar</option>
<option value="Terminal Cikidang">Terminal Cikidang</option>
<option value="Terminal Ciracap">Terminal Ciracap</option>
<option value="Terminal Pelabuhan Ratu">Terminal Pelabuhan Ratu</option>
<option value="Terminal Sukabumi">Terminal Sukabumi</option>
<option value="Terminal Cibadak">Terminal Cibadak</option>
<option value="Terminal Cibuntu">Terminal Cibuntu</option>
<option value="Terminal Cidadap">Terminal Cidadap</option>
<option value="Terminal Cikakak">Terminal Cikakak</option>
<option value="Terminal Cicurug">Terminal Cicurug</option>
<option value="Terminal Cijulang">Terminal Cijulang</option>
<option value="Terminal Cikatomas">Terminal Cikatomas</option>
<option value="Terminal Cisoka">Terminal Cisoka</option>
<option value="Terminal Maja">Terminal Maja</option>
<option value="Terminal Malingping">Terminal Malingping</option>
<option value="Terminal Rangkasbitung">Terminal Rangkasbitung</option>
<option value="Terminal Caringin">Terminal Caringin</option>
<option value="Terminal Bojong">Terminal Bojong</option>
<option value="Terminal Sajira">Terminal Sajira</option>
<option value="Terminal Serang">Terminal Serang</option>
<option value="Terminal Pandeglang">Terminal Pandeglang</option>
<option value="Terminal Banten">Terminal Banten</option>
<option value="Terminal Rangkasbitung">Terminal Rangkasbitung</option>
<option value="Terminal Tangerang">Terminal Tangerang</option>
<option value="Terminal Cikupa">Terminal Cikupa</option>
<option value="Terminal Mauk">Terminal Mauk</option>
<option value="Terminal Sepatan">Terminal Sepatan</option>
<option value="Terminal Serang">Terminal Serang</option>
<option value="Terminal Cilegon">Terminal Cilegon</option>
<option value="Terminal Labuhan">Terminal Labuhan</option>
<option value="Terminal Panimbang">Terminal Panimbang</option>
<option value="Terminal Sumur">Terminal Sumur</option>
<option value="Terminal Bayah">Terminal Bayah</option>
<option value="Terminal Cikarae">Terminal Cikarae</option>
<option value="Terminal Cipanas">Terminal Cipanas</option>
<option value="Terminal Cisimeut">Terminal Cisimeut</option>
<option value="Terminal Cisuka">Terminal Cisuka</option>
<option value="Terminal Kadugede">Terminal Kadugede</option>
<option value="Terminal Kalapa">Terminal Kalapa</option>
<option value="Terminal Limbangan">Terminal Limbangan</option>
<option value="Terminal Panawuan">Terminal Panawuan</option>
<option value="Terminal Pasir Eurih">Terminal Pasir Eurih</option>
<option value="Terminal Singaparna">Terminal Singaparna</option>
<option value="Terminal Wanaraja">Terminal Wanaraja</option>
    </select>
            </div>
    <div class="waktu">
        <h6><img src="img/icon.svg">Waktu Keberangkatan</h6> <br>
    <label for="date">Tanggal Pergi</label>
    <input class="form-control" type="date" id="date" name="date" required><br><br>  </div>
    <div class="waktu">
    <h6><img src="img/icon.svg">Pilih Kelas</h6> <br>
    <label for="class">Kelas</label>
  <select class="form-control" id="class" name="class"> <br>
  <option  >Pilih Kelas</option>
    <option  value="economy">Ekonomi</option>
    <option  value="business">Bisnis</option>
  </select><br>
            </div>
    <button type="submit" class="submit-button">Cari Tiket</button>
    </form>
            </div>
    <script>
    // Fungsi untuk menyaring opsi berdasarkan input pencarian
    function filterOptions(selectElement, inputElement) {
        var filter = inputElement.value.toUpperCase();
        var options = selectElement.options;
        for (var i = 0; i < options.length; i++) {
            var option = options[i];
            var txtValue = option.textContent || option.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        }
    }

    // Ambil elemen select dan input pencarian
    var selectKeberangkatan = document.getElementById("terminal_keberangkatan");
    var inputSearchKeberangkatan = document.createElement("input");
    inputSearchKeberangkatan.setAttribute("type", "text");
    inputSearchKeberangkatan.setAttribute("placeholder", "Cari terminal keberangkatan...");
    inputSearchKeberangkatan.addEventListener("input", function() {
        filterOptions(selectKeberangkatan, inputSearchKeberangkatan);
    });
    selectKeberangkatan.parentNode.insertBefore(inputSearchKeberangkatan, selectKeberangkatan.nextSibling);

    var selectKedatangan = document.getElementById("terminal_kedatangan");
    var inputSearchKedatangan = document.createElement("input");
    inputSearchKedatangan.setAttribute("type", "text");
    inputSearchKedatangan.setAttribute("placeholder", "Cari terminal kedatangan...");
    inputSearchKedatangan.addEventListener("input", function() {
        filterOptions(selectKedatangan, inputSearchKedatangan);
    });
    selectKedatangan.parentNode.insertBefore(inputSearchKedatangan, selectKedatangan.nextSibling);
</script>
</div>

<div class="search-form" id="kapal-form">
    <form action="carikapal.php" method="POST">
        <label for="pelabuhan_keberangkatan">Stasiun Keberangkatan:</label>
    <select class="form-control" id="pelabuhan_keberangkatan" name="pelabuhan_keberangkatan" required>
        <!-- Pilihan Pelabuhan keberangkatan -->
        <option value="">Pilih Pelabuhan Keberangkatan</option>
        <option>Jakarta (Pelabuhan Tanjung Priok)</option>
        <option>Surabaya (Pelabuhan Tanjung Perak)</option>
        <option>Semarang (Pelabuhan Tanjung Emas)</option>
        <option>Makassar (Pelabuhan Soekarno-Hatta)</option>
        <option>Bali (Pelabuhan Benoa)</option>
        <option>Medan (Pelabuhan Belawan)</option>
        <option>Batam (Pelabuhan Batu Ampar)</option>
        <option>Palembang (Pelabuhan Boom Baru)</option>
        <option>Pontianak (Pelabuhan Sungai Duri)</option>
        <option>Samarinda (Pelabuhan Samarinda)</option>
        <option>Padang (Pelabuhan Teluk Bayur)</option>
        <option>Lampung (Pelabuhan Panjang)</option>
        <option>Tanjung Pinang (Pelabuhan Sri Bintan Pura)</option>
        <option>Cirebon (Pelabuhan Cirebon)</option>
        <option>Bontang (Pelabuhan Bontang)</option>
        <option>Banjarmasin (Pelabuhan Trisakti)</option>
        <option>Tarakan (Pelabuhan Tarakan)</option>
        <option>Manado (Pelabuhan Samudera Bitung)</option>
        <option>Pekanbaru (Pelabuhan Sungai Duku)</option>
        <option>Ambon (Pelabuhan Yos Sudarso)</option>
        <option>Tegal (Pelabuhan Tegal)</option>
        <option>Kupang (Pelabuhan Tenau)</option>
        <option>Sorong (Pelabuhan Sorong)</option>
        <option>Berau (Pelabuhan Berau)</option>
        <option>Jambi (Pelabuhan Sungai Rengas)</option>
        <option>Bitung (Pelabuhan Bitung)</option>
        <option>Palu (Pelabuhan Palu)</option>
        <option>Palangkaraya (Pelabuhan Kumai)</option>
        <option>Kendari (Pelabuhan Kendari)</option>
        <option>Bima (Pelabuhan Bima)</option>
        <option>Banyuwangi (Pelabuhan Ketapang)</option>
        <option>Tarakan (Pelabuhan Tarakan)</option>
        <option>Merauke (Pelabuhan Merauke)</option>
        <option>Tanjung Pandan (Pelabuhan Tanjung Pandan)</option>
        <option>Sorong (Pelabuhan Sorong)</option>
        <option>Biak (Pelabuhan Biak)</option>
        <option>Maumere (Pelabuhan Maumere)</option>
        <option>Bau Bau (Pelabuhan Bau Bau)</option>
        <option>Waingapu (Pelabuhan Waingapu)</option>
        <option>Kendari (Pelabuhan Kendari)</option>
        <option>Nabire (Pelabuhan Nabire)</option>
        <option>Palopo (Pelabuhan Palopo)</option>
        <option>Manokwari (Pelabuhan Manokwari)</option>
        <option>Selayar (Pelabuhan Benteng)</option>
        <option>Waigeo (Pelabuhan Waisai)</option>
        <option>Langsa (Pelabuhan Langsa)</option>
        <option>Rote (Pelabuhan Ba'a)</option>
        <option>Mamuju (Pelabuhan Mamuju)</option>
        <option>Luwuk (Pelabuhan Luwuk)</option>
        <option>Lhokseumawe (Pelabuhan Lhokseumawe)</option>
        <option>Palu (Pelabuhan Pantoloan)</option>
        <option>Palu (Pelabuhan Palu)</option>
        <option>Banjuwangi (Pelabuhan Banjuwangi)</option>
        <option>Yogyakarta (Pelabuhan Tanjung Mas)</option>
        <option>Padang Bai (Pelabuhan Padang Bai)</option>
        <option>Watampone (Pelabuhan Watampone)</option>
        <option>Ampana (Pelabuhan Ampana)</option>
</select>
        <label for="pelabuhan_kedatangan">Stasiun Kedatangan:</label>
        <select class="form-control" id="pelabuhan_kedatangan" name="pelabuhan_kedatangan" required>
            <!-- Pilihan bandara kedatangan -->
            <option value="">Pilih Pelabuhan Tujuan</option>
        <option>Jakarta (Pelabuhan Tanjung Priok)</option>
        <option>Surabaya (Pelabuhan Tanjung Perak)</option>
        <option>Semarang (Pelabuhan Tanjung Emas)</option>
        <option>Makassar (Pelabuhan Soekarno-Hatta)</option>
        <option>Bali (Pelabuhan Benoa)</option>
        <option>Medan (Pelabuhan Belawan)</option>
        <option>Batam (Pelabuhan Batu Ampar)</option>
        <option>Palembang (Pelabuhan Boom Baru)</option>
        <option>Pontianak (Pelabuhan Sungai Duri)</option>
        <option>Samarinda (Pelabuhan Samarinda)</option>
        <option>Padang (Pelabuhan Teluk Bayur)</option>
        <option>Lampung (Pelabuhan Panjang)</option>
        <option>Tanjung Pinang (Pelabuhan Sri Bintan Pura)</option>
        <option>Cirebon (Pelabuhan Cirebon)</option>
        <option>Bontang (Pelabuhan Bontang)</option>
        <option>Banjarmasin (Pelabuhan Trisakti)</option>
        <option>Tarakan (Pelabuhan Tarakan)</option>
        <option>Manado (Pelabuhan Samudera Bitung)</option>
        <option>Pekanbaru (Pelabuhan Sungai Duku)</option>
        <option>Ambon (Pelabuhan Yos Sudarso)</option>
        <option>Tegal (Pelabuhan Tegal)</option>
        <option>Kupang (Pelabuhan Tenau)</option>
        <option>Sorong (Pelabuhan Sorong)</option>
        <option>Berau (Pelabuhan Berau)</option>
        <option>Jambi (Pelabuhan Sungai Rengas)</option>
        <option>Bitung (Pelabuhan Bitung)</option>
        <option>Palu (Pelabuhan Palu)</option>
        <option>Palangkaraya (Pelabuhan Kumai)</option>
        <option>Kendari (Pelabuhan Kendari)</option>
        <option>Bima (Pelabuhan Bima)</option>
        <option>Banyuwangi (Pelabuhan Ketapang)</option>
        <option>Tarakan (Pelabuhan Tarakan)</option>
        <option>Merauke (Pelabuhan Merauke)</option>
        <option>Tanjung Pandan (Pelabuhan Tanjung Pandan)</option>
        <option>Sorong (Pelabuhan Sorong)</option>
        <option>Biak (Pelabuhan Biak)</option>
        <option>Maumere (Pelabuhan Maumere)</option>
        <option>Bau Bau (Pelabuhan Bau Bau)</option>
        <option>Waingapu (Pelabuhan Waingapu)</option>
        <option>Kendari (Pelabuhan Kendari)</option>
        <option>Nabire (Pelabuhan Nabire)</option>
        <option>Palopo (Pelabuhan Palopo)</option>
        <option>Manokwari (Pelabuhan Manokwari)</option>
        <option>Selayar (Pelabuhan Benteng)</option>
        <option>Waigeo (Pelabuhan Waisai)</option>
        <option>Langsa (Pelabuhan Langsa)</option>
        <option>Rote (Pelabuhan Ba'a)</option>
        <option>Mamuju (Pelabuhan Mamuju)</option>
        <option>Luwuk (Pelabuhan Luwuk)</option>
        <option>Lhokseumawe (Pelabuhan Lhokseumawe)</option>
        <option>Palu (Pelabuhan Pantoloan)</option>
        <option>Palu (Pelabuhan Palu)</option>
        <option>Banjuwangi (Pelabuhan Banjuwangi)</option>
        <option>Yogyakarta (Pelabuhan Tanjung Mas)</option>
        <option>Padang Bai (Pelabuhan Padang Bai)</option>
        <option>Watampone (Pelabuhan Watampone)</option>
        <option>Ampana (Pelabuhan Ampana)</option>
        </select>
        <label for="date">Tanggal Keberangkatan:</label>
        <input class="date" type="date" id="date" name="date" required><br><br>
        <button type="submit">Cari</button>
    </form>
</div>

</section>

<section class="section bg-white shadow-md">
			      <div class="container">
			        <h2 class="text-9 fw-500 text-center">Beli tiket apapun disini!</h2>
			        <p class="lead text-center mb-4 text-3">Beli Tiket Kereta ,Kapal,Pesawat,Bus dan semua kebutuhan mu di sini.PACK N GO siap melayani kebutuhan perjalanannmu dengan baik</p>

			        <div class="row">
			        	
			        				        </div>

			      </div>
			</section>

<div id="carouselExample" class="carousel slide" data-ride="carousel">
        <!-- Indikator carousel -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>

        <!-- Isi carousel -->
        <div class="carousel-inner">
            <!-- Item pertama -->
            <div class="carousel-item active">
                <h3>Simak Ulasan Pelanggan-Pelanggan PACKNGO</h3>
                <div>
                    <!-- Dua shape persegi -->
                    <div class="square"></div>
                    <div class="square"></div>
                </div>
            </div>

            <!-- Item kedua -->
            <div class="carousel-item">
                <h3>Penilaian Pelanggan 2</h3>
                <div>
                    <!-- Dua shape persegi -->
                    <div class="square"></div>
                    <div class="square"></div>
                </div>
        
            </div>

            <!-- Item ketiga -->
            <div class="carousel-item">
                <h3>Penilaian Pelanggan 3</h3>
                <div>
                    <!-- Dua shape persegi -->
                    <div class="square"></div>
                    <div class="square"></div>
                </div>
       
            </div>
        </div>

        <!-- Kontrol Carousel -->
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Impor Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
			<!-- Partners
    ============================================= -->
    <div class="hero-wrap section">
      <div class="hero-mask opacity-8 bg-secondary"></div>
      <div class="hero-bg" style="background-image:url('https://faiztravel.co.id/asset/images/banner_plane1.jpg')"></div>
      <div class="hero-content">
        <div class="container">
          <h2 class="text-9 fw-500 text-white text-center mb-4">Partner Kami</h2>
          <ul class="nav nav-tabs style-2 justify-content-center" id="myPartners" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="ticket-tab" data-bs-toggle="tab"  role="tab" aria-controls="ticket-panel" aria-selected="true">Ticket</a> </li>
            
          </ul>
          <div class="tab-content bg-white border shadow-sm rounded-bottom px-3" id="myPartnersContent">
            <div class="tab-pane fade show active" id="ticket-panel" role="tabpanel" aria-labelledby="ticket">
              <div class="brands-grid">
                <div class="row justify-content-md-center">
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/GAR.png" alt="Brands" style="width: 100px;"></></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/CIT.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/BAT.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/LIO.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/WIN.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/SUP.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/SRI.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/NAM.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/PEL.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/TRI.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/KAI_2.png" alt="Brands" style="width: 200px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/lg/PELNI.png" alt="Brands" style="width: 100px;"></a></div>
                </div>
                <div class="row justify-content-md-center">
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Malindo.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Thai_Lion.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Air_Asia.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Israel.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Scoot.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Xiamen.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Turkish.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Qantas.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Hongkong.png" alt="Brands" style="width: 100px;"></a></div>
                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Malaysia.png" alt="Brands" style="width: 100px;"></a></div>
                </div>
                <div class="row justify-content-md-center">
                	  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Delta.png" alt="Brands" style="width: 100px;"></a></div>
                      <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/China.png" alt="Brands" style="width: 100px;"></a></div>
                	  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Japan.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Ana.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Cathay.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Eva_AIr.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Etihad.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Singapore.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Fly_Emirates.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Saudi.png" alt="Brands" style="width: 100px;"></a></div>
                </div>
                <div class="row justify-content-md-center">

	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Aerodili.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Royalbrunei.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Oman.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Vietnam.png" alt="Brands" style="width: 100px;"></a></div>
                	  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/British.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Royal_Jordanian.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Philippine.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Korean.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Kenya.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Thai.png" alt="Brands" style="width: 100px;"></a></div>
                </div>
                <div class="row justify-content-md-center">
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/KLM.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Lufthansa.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Egyptair.png" alt="Brands" style="width: 100px;"></a></div>
                	  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Silkair.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Finair.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Qatar.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/American.png" alt="Brands" style="width: 100px;"></a></div>
	                  <div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/airlines/international/home/Asiana.png" alt="Brands" style="width: 100px;"></a></div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="paymet-panel" role="tabpanel" aria-labelledby="paymet-panel">
              <div class="brands-grid">
				<div class="row justify-content-md-center">
				<div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/bank/bca.png" alt="Brands" style="width: 100px;"></a></div><div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/bank/bri.png" alt="Brands" style="width: 100px;"></a></div><div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/bank/bni.png" alt="Brands" style="width: 100px;"></a></div><div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/bank/mandiri.png" alt="Brands" style="width: 100px;"></a></div><div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/bank/permata.png" alt="Brands" style="width: 100px;"></a></div><div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/bank/cimb-niaga.png" alt="Brands" style="width: 100px;"></a></div><div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/bank/bsi.png" alt="Brands" style="width: 100px;"></a></div><div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/bank/keb-hana-indonesia.png" alt="Brands" style="width: 100px;"></a></div><div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/bank/maybank.png" alt="Brands" style="width: 100px;"></a></div><div class="col-3 col-md-2 col-lg text-center align-self-center"><a href=""><img class="img-fluid" src="https://faiztravel.co.id/asset/images/bank/danamon.png" alt="Brands" style="width: 100px;"></a></div>
				</div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Partners end -->
	


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

       
            <p class="copyright-text text-1">Copyright <i class="far fa-copyright"></i> 2024 <a href="https://faiztravel.co.id/tentang-kami">PACK N GO</a> All Rights Reserved.</p><span class="copyright-text text-1"><em>~ powered by </em>PACK N GO ~</span>	</div>
    </div>
</div>
</footer>


</body>

<script>
$(document).ready(function(){
    $("#pesawat-form").dialog("open");
});
</script>

</html>

