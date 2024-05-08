<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PACK N GO</title>
    <style>
        /* Styling untuk navbar */
        header {
            background-color: #66a1e4;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 80px;
            margin-right: 20px;
            margin-left: 130px;
            width: 250px;
            content: url('https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/PACKNGO1-77e7-original.png');
        }

        nav {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 30px;
            font-size: 23px;
        }

        nav a {
            text-decoration: none;
            color: black;
        }

        nav a:hover {
            font-weight: bold;
        }

        .login {
            background-color: #007bff;
            color: #fff;
            padding: 0px 30px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .login:hover {
            background-color: #d9e4f0;
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



.page-header h1 {
    font-size: 1.5rem; /* Ubah ukuran font sesuai kebutuhan */
    color: black; /* Warna teks */
}

.page-header .breadcrumb {
    margin-bottom: 0; /* Hilangkan margin bawah */
    list-style: none;
    padding: 0;
}

.page-header .breadcrumb li {
    display: inline-block;
    font-size: 0.875rem; /* Ukuran font breadcrumb */
}

.page-header .breadcrumb li a {
    color: black; /* Warna teks link */
    text-decoration: none;
}

.page-header .breadcrumb li i {
    margin: 0 0.25rem;
    color: #fff; /* Warna ikon breadcrumb */
}

/* Steps Progress bar */
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
}

th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}

td {
    background-color: #ffffff;
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

</style>
</head>
<body>
<header>
    <div class="logo">
        <img src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/dkamondshop/PACKNGO1-77e7-original.png" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Cek pesanan</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">FAQ</a></li>
            <li class="login"><a href="#">Masuk</a></li>
        </ul>
    </nav>
</header>
<section class="page-header page-header-dark bg-secondary mb-0" style="padding: 1.5rem;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>Pencarian Tiket Bus</h1>
                </div>
                <div class="col-md-4">
                	<ul class="breadcrumb justify-content-start justify-content-md-end mb-0"><li><a href="home.html">Beranda <i></i></a></li><li><i class="active"></i> Search Tiket Pesawat</li></ul>                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12 mx-auto">

                    <!-- ======= Steps Progress bar =======-->
                    <nav class="form-steps">
                        <div class="form-steps__item step-1 form-steps__item--completed">
                            <div class="form-steps__item-content">
                                <span class="form-steps__item-icon bg-primary">1</span>
                                <span class="form-steps__item-text">Cari Tiket</span>
                            </div>
                        </div>
                        <div class="form-steps__item step-2">
                            <div class="form-steps__item-content">
                                <span class="form-steps__item-icon">2</span>
                                <span class="form-steps__item-line"></span>
                                <span class="form-steps__item-text">Pengisian Data</span>
                            </div>
                        </div>
                        <div class="form-steps__item step-3">
                            <div class="form-steps__item-content">
                                <span class="form-steps__item-icon">3</span>
                                <span class="form-steps__item-line"></span>
                                <span class="form-steps__item-text">Pembayaran</span>
                            </div>
                        </div>
                        <div class="form-steps__item step-4">
                            <div class="form-steps__item-content">
                                <span class="form-steps__item-icon">4</span>
                                <span class="form-steps__item-line"></span>
                                <span class="form-steps__item-text">E-Tiket Terbit</span>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Page Header end -->

<?php
// Periksa apakah permintaan adalah metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah semua field telah diisi
    if (isset($_POST["terminal_keberangkatan"]) && isset($_POST["terminal_kedatangan"]) && isset($_POST["date"])) {
        // Simpan data dari formulir
        $terminal_keberangkatan = $_POST["terminal_keberangkatan"];
        $terminal_kedatangan = $_POST["terminal_kedatangan"];
        $tanggal_keberangkatan = $_POST["date"];

        // Query untuk mencari data di tabel jadwal_tiket_bus berdasarkan input
        $query = "SELECT j.*, v.nama_vendor, v.logo_vendor  FROM jadwal_tiket_bus AS j JOIN vendor_bus AS v ON j.id_vendorbus = v.id_vendorbus WHERE j.terminal_keberangkatan = '$terminal_keberangkatan' AND j.terminal_kedatangan = '$terminal_kedatangan' AND DATE(j.waktu_keberangkatan) = '$tanggal_keberangkatan'; ";

        // Eksekusi query
        $result = mysqli_query($conn, $query);

        // Periksa apakah ada hasil dari pencarian
        if (mysqli_num_rows($result) > 0) {
            // Jika ada hasil, tampilkan data dalam tabel
            echo "<table>";
            echo "<tr><th>PO BUS</th><th>WAKTU BERANGKAT</th><th>WAKTU TIBA</th><th>JUMLAH KURSI TERSEDIA</th><th>HARGA</th><th></th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><img src='uploads/" . $row["logo_vendor"] . "' alt='" . $row["nama_vendor"] . "' width='50'></td>";
                echo "<td>" . $row["waktu_keberangkatan"] . "</td>";
                echo "<td>" . $row["waktu_kedatangan"] . "</td>";
                echo "<td>" . $row["kapasitas_stok_tiket"] . "</td>";
                echo "<td>" . $row["harga"] . "</td>";
                echo "<td><a href='#' class='button-beli'>Beli</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Tidak ada jadwal tiket bus yang sesuai dengan pencarian Anda.";
        }
        
        // Tutup koneksi database
        mysqli_close($conn);
    } else {
        // Jika tidak semua field diisi, berikan pesan kesalahan
        echo "Mohon lengkapi semua field.";
    }
} else {
    // Jika metode permintaan bukan POST, mungkin Anda ingin memberikan tindakan alternatif atau hanya mengabaikannya
    echo "Metode permintaan yang diterima bukan metode POST.";
}
?>

</body>
</html>

