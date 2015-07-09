<?php
/**
 * Created by PhpStorm.
 * User: Wilson
 * Date: 7/9/2015
 * Time: 8:15 PM
 */
if (isset($_GET['buku'])){
    $cariBuku = $_GET['buku'];
    $url="http://localhost/app-mini-market/rest/$cariBuku";

    $clientX = curl_init($url);
    curl_setopt($clientX,CURLOPT_RETURNTRANSFER,1);

    // $output contains the output string
    $output = curl_exec($clientX);
    $hasil = json_decode($output);

    echo "Harga buku " . $_GET['buku'] . ": " . $hasil->data;

    curl_close($clientX);
}

echo "<a href='/app-mini-market'> Back to index</a>";
