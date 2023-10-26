<?php
include "config.php";

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;

$stmt = $con->prepare("DELETE FROM pemesanan WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error: " . $stmt->error;
}

$stmt->close();
$con->close();