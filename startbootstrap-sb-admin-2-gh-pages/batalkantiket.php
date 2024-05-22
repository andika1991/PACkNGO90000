<?php
include 'koneksi.php';

// Check if ticket ID and type are received via URL
if (isset($_GET['id']) && isset($_GET['type'])) {
    $id_tiket = $_GET['id'];
    $type = $_GET['type'];

    // Determine the table and primary key column based on the ticket type
    switch ($type) {
        case 'kapal':
            $table = 'pesanantiketkapal';
            $id_column = 'id_pesanantiketkapal';
            break;
        case 'pesawat':
            $table = 'pesanantiketpesawat';
            $id_column = 'id_pesanantiket';
            break;
        case 'kereta':
            $table = 'pesanantiketkereta';
            $id_column = 'id_pesanantiket';
            break;
        case 'bus':
            $table = 'pesanantiketbus';
            $id_column = 'id_pesanantiketbus';
            break;
        default:
            echo "Invalid ticket type.";
            exit();
    }

    // Prepare the SQL query to update ticket status to "Refunded"
    $query = "UPDATE $table SET status_pembayaran = 'Refunded' WHERE $id_column = ?";

    if ($stmt = $conn->prepare($query)) {
        // Bind the ticket ID parameter
        $stmt->bind_param("i", $id_tiket);

        // Execute the query
        if ($stmt->execute()) {
            // Check if any row was updated
            if ($stmt->affected_rows > 0) {
                // Redirect back to the ticket list page with a success message
                header("Location: riwayatpesanan.php?message=success");
                exit();
            } else {
                echo "No rows updated. Please check if the ticket ID is correct.";
            }
        } else {
            // Output an error message if the query execution fails
            echo "Error executing query: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Output an error message if the query preparation fails
        echo "Error preparing query: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect if no ticket ID or type is received
    header("Location: riwayatpesanan.php");
    exit();
}
?>
