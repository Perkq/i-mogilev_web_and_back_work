<?php

$conn = new mysqli("localhost", "root", "root", "service_center");
    
$serie = $_POST['series'];
$check = $_POST['check'];
$sql = "SELECT * FROM admins";
$result = $conn->query($sql);
	foreach($result as $row) {
        global $serie;
        global $check;

         if (($serie  == $row["Login"]) && ($check  == $row["Password"])) {
             echo true;
         }
         
	}

?>