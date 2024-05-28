<?php
require_once 'TCPDF/tcpdf.php'; // Path ke file tcpdf.php
require 'phpqrcode/qrlib.php';
// Koneksi ke database
include 'koneksi.php';

if (isset($_GET['invoice_id'])) {
    $invoice_id = $_GET['invoice_id'];

    $query_select = "SELECT pa.invoice_id, pa.TIMEORDER, jtb.waktu_keberangkatan, jtb.waktu_kedatangan, jtb.kapasitas_stok_tiket, jtb.stasiun_keberangkatan, jtb.stasiun_kedatangan, jtb.harga, jtb.kelas, jtb.status_jadwal, vb.nama_vendor, vb.logo_vendor, vb.alamat_vendor, dpb.jenis_kelamin, dpb.nik, dpb.nama_lengkap, dpb.no_hp, dpb.email, mp.nama_metode, mp.nomor_metode, mp.logo_metode, mp.Deksripsi_metode, pa.status_pembayaran 
    FROM pesanantiketkereta AS pa 
    JOIN jadwal_tiket_kereta AS jtb ON pa.id_jadwaltiketkereta = jtb.id_jadwaltiketkereta 
    JOIN vendor_kereta AS vb ON jtb.id_vendorkrta = vb.id_vendorkrta 
    JOIN datapenumpangkereta AS dpb ON pa.id_datapenumpang = dpb.id_datapenumpang 
    JOIN metodepembayaran AS mp ON pa.id_metode = mp.id_metode 
    WHERE pa.invoice_id = ?";



    if ($stmt = $conn->prepare($query_select)) {
        $stmt->bind_param("s", $invoice_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $pdf = new TCPDF();
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('PACK N GO');
            $pdf->SetTitle('E-Ticket');
            $pdf->SetSubject('Kereta E-Ticket');
            $pdf->SetKeywords('TCPDF, PDF, ticket, Kereta, e-ticket');

            // Set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

            // Set margins
            $pdf->SetMargins(10, 10, 10);
            $pdf->SetHeaderMargin(10);
            $pdf->SetFooterMargin(10);

            // Set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, 10);

            // Set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

            // Set font
            $pdf->SetFont('helvetica', '', 12);

            $pdf->AddPage();

            // CSS styling
            $css = "
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                    }
                    .invoice {
                        padding: 20px;
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        background-color: #fff;
                    }
                    .header, .footer {
                        background-color: #f0f0f0;
                        padding: 10px;
                        text-align: center;
                        font-weight: bold;
                    }
                    .header img {
                        max-width: 100px;
                        margin: 0 auto;
                        display: block;
                    }
                    .details {
                        margin-top: 20px;
                        border-top: 1px solid #ccc;
                        padding-top: 20px;
                    }
                    .details p {
                        margin: 5px 0;
                        padding: 5px 0;
                    }
                    .details .section {
                        margin-bottom: 20px;
                    }
                    .details .section-title {
                        font-weight: bold;
                        margin-bottom: 10px;
                        color: #007bff;
                    }
                    .table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 10px;
                    }
                    .table th, .table td {
                        border: 1px solid #ccc;
                        padding: 10px;
                        text-align: left;
                    }
                    .table th {
                        background-color: #f0f0f0;
                    }

                    .qrcode {
                        text-align: center;
                        margin-top: 20px;
                    }
                    
                    .qrcode p {
                        margin-bottom: 5px;
                    }
                    
                    .qrcode-img {
                        max-width: 100px;
                    }
                    
                </style>
            ";

            $html = '<div class="invoice">';
            $html .= '<div class="header"><h1>E-Ticket PACKNGO</h1></div>';
       
            while ($row = $result->fetch_assoc()) {
                $html .= '<div class="details">';
                $html .= '<div class="section">';
                $html .= '<img src="' . $row['logo_vendor'] . '" class="logo">';
                $html .= '<p>Status Tiket: ' . $row['status_pembayaran'] . '</p>';
                $html .= '<p>Nama PO: ' . $row['nama_vendor'] . '</p>';
                $html .= '<p>Golongan: ' . $row['kelas'] . '</p>';
                $html .= '</div>';

                $html .= '<div class="section">';
                $html .= '<p class="section-title">Informasi Keberangkatan dan Kedatangan</p>';
                $html .= '<p>Keberangkatan: ' . $row['stasiun_keberangkatan'] . ' - ' . date('d/m/Y H:i', strtotime($row['waktu_keberangkatan'])) . '</p>';
                $html .= '<p>Kedatangan: ' . $row['stasiun_kedatangan'] . ' - ' . date('d/m/Y H:i', strtotime($row['waktu_kedatangan'])) . '</p>';
                $html .= '</div>';

                $html .= '<div class="section">';
                $html .= '<p class="section-title">Informasi Penumpang</p>';
                $html .= '<table class="table">';
                $html .= '<tr><th>Nama Penumpang</th><td>' . $row['nama_lengkap'] . '</td></tr>';
                $html .= '<tr><th>NIK</th><td>' . $row['nik'] . '</td></tr>';
                $html .= '<tr><th>Jenis Kelamin</th><td>' . $row['jenis_kelamin'] . '</td></tr>';
                $html .= '<tr><th>No HP</th><td>' . $row['no_hp'] . '</td></tr>';
                $html .= '<tr><th>Email</th><td>' . $row['email'] . '</td></tr>';
                $html .= '<tr><th>Kelas</th><td>' . $row['kelas'] . '</td></tr>';
        
                $html .= '</table>';
                $html .= '</div>';

                $html .= '<div class="section">';
                $html .= '<p class="section-title">Petunjuk Check-In</p>';
             
                $html .= '<p>1.Beli Tiket<br>
                Online: Beli melalui situs web atau aplikasi.<br>
                Loket: Beli di terminal atau agen resmi.<br>
                2.Persiapan<br>
                Waktu Kedatangan: Datang 30 menit sebelum jadwal.<br>
                Dokumen: Bawa KTP atau identitas lainnya.<br>
                Barang Bawaan: Pastikan sesuai batasan bagasi.<br>
                3.Check-In<br>
                Loket Check-In: Tunjukkan tiket dan identitas.<br>
                Boarding Pass: Dapatkan untuk naik ke bus.<br>
                4.Naik ke Bus<br>
                Zona Boarding: Pergi ke area keberangkatan.<br>
                Pemeriksaan Boarding Pass: Tunjukkan kepada petugas saat naik.<br>
                5.Di Dalam Bus<br>
                Temukan Kursi: Duduk sesuai nomor tiket.dapat menyesuaikan nantinya<br>
                yang penting tidak terjadi keributan<br>
                Keamanan: Kenakan sabuk pengaman, jika tersedia.<br>
                6.Turun dari Bus<br>
                Pengumuman Tujuan: Dengarkan pemberitahuan mendekati tujuan.<br>
                Periksa Barang Bawaan: Jangan tinggalkan barang pribadi.<br>
                Petunjuk Keluar: Ikuti arah petugas untuk keluar terminal.<br>
                7.Bantuan<br>
                Bantuan Khusus: Informasikan kepada petugas jika diperlukan.<br>
                Layanan Pelanggan: Hubungi nomor yang tertera pada tiket jika ada masalah.</p>';

                   
$html .= '</div>';

$html .= '<div class="qrcode">';
$tempDir = 'qrcodes/';
if (!file_exists($tempDir)) {
    mkdir($tempDir);
}
$qrFile = $tempDir . 'qrcode_' . $row['invoice_id'] . '.png';
QRcode::png($verify_url, $qrFile, QR_ECLEVEL_L, 10);
$html .= '<p>QR Code:</p>';
$html .= '<img src="' . $qrFile . '" class="qrcode-img">';
$html .= '</div>';


           
            }

 

            $html .= '</div>'; // End of details
            $html .= '<div class="footer">Terima Kasih telah menggunakan layanan kami.</div>';
            $html .= '</div>'; // End of invoice

            // Write HTML to PDF
            $pdf->writeHTML($html, true, false, true, false, '');

            // Output PDF
            $pdf->Output('tiket_kereta.pdf', 'I');
        } else {
            echo "Tiket tidak ditemukan.";
        }

        $stmt->close();
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
} else {
    echo "ID Tiket tidak ditemukan.";
}
?>
