<?php

include "config.php";

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

if($request == 2){
    $id = $data->id;
    $name = $data->name;
    $addres = $data->addres;
    $contact = $data->contact;
    $lapangan = $data->lapangan;
    $durasi = $data->durasi;
    $date = $data->date;
    $time = $data->time;

    mysqli_query($con, "UPDATE pemesanan SET name = '$name', addres = '$addres', contact = '$contact', lapangan = '$lapangan', durasi = '$durasi', date = '$date', time = '$time' WHERE id = '$id'");
    echo "Success";
}

