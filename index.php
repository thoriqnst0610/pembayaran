<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #4CAF50;
            overflow: hidden;
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        .navbar a {
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            display: block;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #45a049;
        }

        .content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="formstatus.php">Cek Pembayaran</a>
        <a href="transaksi_baru.php">Transaksi Baru</a>
        <a href="daftar_pembayaran.php">Daftar Transaksi</a>
    </div>

    <div class="content">
        <h1>Selamat datang!</h1>
        <p>Silakan pilih salah satu menu di atas untuk melanjutkan.</p>
    </div>
</body>
</html>
