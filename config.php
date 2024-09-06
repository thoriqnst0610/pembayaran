<?php
// Autoload dependencies
require 'vendor/autoload.php';

// Set Midtrans configuration
\Midtrans\Config::$serverKey = 'SB-Mid-server-xxxxxxxxxxxx'; // Ganti dengan Server Key Anda
\Midtrans\Config::$isProduction = false; // Ubah ke true jika menggunakan lingkungan produksi
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;
?>
