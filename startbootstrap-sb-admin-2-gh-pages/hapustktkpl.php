<?php
// Include database connection
include 'koneksi.php';

// Check if the ID of the ship ticket schedule is provided in the request
if(isset($_GET['id_jadwaltiketkapal'])) {
    // Escape input to prevent SQL Injection
    $jadwalId = mysqli_real_escape_string($conn, $_GET['id_jadwaltiketkapal']);

    // Start a transaction
    mysqli_begin_transaction($conn);

    try {
        // Delete related rows from pesanantiketkapal
        $deletePesanantiketQuery = "DELETE FROM pesanantiketkapal WHERE id_jadwaltiketkapal = '$jadwalId'";
        
        if (!mysqli_query($conn, $deletePesanantiketQuery)) {
            throw new Exception("Error deleting related rows from pesanantiketkapal: " . mysqli_error($conn));
        }

        // Alter the foreign key constraint on the related table to cascade deletes
        $alterTableQuery = "
        ALTER TABLE datapenumpangkapal
        DROP FOREIGN KEY IF EXISTS datapenumpangkapal_ibfk_2;

        ALTER TABLE datapenumpangkapal
        ADD CONSTRAINT datapenumpangkapal_ibfk_2
        FOREIGN KEY (id_jadwaltiketkapal)
        REFERENCES jadwal_tiket_kapal(id_jadwaltiketkapal)
        ON DELETE CASCADE;
        ";

        // Execute the alter table query
        if (!mysqli_multi_query($conn, $alterTableQuery)) {
            throw new Exception("Error updating foreign key constraint: " . mysqli_error($conn));
        }

        // Free any open result sets
        while(mysqli_more_results($conn)) {
            mysqli_next_result($conn);
            if($result = mysqli_store_result($conn)) {
                mysqli_free_result($result);
            }
        }

        // Delete the ship ticket schedule data based on the provided ID
        $deleteQuery = "DELETE FROM jadwal_tiket_kapal WHERE id_jadwaltiketkapal = '$jadwalId'";

        if(mysqli_query($conn, $deleteQuery)) {
            // Commit the transaction
            mysqli_commit($conn);

            // Redirect back to the ship schedule list page after successfully deleting
            header("Location: jadwalkapal.php");
            exit();
        } else {
            throw new Exception("Error: " . mysqli_error($conn));
        }
    } catch (Exception $e) {
        // Rollback the transaction if any query fails
        mysqli_rollback($conn);
        echo "Error: " . $e->getMessage();
    }
} else {
    // Redirect if no ship ticket schedule ID is provided
    header("Location: blank.html");
    exit();
}
?>
