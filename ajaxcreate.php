<?php

include "config.php";

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

if($request == 2){
    $name = $data->name;
    $addres = $data->addres;
    $contact = $data->contact;
    $lapangan = $data->lapangan;
    $durasi = $data->durasi;
    $date = $data->date;
    $time = $data->time;

    mysqli_query($con, "INSERT INTO pemesanan(name, addres, contact, lapangan, durasi, date, time) VALUES('".$name."', '".$addres."', '".$contact."', '".$lapangan."', '".$durasi."', '".$date."', '".$time."')");
    echo "Success";
}
