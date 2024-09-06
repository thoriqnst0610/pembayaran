<?php require __DIR__. '/cek_proses.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            width: 100%;
            box-sizing: border-box;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            color: #555;
        }

        li:last-child {
            border-bottom: none;
        }

        .not-found {
            color: #ff0000;
            font-size: 18px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php if($data == false): ?>
        <div class="container">
            <p class="not-found">Data Tidak ditemukan</p>
        </div>
        <?php exit(); ?>
    <?php endif; ?>

    <div class="container">
        <h1>Status Pembayaran Anda</h1>
        <ul>
            <li>Order ID: <?= htmlspecialchars($data['order_id'], ENT_QUOTES, 'UTF-8') ?></li>
            <li>Status: <?= htmlspecialchars($data['transaction_status'], ENT_QUOTES, 'UTF-8') ?></li>
            <li>Jumlah Bayar: <?= htmlspecialchars($data['gross_amount'], ENT_QUOTES, 'UTF-8') ?></li>
            <li>Bank Pembayaran: <?= htmlspecialchars($data['va_numbers'][0]['bank'], ENT_QUOTES, 'UTF-8') ?? 'N/A' ?></li>
        </ul>
    </div>
</body>
</html>
