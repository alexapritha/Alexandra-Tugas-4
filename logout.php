<?php
session_start();
session_destroy();
$_SESSION['logout_message'] = "Anda telah logout.";
header("Location: index.php");
exit();
?>