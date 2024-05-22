<?php

include 'session.php';


// Ensure the user is logged in
if (!isset($_SESSION['username_pengguna'])) {
    header("Location: loginuser.html");
    exit();
}

$id_pengguna = $_SESSION['id_pengguna'];

$query_kapal = "SELECT * FROM pesanantiketkapal 
                JOIN jadwal_tiket_kapal ON pesanantiketkapal.id_jadwaltiketkapal = jadwal_tiket_kapal.id_jadwaltiketkapal 
                WHERE pesanantiketkapal.id_pengguna = $id_pengguna";
$result_kapal = mysqli_query($conn, $query_kapal);

// Similar queries for pesawat, kereta, and bus
$query_pesawat = "SELECT * FROM pesanantiketpesawat 
                  JOIN jadwal_tiket_pesawat ON pesanantiketpesawat.id_jadwaltiketpesawat = jadwal_tiket_pesawat.id_jadwaltiketpesawat 
                  WHERE pesanantiketpesawat.id_pengguna = $id_pengguna";
$result_pesawat = mysqli_query($conn, $query_pesawat);

$query_kereta = "SELECT * FROM pesanantiketkereta 
                 JOIN jadwal_tiket_kereta ON pesanantiketkereta.id_jadwaltiketkereta = jadwal_tiket_kereta.id_jadwaltiketkereta 
                 WHERE pesanantiketkereta.id_pengguna = $id_pengguna";
$result_kereta = mysqli_query($conn, $query_kereta);

$query_bus = "SELECT * FROM pesanantiketbus 
              JOIN jadwal_tiket_bus ON pesanantiketbus.id_jadwaltiketbus = jadwal_tiket_bus.id_jadwaltiketbus 
              WHERE pesanantiketbus.id_pengguna = $id_pengguna";
$result_bus = mysqli_query($conn, $query_bus);
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
    position: sticky; 
    top: 0;          
    z-index: 1000;    
        }

        .logo img {
            height: 80px;
            width: 250px;
        }
        .square {
            width: 514px; 
            height: 283px; 
            border-radius: 20px; 
            background-color: #0071CC; 
            display: inline-block; 
            margin: 50px; 
        }

        .carousel-item {
            text-align: center; 
            padding: 20px; 
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

.profilku {
            position: relative;
            padding: 80px;
            margin-left: 40px;
            display: inline-block;
        }

        .profilku .text-box {
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }

        .profilku a {
            text-decoration: none;
            font-size:20px;
            color: black; 
            transition: color 0.3s, background-color 0.3s; 
            padding: 5px 10px; 
            border-radius: 5px; 
        }

        .profilku a:hover {
            color: white; 
            background-color: #007bff; 
        }

     
        main {
            display: inline-block;
            vertical-align: top;
            width: 76%;
        }
        table {
            width: 85%;
            border-collapse: collapse;
            background-color: white;
            color: black;
            position: absolut;
            margin-top:-280px;
            margin-left:400px;
        }
        th {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
         
     .detail {
        background-color:#0071CC;
        color:white;
        border-radius:3px;
       padding:4px;
      
     }

     a.detail:hover {
    text-decoration: none;
}
.batalkan {
    background-color: #CC0000;
    color: white;
    border-radius: 3px;
    padding: 3px;
    position: relative;
    top:10px;
    
}

a.batalkan:hover {
    text-decoration: none;
}


/* CSS for pop-up */
#pop {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Background semi-transparan */
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

#pop-content {
    background-color: white;
    padding: 30px; /* Tambahkan padding untuk ruang ekstra */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 400px; /* Perbesar lebar pop-up */
}

#pop-content p {
    margin-bottom: 20px;
    font-size: 16px;
}

#pop-content button {
    padding: 10px 20px;
    margin: 0 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

#confirm-btn {
    background-color: #d9534f; /* Warna merah */
    color: white;
}

#cancel-btn {
    background-color: #5bc0de; /* Warna biru */
    color: white;
}

#confirm-btn:hover {
    background-color: #c9302c; /* Warna merah lebih gelap */
}

#cancel-btn:hover {
    background-color: #31b0d5; /* Warna biru lebih gelap */
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
                <li><a href="homeakun.php#pesawat-form">Home</a></li>
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
<h2 style="margin-left:600px; top:-200px; position:abosolut;">Riwayat Pesanan</h2>
<main>
<div class="profilku">
        <div class="text-box">
            <a href="akun.php" class="active">Profilku</a>
        </div>
        <div class="text-box">
            <a href="riwayatpesanan.php" class="active">Riwayat Pesanan</a>
        </div>
    </div>


    <?php if (mysqli_num_rows($result_kapal) > 0 || mysqli_num_rows($result_pesawat) > 0 || mysqli_num_rows($result_kereta) > 0 || mysqli_num_rows($result_bus) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Jenis Tiket</th>
                    <th>Invoice ID</th>
                    <th>Berangkat</th>
                    <th>Tujuan</th>
                    <th>Waktu Pemesanan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
       


<?php
while ($row = mysqli_fetch_assoc($result_pesawat)):
    // Calculate selisih hari before using it
    $waktu_keberangkatan = strtotime($row['waktu_keberangkatan']);
    $waktu_sekarang = strtotime(date('Y-m-d'));
    $selisih_hari = ($waktu_keberangkatan - $waktu_sekarang) / (60 * 60 * 24);

    // Check if the departure date is at least 3 days away and payment status is "Lunas"
    if ($selisih_hari > 3 && $row['status_pembayaran'] == "Lunas" ) {
        ?>
        <tr>
        <td>Tiket Pesawat</td>
                        <td><?php echo $row['invoice_id']; ?></td>
                        <td><?php echo $row['bandara_keberangkatan']; ?></td>
                        <td><?php echo $row['bandara_kedatangan']; ?></td>
                        <td><?php echo $row['TIMEORDER']; ?></td>
                        <td><?php echo $row['status_pembayaran']; ?></td>
            <td>
                <a class="detail" href="tiketpesawatterbit.php?invoice_id=<?= $row['invoice_id'] ?>">Unduh E-Tiket</a>
                <a class="batalkan" href="#" data-id-pesanan="<?= $row['id_pesanantiket'] ?>" data-type="pesawat">Batalkan</a>
            </td>
        </tr>
        <?php
    } else {
        ?>
        <tr>
        <td>Tiket Pesawat</td>
                        <td><?php echo $row['invoice_id']; ?></td>
                        <td><?php echo $row['bandara_keberangkatan']; ?></td>
                        <td><?php echo $row['bandara_kedatangan']; ?></td>
                        <td><?php echo $row['TIMEORDER']; ?></td>
                        <td><?php echo $row['status_pembayaran']; ?></td>
            <td>
           
            
            </td>
        </tr>
        <?php
    }
endwhile;

?>

<?php while ($row = mysqli_fetch_assoc($result_kapal)): ?>
                <?php
                $waktu_keberangkatan = strtotime($row['waktu_keberangkatan']);
                $waktu_sekarang = strtotime(date('Y-m-d'));
                $selisih_hari = ($waktu_keberangkatan - $waktu_sekarang) / (60 * 60 * 24);

                if ($selisih_hari > 3 && $row['status_pembayaran'] == "Lunas") {
                    ?>
                    <tr>
                        <td>Tiket Kapal</td>
                        <td><?= $row['invoice_id'] ?></td>
                        <td><?= $row['pelabuhan_keberangkatan'] ?></td>
                        <td><?= $row['pelabuhan_kedatangan'] ?></td>
                        <td><?= $row['TIMEORDER'] ?></td>
                        <td><?= $row['status_pembayaran'] ?></td>
                        <td>
                            <a class="detail" href="tiketkapalterbit.php?invoice_id=<?= $row['invoice_id'] ?>">Unduh E-Tiket</a>
                            <a class="batalkan" href="#" data-id-pesanan="<?= $row['id_pesanantiketkapal'] ?>" data-type="kapal">Batalkan</a>
                        </td>
                    </tr>
                    <?php
                } else {
                    ?>
                    <tr>
                        <td>Tiket Kapal</td>
                        <td><?= $row['invoice_id'] ?></td>
                        <td><?= $row['pelabuhan_keberangkatan'] ?></td>
                        <td><?= $row['pelabuhan_kedatangan'] ?></td>
                        <td><?= $row['TIMEORDER'] ?></td>
                        <td><?= $row['status_pembayaran'] ?></td>
                        <td></td>
                    </tr>
                    <?php
                }
            endwhile;
            ?>


<!-- Pop-up HTML -->
<div id="pop" style="display: none;">
    <div id="pop-content">
        <h2 style="font-weight:bold;">Mohon Dibaca dulu...!</h2>
        <p  style="color:black; font-size:18px;">1.Silahkan anda hubungi customer service terlebih dahulu untuk melakukan konfirmasi pembatalan bisa atau tidaknya </p>
        <img src="img/img1990.svg">
        <a href="https://api.whatsapp.com/send?phone=6289507832333" target="blank">Klik disini untuk hubungi admin</a>
        <p style="color:black; font-size:18px;">2.Jika sudah menghubungi dan disetujui silahkan langsung klik tombol Batalkan tiket dibawah ini,pengembalian uang akan dilakukan melalui customer service</p>
        <button id="confirm-btn">Ya</button>
        <button id="cancel-btn">Tidak</button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var popup = document.getElementById('pop');
    var confirmBtn = document.getElementById('confirm-btn');
    var cancelBtn = document.getElementById('cancel-btn');
    var selectedPesananId;
    var selectedType;

    document.querySelectorAll('.batalkan').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Hentikan tindakan default

            selectedPesananId = this.getAttribute('data-id-pesanan'); // Ambil ID pesanan dari atribut data
            selectedType = this.getAttribute('data-type'); // Ambil tipe pesanan dari atribut data
            popup.style.display = 'flex'; // Tampilkan pop-up dengan CSS Flexbox
        });
    });

    confirmBtn.addEventListener('click', function() {
        window.location.href = 'batalkantiket.php?id=' + selectedPesananId + '&type=' + selectedType;
    });

    cancelBtn.addEventListener('click', function() {
        popup.style.display = 'none'; // Tutup pop-up
    });
});

</script>
<?php
while ($row = mysqli_fetch_assoc($result_bus)):
    // Calculate selisih hari before using it
    $waktu_keberangkatan = strtotime($row['waktu_keberangkatan']);
    $waktu_sekarang = strtotime(date('Y-m-d'));
    $selisih_hari = ($waktu_keberangkatan - $waktu_sekarang) / (60 * 60 * 24);

    // Check if the departure date is at least 3 days away and payment status is "Lunas"
    if ($selisih_hari > 3 && $row['status_pembayaran'] == "Lunas" ) {
        ?>
        <tr>
        <td>Tiket Bus</td>
                        <td><?php echo $row['invoice_id']; ?></td>
                        <td><?php echo $row['terminal_keberangkatan']; ?></td>
                        <td><?php echo $row['terminal_kedatangan']; ?></td>
                        <td><?php echo $row['TIMEORDER']; ?></td>
                        <td><?php echo $row['status_pembayaran']; ?></td>
            <td>
                <a class="detail" href="tiketbusterbit.php?invoice_id=<?= $row['invoice_id'] ?>">Unduh-E Tiket</a>
                <a class="batalkan" href="#" data-id-pesanan="<?= $row['id_pesanantiketbus'] ?>" data-type="bus">Batalkan</a>
            </td>
        </tr>
        <?php
    } else {
        ?>
        <tr>
        <td>Tiket Bus</td>
                        <td><?php echo $row['invoice_id']; ?></td>
                        <td><?php echo $row['terminal_keberangkatan']; ?></td>
                        <td><?php echo $row['terminal_kedatangan']; ?></td>
                        <td><?php echo $row['TIMEORDER']; ?></td>
                        <td><?php echo $row['status_pembayaran']; ?></td>
            <td>
              
            
            </td>
        </tr>
        <?php
    }
endwhile;
?>



<?php
while ($row = mysqli_fetch_assoc($result_kereta)):
    // Calculate selisih hari before using it
    $waktu_keberangkatan = strtotime($row['waktu_keberangkatan']);
    $waktu_sekarang = strtotime(date('Y-m-d'));
    $selisih_hari = ($waktu_keberangkatan - $waktu_sekarang) / (60 * 60 * 24);

    // Check if the departure date is at least 3 days away and payment status is "Lunas"
    if ($selisih_hari > 3 && $row['status_pembayaran'] == "Lunas" ) {
        ?>
        <tr>
        <td>Tiket Kereta</td>
                        <td><?php echo $row['invoice_id']; ?></td>
                        <td><?php echo $row['stasiun_keberangkatan']; ?></td>
                        <td><?php echo $row['stasiun_kedatangan']; ?></td>
                        <td><?php echo $row['TIMEORDER']; ?></td>
                        <td><?php echo $row['status_pembayaran']; ?></td>
            <td>
                <a class="detail" href="tiketkeretaterbit.php?id=<?= $row['invoice_id'] ?>">Unduh E-Tiket</a>
                <a class="batalkan" href="#" data-id-pesanan="<?= $row['id_pesanantiket'] ?>" data-type="kereta">Batalkan</a>
            </td>
        </tr>
        <?php
    } else {
        ?>
        <tr>
        <td>Tiket Kereta</td>
                        <td><?php echo $row['invoice_id']; ?></td>
                        <td><?php echo $row['stasiun_keberangkatan']; ?></td>
                        <td><?php echo $row['stasiun_kedatangan']; ?></td>
                        <td><?php echo $row['TIMEORDER']; ?></td>
                        <td><?php echo $row['status_pembayaran']; ?></td>
            <td>
            
            
            </td>
        </tr>
        <?php
    }
endwhile;
?>

            </tbody>
        </table>
    <?php else: ?>
        <p>Tidak ada riwayat pesanan.</p>
    <?php endif; ?>
</main>




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

       
            <p class="copyright-text text-1">Copyright <i class="far fa-copyright"></i> 2024 <a href="https://faiztravel.co.id/tentang-kami">PACK N GO</a> All Rights Reserved.</p><span class="copyright-text text-1"><em>~ powered by </em>PACK N GO ~</span>	</div>
    </div>
</div>
</footer>
</body>
</html>


