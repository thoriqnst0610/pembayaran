<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Baru</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
    <h1 style="text-align: center; color: #333; margin-top: 20px;">Pengisian formulir pembayaran</h1>
    <form action="proses.php" method="POST" style="max-width: 600px; margin: auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <div style="margin-bottom: 15px;">
            <label for="nama_depan" style="display: block; margin-bottom: 5px; font-weight: bold;">Nama Depan</label>
            <input type="text" name="nama_depan" id="nama_depan" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="nama_belakang" style="display: block; margin-bottom: 5px; font-weight: bold;">Nama Belakang</label>
            <input type="text" name="nama_belakang" id="nama_belakang" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="alamat" style="display: block; margin-bottom: 5px; font-weight: bold;">Alamat</label>
            <input type="text" name="alamat" id="alamat" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">Email</label>
            <input type="email" name="email" id="email" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="telepon" style="display: block; margin-bottom: 5px; font-weight: bold;">No Telpon</label>
            <input type="text" name="telepon" id="telepon" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="gross_amount" style="display: block; margin-bottom: 5px; font-weight: bold;">Jumlah Bayar</label>
            <input type="text" name="gross_amount" id="gross_amount" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; width: 100%;">Kirim</button>
    </form>
</body>
</html>
