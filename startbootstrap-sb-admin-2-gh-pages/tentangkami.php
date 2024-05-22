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



table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
}

th, td {
    border: 1px solid #e0e0e0;
    text-align: left;
    padding: 12px; 
    font-family: Arial, sans-serif; 
}

th {
    background-color: #f8f9fa; 
    color: #333; 
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


.invoice-id {
    position: ; /* Mengatur posisi absolut */
    top: -500px; /* Jarak dari bagian atas */
    margin-left: 20px; /* Jarak dari bagian kanan */
 
    color: black; /* Warna teks */
    padding: 10px; /* Padding */
    border-radius: 5px; /* Sudut melengkung */
    font-size: 30px; /* Ukuran teks */
}

/* styles.css */

/* Tombol download */
.download-button {
    background-color: #0071CC;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;

    position:absolute;
    top: 1500px;
    right: 150px;

}

/* Efek hover */
.download-button:hover {
    background-color: #0056b3;
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

     
.butuhbantuan{
    text-align:center;
    background-color:#D0F246;
    color:black;
    border:1px solid;
    border-radius:5px;
    width: 50%;
    position:absolute;
    margin-left:670px;;
    margin-top:-460px;
}
   
.tentangkami {

    padding-left:20px;
    padding-right:20px;
      padding-top:40px;
     
}

.kami {
    text-align:center;
    background-color:#FFFFFF;
    padding-bottom: 70px;
}

.kami p {
    padding:40px;
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

<main>
<div class="tentangkami">
    <div class="kami">
<h2 style="text-align:center;">Tentang Kami</h2>
<p>PACK N GO adalah sebuah platform yang didedikasikan untuk membantu Anda merencanakan dan memesan tiket perjalanan dengan cara yang mudah, cepat, dan aman. Kami percaya bahwa perjalanan harus menjadi pengalaman yang menyenangkan dan tanpa hambatan, itulah sebabnya kami mengembangkan sistem yang dirancang untuk memudahkan proses pemesanan tiket dan informasi perjalanan lainnya.
Tim kami terdiri dari para profesional yang berdedikasi dan berpengalaman di bidang teknologi dan perjalanan. Kami terus berinovasi untuk memberikan layanan terbaik kepada pelanggan kami, baik itu dalam hal kemudahan penggunaan, keamanan, atau fleksibilitas. Kami ingin memastikan bahwa pengalaman Anda dengan PACK N GO tidak hanya memenuhi harapan, tetapi juga melebihi ekspektasi Anda.
PACK N GO memberikan berbagai pilihan transportasi dan tujuan perjalanan, sehingga Anda dapat dengan mudah menemukan yang sesuai dengan kebutuhan Anda. Kami juga berusaha untuk memberikan informasi terkini dan akurat tentang jadwal, harga tiket, dan detail lainnya yang relevan, sehingga Anda dapat membuat keputusan yang tepat saat merencanakan perjalanan.
Keamanan dan privasi adalah prioritas utama kami. Kami menggunakan teknologi enkripsi terbaru untuk melindungi data pribadi Anda dan memastikan transaksi Anda aman. Kami juga memiliki tim dukungan pelanggan yang siap membantu jika Anda memiliki pertanyaan atau membutuhkan bantuan selama proses pemesanan.</p>
</div>
</div>


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
                            <a class="nav-link" href="customerservice.php" >
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
