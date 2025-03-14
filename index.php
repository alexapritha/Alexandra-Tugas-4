<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #f3f4f6;">
    <div class="card p-4 w-25">
        <h3 class="text-center">Login</h3>
        <form action="processLogin.php" method="POST">
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <?php if (isset($_SESSION['login_error'])): ?>
            <div class="text-danger mt-2"><?= $_SESSION['login_error']; unset($_SESSION['login_error']); ?></div>
        <?php endif; ?>
    </div>
</body>
</html>