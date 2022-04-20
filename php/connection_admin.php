<?php
$conn = new mysqli("localhost", "root", "root", "service_center");

if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>

