<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['cv'])) {
    header("Location: index.php");
    exit();
}
$cv = $_SESSION['cv'];
$email = $_SESSION['email'];
$logout_message = isset($_SESSION['logout_message']) ? $_SESSION['logout_message'] : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; }
        .font-poppins { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-6 max-w-lg w-full flex relative">
        <div class="w-3/4 pr-4">
            <h1 class="text-2xl font-bold text-gray-800 font-poppins"><?= htmlspecialchars($cv['nama']) ?></h1>
            <p class="text-sm font-semibold text-gray-600"><?= htmlspecialchars($cv['profesi']) ?></p>
            <div class="mt-4">
                <p class="text-sm text-gray-800"><span class="font-semibold">TTL:</span> <?= htmlspecialchars($cv['ttl']) ?></p>
                <p class="text-sm text-gray-800"><span class="font-semibold">Email:</span> <?= htmlspecialchars($email) ?></p>
                <p class="text-sm text-gray-800"><span class="font-semibold">Address:</span> <?= htmlspecialchars($cv['alamat']) ?></p>
                <p class="text-sm text-gray-800"><span class="font-semibold">Phone:</span> <?= htmlspecialchars($cv['telepon']) ?></p>
            </div>
            <div class="mt-6">
                <h2 class="text-sm font-semibold text-gray-800">Riwayat Pendidikan</h2>
                <p class="text-sm text-gray-800"><?= htmlspecialchars($cv['pendidikan']) ?></p>
            </div>
            <div class="mt-6 text-sm text-gray-800">
                www.civigenerator.com
            </div>
        </div>
        <div class="w-1/4 flex items-center justify-center relative">
            <div class="absolute inset-0 bg-blue-800 ml-4"></div>
            <div class="absolute inset-y-0 left-0 w-1 bg-yellow-500 ml-2"></div>
            <div class="absolute left-[-55px] z-10" style="top: 30px;">
                <img alt="Profile picture of <?= htmlspecialchars($cv['nama']) ?>" src="<?= htmlspecialchars($cv['foto']) ?>" class="rounded-full border-4 border-white" style="width: 120px; height: 120px; object-fit: cover;"/>
            </div>
        </div>
    </div>

    <?php if ($logout_message): ?>
        <div class="text-center mt-4 w-full max-w-lg">
            <div class="bg-green-100 text-green-700 p-3 rounded-lg">
                <?= htmlspecialchars($logout_message); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="text-center mt-4 w-full max-w-lg">
        <form action="logout.php" method="POST">
            <button type="submit" 
                class="bg-red-500 hover:bg-red-600 text-white font-semibold text-sm py-2 px-3 rounded-full shadow-md transition duration-200"
                style="font-family: var(--bs-body-font-family);">
                Logout
            </button>
        </form>
    </div>

</body>
</html>