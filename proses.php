<?php


require __DIR__ . '/config.php';
require __DIR__ . '/query.php';

use GuzzleHttp\Client;
use Midtrans\Snap;

$method = $_SERVER['REQUEST_METHOD'];

if ($method !== "POST") {

    header("Location: index.php");
    exit();
} else {

    $order_id = 'order-' . rand();
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $pembayaran = $_POST['gross_amount'];
}




// melakukan request ke midtrans
$client = new Client([
    'base_uri' => 'https://app.sandbox.midtrans.com/snap/v1/transactions',
    'headers' => [
        'Authorization' => 'Basic ' . base64_encode(\Midtrans\Config::$serverKey . ':'),
        'Content-Type' => 'application/json'
    ]
]);

// parameter yang perlu di isi
$params = array(
    'transaction_details' => array(
        'order_id' => $order_id,
        'gross_amount' => $pembayaran,
    ),
    'customer_details' => array(
        'first_name' => $nama_depan,
        'last_name' => $nama_belakang,
        'email' => $email,
        'phone' => $telepon,
    ),
);






// mendapatkan token snap dan mengarahkan ke metode pembayaran
try {
    $snapToken = Snap::getSnapToken($params);

    $response = $client->post('/snap/v1/transactions', [
        'json' => [
            'transaction_details' => $params['transaction_details'],
            'customer_details' => $params['customer_details'],
            'token' => $snapToken
        ]
    ]);

    //menyimpan pembayaran ke database
    menambahPembayaran($order_id, $nama_depan, $nama_belakang, $alamat, $email, $telepon, $pembayaran, "pending");


    // Output the response
    $responseData = json_decode($response->getBody(), true);

    $token = $responseData['token'] ?? null;
    $redirect = "pembayaran.php"."?token=".$token;

    if ($token) {

        header("Location: " . $redirect);
        exit();

    }
    
} catch (\Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
