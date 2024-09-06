<?php

include __DIR__ . '/koneksi.php';

function menambahPembayaran(
    string $order_id, 
    string $nama_depan, 
    string $nama_belakang, 
    string $alamat, 
    string $email, 
    string $telepon, 
    string $gross_amount, 
    string $status
){

    global $connect;


    $sql = "INSERT INTO transactions (order_id, nama_depan, nama_belakang, alamat, email, telepon, gross_amount, status) 
    VALUES ( ?,?,?,?,?,?,?,?)";

    $stmt = $connect->prepare($sql);

    if ($stmt === false) {
        die("Prepare failed: " . $connect->error);
    }

    $stmt->bind_param("ssssssis", $order_id, $nama_depan, $nama_belakang, $alamat, $email, $telepon, $gross_amount, $status);

    if ($stmt->execute()) {
        $pesan =  true;
    } else {
        $pesan =  "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();

    return $pesan;
}

function ambilPembayaran()
{
    global $connect;

    $sql = "SELECT * FROM transactions";

    return $results = $connect->query($sql);

    if ($results === false) {
        die("Kesalahan query: " . $connect_unit->error);
    }
}