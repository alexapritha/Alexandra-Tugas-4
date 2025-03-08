<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form CV</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-gray-800 text-dark" style="background-color: #f3f4f6;">
    <div class="container mt-5">
        <h2>Formulir CV</h2>
        <form action="processCV.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Profesi:</label>
                <input type="text" name="profesi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Tempat, Tanggal Lahir:</label>
                <input type="text" name="ttl" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Alamat:</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>No. Telepon:</label>
                <input type="text" name="telepon" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Riwayat Pendidikan:</label>
                <input type="text" name="pendidikan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Upload Foto:</label>
                <input type="file" name="foto" class="form-control" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>