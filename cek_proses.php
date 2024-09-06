<?php

require 'vendor/autoload.php'; // Pastikan path ini sesuai dengan autoload.php Composer

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

function getTransactionDetails($orderId) {
    // Ganti dengan Server Key Anda yang sebenarnya dan encode ke Base64
    $serverKey = 'SB-Mid-server-xxxxxxxxxxxxx'; // ganti dengan Server Key Anda
    $encodedServerKey = base64_encode($serverKey . ':');

    // Inisialisasi Guzzle Client
    $client = new Client([
        'base_uri' => 'https://api.sandbox.midtrans.com/v2/', // Base URI yang benar
    ]);

    try {
        // Kirim permintaan GET
        $response = $client->request('GET', $orderId . '/status', [
            'headers' => [
                'Authorization' => 'Basic ' . $encodedServerKey,
                'Content-Type' => 'application/json',
            ],
        ]);

        // Ambil isi respons
        $body = $response->getBody();
        $data = json_decode($body, true);

        return $data;

    } catch (RequestException $e) {
        // Tangani kesalahan jika terjadi
        echo 'Request failed: ' . $e->getMessage();
        return null;
    }
}

// Contoh penggunaan
$orderId = $_POST['order_id']; // Ganti dengan order_id yang relevan
$transactionDetails = getTransactionDetails($orderId);

if ($transactionDetails) {
    $data = $transactionDetails;
} else {
    $data = false;
}
?>
