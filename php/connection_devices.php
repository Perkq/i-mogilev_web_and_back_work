<?php
$conn = new mysqli("localhost", "root", "root", "devices_state");

if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>