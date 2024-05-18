<?php
session_start(); 
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_pengguna'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "UPDATE pengguna SET username_pengguna='$username', email='$email', password='$hashed_password' WHERE id_pengguna='$id'";
    } else {
        $query = "UPDATE pengguna SET username_pengguna='$username', email='$email' WHERE id_pengguna='$id'";
    }

    if (mysqli_query($conn, $query)) {
        // Update session variables
        $_SESSION['username_pengguna'] = $username;
        $_SESSION['email_pengguna'] = $email;

        // Redirect to akun.php after updating session variables
        header("Location: akun.php");
        exit();
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
