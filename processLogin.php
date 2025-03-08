<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $domain = substr(strrchr($email, "@"), 1);
    if ($password === $domain) {
        $_SESSION['email'] = $email;
        header("Location: formCV.php");
    } else {
        $_SESSION['login_error'] = "Oops! Alamat email atau kata sandi yang Anda masukkan tidak cocok";
        header("Location: index.php");
    }
    exit();
}
?>