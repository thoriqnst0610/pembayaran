<?php
require_once __DIR__. '/cekToken.php';
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="client key anda"></script> //client key
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        #pay-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #pay-button:hover {
            background-color: #45a049;
        }

        #snap-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pembayaran Metode</h1>
        <button id="pay-button">Bayar Sekarang</button>
        <div id="snap-container"></div>
    </div>

    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay("<?= $token ?>");
        });

        // Optional: handle payment completion
        snap.on('payment_complete', function (result) {
            console.log('Pembayaran Selesai', result);
            // Handle the result here (e.g., send to your server)
        });
    </script>
</body>
</html>
