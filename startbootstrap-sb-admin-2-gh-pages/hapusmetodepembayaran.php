<?php
// Include your database connection file
include 'koneksi.php';

// Check if ID is set
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Start a transaction
    mysqli_begin_transaction($conn);

    try {
        // Alter the foreign key constraints on related tables to cascade deletes
        $alterTableQuery = "
        ALTER TABLE pesanantiketbus
        DROP FOREIGN KEY IF EXISTS pesanantiketbus_ibfk_3;

        ALTER TABLE pesanantiketbus
        ADD CONSTRAINT pesanantiketbus_ibfk_3
        FOREIGN KEY (id_metode)
        REFERENCES metodepembayaran(id_metode)
        ON DELETE CASCADE;

        ALTER TABLE pesanantiketkereta
        DROP FOREIGN KEY IF EXISTS pesanantiketkereta_ibfk_3;

        ALTER TABLE pesanantiketkereta
        ADD CONSTRAINT pesanantiketkereta_ibfk_3
        FOREIGN KEY (id_metode)
        REFERENCES metodepembayaran(id_metode)
        ON DELETE CASCADE;

        ALTER TABLE pesanantiketkapal
        DROP FOREIGN KEY IF EXISTS pesanantiketkapal_ibfk_3;

        ALTER TABLE pesanantiketkapal
        ADD CONSTRAINT pesanantiketkapal_ibfk_3
        FOREIGN KEY (id_metode)
        REFERENCES metodepembayaran(id_metode)
        ON DELETE CASCADE;

        ALTER TABLE pesanantiketpesawat
        DROP FOREIGN KEY IF EXISTS pesanantiketpesawat_ibfk_3;

        ALTER TABLE pesanantiketpesawat
        ADD CONSTRAINT pesanantiketpesawat_ibfk_3
        FOREIGN KEY (id_metode)
        REFERENCES metodepembayaran(id_metode)
        ON DELETE CASCADE;
        ";

        // Execute the alter table query
        if (!mysqli_multi_query($conn, $alterTableQuery)) {
            throw new Exception("Error updating foreign key constraints: " . mysqli_error($conn));
        }

        // Free any open result sets
        while(mysqli_more_results($conn)) {
            mysqli_next_result($conn);
            if($result = mysqli_store_result($conn)) {
                mysqli_free_result($result);
            }
        }

        // Delete query
        $query = "DELETE FROM metodepembayaran WHERE id_metode = $id";

        if(mysqli_query($conn, $query)) {
            // Commit the transaction
            mysqli_commit($conn);

            header("Location: metodepembayaran.php");
            exit();
        } else {
            throw new Exception("Terjadi kesalahan: " . mysqli_error($conn));
        }
    } catch (Exception $e) {
        // Rollback the transaction if any query fails
        mysqli_rollback($conn);
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "ID metode pembayaran tidak ditemukan.";
}
?>
