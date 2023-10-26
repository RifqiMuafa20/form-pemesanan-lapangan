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

if($request == 3){
    $id = $data->id;
    $name = $data->name;
    $addres = $data->addres;
    $contact = $data->contact;
    $lapangan = $data->lapangan;
    $durasi = $data->durasi;
    $date = $data->date;
    $time = $data->itemTime;

    mysqli_query($con, "UPDATE pemesanan SET name='".$name."', addres='".$addres."', contact='".$contact."', lapangan='".$lapangan."', durasi='".$durasi."', date='".$date."', time='".$time."' WHERE id=".$id);
    echo "Success";
    exit;
}

if($request == 4){
    $id = $data->id;
    
    mysqli_query($con, "delete from pemesanan where id=".$id);
    echo "Success";
    exit;
}