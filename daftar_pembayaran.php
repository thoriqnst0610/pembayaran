<?php include __DIR__. '/query.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
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
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            max-width: 1000px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin: 0 auto;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        caption {
            padding: 10px;
            caption-side: top;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div>
        <table>
            <caption>Data Transaksi</caption>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Pembayaran</th>
            </tr>
            <?php 
            $data = ambilPembayaran();
            $no = 1;
            foreach($data as $pembayaran) { 
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($pembayaran['nama_depan'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($pembayaran['alamat'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($pembayaran['email'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($pembayaran['telepon'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($pembayaran['gross_amount'], ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
