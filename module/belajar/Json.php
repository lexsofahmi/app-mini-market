<?php
/**
 * Created by PhpStorm.
 * User: Wilson
 * Date: 7/9/2015
 * Time: 7:47 PM
 */
echo "Create json <br>";
$buku = array(
    "java" => 70000,
    "C" => 90000,
    "C++" => 10000
);

echo json_encode($buku);