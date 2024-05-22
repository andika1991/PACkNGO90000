<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if id_jadwaltiketbus is set
    if (isset($_POST['id_jadwaltiketbus'])) {
        $id_jadwaltiketbus = $_POST['id_jadwaltiketbus'];

        // Start a transaction
        mysqli_begin_transaction($conn);

        try {
            // Alter table `datapenumpangbus` to add cascading delete
            $alterTableQuery1 = "
            ALTER TABLE datapenumpangbus 
            DROP FOREIGN KEY IF EXISTS datapenumpangbus_ibfk_2;
            
            ALTER TABLE datapenumpangbus 
            ADD CONSTRAINT datapenumpangbus_ibfk_2 
            FOREIGN KEY (id_jadwaltiketbus) 
            REFERENCES jadwal_tiket_bus(id_jadwaltiketbus) 
            ON DELETE CASCADE;
            ";

            // Alter table `pesanantiketbus` to add cascading delete
            $alterTableQuery2 = "
            ALTER TABLE pesanantiketbus 
            DROP FOREIGN KEY IF EXISTS fk_datapenumpang;
            
            ALTER TABLE pesanantiketbus 
            ADD CONSTRAINT fk_datapenumpang 
            FOREIGN KEY (id_datapenumpang) 
            REFERENCES datapenumpangbus(id_datapenumpang) 
            ON DELETE CASCADE;
            ";

            // Execute the alter table queries
            if (!mysqli_multi_query($conn, $alterTableQuery1)) {
                throw new Exception("Error updating foreign key constraint on datapenumpangbus: " . mysqli_error($conn));
            }
            
            while (mysqli_next_result($conn)) {;}

            if (!mysqli_multi_query($conn, $alterTableQuery2)) {
                throw new Exception("Error updating foreign key constraint on pesanantiketbus: " . mysqli_error($conn));
            }
            
            while (mysqli_next_result($conn)) {;}

            // Delete the row from jadwal_tiket_bus
            $deleteQuery = "DELETE FROM jadwal_tiket_bus WHERE id_jadwaltiketbus = $id_jadwaltiketbus";
            if (!mysqli_query($conn, $deleteQuery)) {
                throw new Exception("Error: " . $deleteQuery . "<br>" . mysqli_error($conn));
            }

            // Commit the transaction
            mysqli_commit($conn);

            // Redirect to the jadwalbus.php page
            header("Location: jadwalbus.php");
        } catch (Exception $e) {
            // Rollback the transaction if any query fails
            mysqli_rollback($conn);
            echo $e->getMessage();
        }
    } else {
        // Handle if id_jadwaltiketbus is not set
        echo "ID tidak ditemukan.";
    }

    mysqli_close($conn);
} else {
    // Handle if request method is not POST
    echo "Metode permintaan tidak valid.";
}
?>

