<?php
require_once 'TCPDF/tcpdf.php'; // Path ke file tcpdf.php

// Koneksi ke database
include 'koneksi.php';

if (isset($_GET['invoice_id'])) {
    $invoice_id = $_GET['invoice_id'];

    // Query untuk mendapatkan data tiket
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
            $pdf = new TCPDF();
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
                        background-color: #f9f9f9;
                    }
                    .logo {
                        max-width: 100px;
                    }
                    h1 {
                        font-size: 24px;
                    }
                    .details {
                        margin-top: 20px;
                    }
                    .details p {
                        margin: 0;
                        padding: 5px 0;
                    }

                    
                </style>
            ";

            $html = $css . '<div class="invoice">';
            $html .= '<h1>E-Ticket</h1>';

            while ($row = $result->fetch_assoc()) {
                $html .= '<div class="details">';
                $html .= '<p>Status Tiket: ' . $row['status_pembayaran'] . '</p>';
                $html .= '<p>Nama PO: ' . $row['nama_vendor'] . '</p>';
                $html .= '<img src="' . $row['logo_vendor'] . '" class="logo">';
                $html .= '<p>Kelas: ' . $row['kelas'] . '</p>';
                $html .= '<p>Nomor Kendaraan: ' . $row['no_kendaraan'] . '</p>';
                $html .= '<p>Keberangkatan: ' . $row['terminal_keberangkatan'] . ' - ' . date('d/m/Y H:i', strtotime($row['waktu_keberangkatan'])) . '</p>';
                $html .= '<p>Kedatangan: ' . $row['terminal_kedatangan'] . ' - ' . date('d/m/Y H:i', strtotime($row['waktu_kedatangan'])) . '</p>';
                $html .= '<p>Kursi: ' . $row['kursi'] . '</p>';
                $html .= '<p>Nama Penumpang: ' . $row['nama_lengkap'] . '</p>';
                $html .= '<p>NIK: ' . $row['nik'] . '</p>';
                $html .= '<p>Jenis Kelamin: ' . $row['jenis_kelamin'] . '</p>';
                $html .= '<p>No HP: ' . $row['no_hp'] . '</p>';
                $html .= '<p>Email: ' . $row['email'] . '</p>';
                $html .= '</div>';
            }

            $html .= '</div>';

            // Write HTML to PDF
            $pdf->writeHTML($html, true, false, true, false, '');

            // Output PDF
            $pdf->Output('tiket_bus.pdf', 'I');
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
