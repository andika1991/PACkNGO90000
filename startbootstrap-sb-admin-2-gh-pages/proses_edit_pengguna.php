<?php
include 'koneksi.php';

if (isset($_POST['edit-id'], $_POST['edit-username'], $_POST['edit-email'], $_POST['password'])) {
    // Retrieve form data
    $id = $_POST['edit-id'];
    $newUsername = $_POST['edit-username'];
    $newEmail = $_POST['edit-email'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Update user data in the database
    $query = "UPDATE pengguna SET username_pengguna='$newUsername', email='$newEmail', password='$hashedPassword' WHERE id_pengguna='$id'";
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Form submission error: required fields are missing.";
}

// Close the database connection
mysqli_close($conn);
?>
