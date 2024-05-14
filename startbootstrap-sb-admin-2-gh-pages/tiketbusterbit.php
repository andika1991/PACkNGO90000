<?php
include 'koneksi.php';
require('fpdf186/fpdf.php');
require 'phpqrcode/qrlib.php';

if (isset($_GET['invoice_id'])) {
 
    $invoice_id = $_GET['invoice_id'];

    $query_select = "SELECT pa.invoice_id, pa.TIMEORDER, jtb.waktu_keberangkatan, jtb.waktu_kedatangan, jtb.kapasitas_stok_tiket, jtb.terminal_keberangkatan, jtb.terminal_kedatangan, jtb.harga, jtb.kelas, jtb.no_kendaraan, jtb.status_jadwal, vb.nama_vendor, vb.logo_vendor, vb.alamat_vendor, dpb.jenis_kelamin, dpb.nik, dpb.nama_lengkap, dpb.no_hp, dpb.email, dpb.kursi, mp.nama_metode, mp.nomor_metode, mp.logo_metode, mp.Deksripsi_metode, pa.status_pembayaran 
    FROM pesanantiketbus AS pa 
    JOIN jadwal_tiket_bus AS jtb ON pa.id_jadwaltiketbus = jtb.id_jadwaltiketbus 
    JOIN vendor_bus AS vb ON jtb.id_vendorbus = vb.id_vendorbus 
    JOIN datapenumpangbus AS dpb ON pa.id_datapenumpang = dpb.id_datapenumpang 
    JOIN metodepembayaran AS mp ON pa.id_metode = mp.id_metode 
    WHERE pa.invoice_id = ?";


    if ($stmt = $conn->prepare($query_select)) {

        $stmt->bind_param("s", $invoice_id);


        $stmt->execute();


        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
 
            $pdf = new FPDF();
            $pdf->AddPage();

            // Judul
            $pdf->SetFont('Arial', 'B', 16);
            $pdf->Cell(190, 10, 'E-Ticket', 0, 1, 'C');

            // Baris kosong
            $pdf->Ln(10);

            while ($row = $result->fetch_assoc()) {
                $pdf->Image('PACKNGO.png', 30, 30, 50, 30);
                // Informasi tiket
                $pdf->SetFont('Arial', '', 12);
                $pdf->Cell(40, 10, 'Status Tiket: ' . $row['status_pembayaran'], 0, 1);
                $pdf->Cell(40, 10, 'Nama PO: ' . $row['nama_vendor'], 0, 1);
                $pdf->Cell(40, 10, 'LOGO PO: ', 0, 0);
                $pdf->Image($row['logo_vendor'], 50, $pdf->GetY(), 40);
                $pdf->Ln();
                
                $pdf->Cell(40, 10, 'Kelas: ' . $row['kelas'], 0, 1);
                $pdf->Cell(40, 10, 'Nomor Kendaraan: ' . $row['no_kendaraan'], 0, 1);
                $pdf->Cell(40, 10, 'Keberangkatan: ' . $row['terminal_keberangkatan'] . ' - ' . date('d/m/Y H:i', strtotime($row['waktu_keberangkatan'])), 0, 1);
                $pdf->Cell(40, 10, 'Kedatangan: ' . $row['terminal_kedatangan'] . ' - ' . date('d/m/Y H:i', strtotime($row['waktu_kedatangan'])), 0, 1);
 
                // Informasi penumpang
                $pdf->Cell(40, 10, 'Kursi: ' . $row['kursi'], 0, 1);
                $pdf->Cell(40, 10, 'Nama Penumpang: ' . $row['nama_lengkap'], 0, 1);
                $pdf->Cell(40, 10, 'NIK: ' . $row['nik'], 0, 1);
                $pdf->Cell(40, 10, 'Jenis Kelamin: ' . $row['jenis_kelamin'], 0, 1);
                $pdf->Cell(40, 10, 'No HP: ' . $row['no_hp'], 0, 1);
                $pdf->Cell(40, 10, 'Email: ' . $row['email'], 0, 1);

                // QR Code
                $tempDir = 'qrcodes/';
                if (!file_exists($tempDir)) {
                    mkdir($tempDir);
                }
                $qrFile = $tempDir . 'qrcode_' . $row['invoice_id'] . '.png';
                QRcode::png($verify_url, $qrFile, QR_ECLEVEL_L, 10);
                $pdf->Cell(40, 10, 'QR Code: ', 0, 1);
                $pdf->Image($qrFile, 10, $pdf->GetY(), 50, 0, 'PNG');

                // Baris kosong
                $pdf->Ln(10);
            }

            // Output PDF dengan nama file "nama_file.pdf" dan langsung didownload
            $pdf->Output('D', 'nam_file.pdf');

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

