<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $upload_dir = "uploads/";
        $file_name = basename($_FILES['foto']['name']);
        $file_path = $upload_dir . $file_name;

        // Pastikan direktori upload ada
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $file_path)) {
            $_SESSION['cv'] = $_POST;
            $_SESSION['cv']['foto'] = $file_path;
            header("Location: CVresult.php");
            exit();
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Silahkan upload file gambar yang ingin ditampilkan di CV";
    }
}
?>