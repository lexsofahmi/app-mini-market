<?php
/**
 * Created by PhpStorm.
 * User: Wilson
 * Date: 7/9/2015
 * Time: 5:37 PM
 */

header("Content-Type:application-json");

if (!empty($_GET['buku'])){
    $cariClient = $_GET['buku'];
    $harga = cariHargaBuku($cariClient);

    if (empty($harga)){
        // buku tidak ditemukan
        kirimRespon(200, "buku tidak ditemukan", NULL);
    } else {
        // buku ditemukan
        kirimRespon(200, "buku ditemukan", $harga);
    }

} else {
    kirimRespon(400, "Invalid Request", NULL);
}


function kirimRespon($status, $status_message, $data){
    header("HTTP/1.1 $status $status_message");
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;

    $json_response = json_encode($response);
    echo $json_response;
}

function cariHargaBuku($cari){

    $buku = array(
        "java" => 70000,
        "c" => 90000,
        "php" => 100000
    );

    foreach ($buku as $b => $harga){
        if ($cari==$b){
            return $harga;
            break;
        }
    }

}
