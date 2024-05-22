<?php
// Membuka koneksi ke database
include 'koneksi.php';

// Start a transaction
mysqli_begin_transaction($conn);

try {
    // Alter table `datapenumpangpesawat` to add cascading delete
    $alterDatapenumpangQuery = "
    ALTER TABLE datapenumpangpesawat
    DROP FOREIGN KEY IF EXISTS datapenumpangpesawat_ibfk_2;

    ALTER TABLE datapenumpangpesawat
    ADD CONSTRAINT datapenumpangpesawat_ibfk_2
    FOREIGN KEY (id_jadwaltiketpesawat)
    REFERENCES jadwal_tiket_pesawat(id_jadwaltiketpesawat)
    ON DELETE CASCADE;
    ";

    // Alter table `pesanantiketpesawat` to add cascading delete
    $alterPesanantiketQuery = "
    ALTER TABLE pesanantiketpesawat
    DROP FOREIGN KEY IF EXISTS fk_datapenumpangpesawat;

    ALTER TABLE pesanantiketpesawat
    ADD CONSTRAINT fk_datapenumpangpesawat
    FOREIGN KEY (id_datapenumpang)
    REFERENCES datapenumpangpesawat(id_datapenumpang)
    ON DELETE CASCADE;
    ";

    // Execute the alter table queries
    if (!mysqli_multi_query($conn, $alterDatapenumpangQuery)) {
        throw new Exception("Error updating foreign key constraint on datapenumpangpesawat: " . mysqli_error($conn));
    }
    
    while (mysqli_next_result($conn)) {;}

    if (!mysqli_multi_query($conn, $alterPesanantiketQuery)) {
        throw new Exception("Error updating foreign key constraint on pesanantiketpesawat: " . mysqli_error($conn));
    }
    
    while (mysqli_next_result($conn)) {;}

    // Commit the transaction
    mysqli_commit($conn);
} catch (Exception $e) {
    // Rollback the transaction if any query fails
    mysqli_rollback($conn);
    echo "Error: " . $e->getMessage();
    exit(); // Stop execution if there's an error
}

// Periksa apakah parameter id_jadwaltiketpesawat diterima melalui URL
if (isset($_GET['id_jadwaltiketpesawat'])) {
    // Escape string untuk mencegah serangan SQL Injection
    $id_jadwaltiketpesawat = mysqli_real_escape_string($conn, $_GET['id_jadwaltiketpesawat']);

    // Query untuk menghapus jadwal tiket pesawat dari database
    $delete_query = "DELETE FROM jadwal_tiket_pesawat WHERE id_jadwaltiketpesawat = '$id_jadwaltiketpesawat'";
    
    if (mysqli_query($conn, $delete_query)) {
        // Jika data berhasil dihapus, arahkan kembali ke halaman jadwalpesawat.php
        header("Location: jadwalpesawat.php");
        exit();
    } else {
        // Jika terjadi kesalahan saat menghapus data dari database, tampilkan pesan error
        echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi ke database
    mysqli_close($conn);
} else {
    // Jika parameter id_jadwaltiketpesawat tidak ditemukan, arahkan kembali ke halaman jadwalpesawat.php
    header("Location: jadwalpesawat.php");
    exit();
}
?>
