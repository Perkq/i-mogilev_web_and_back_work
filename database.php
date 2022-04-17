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
            header("Location: admin_page.php");
        }
        else {
            // header("Location: admin_page.php");
            echo  "//////////////////////" . $serie . "asfffffffffffffffffffffffff";
        }
    	// echo "<p>Первый объект СУКА " . $row["Login"];
		// echo "<p>Второй объект НАхуй " . $row["Password"];
	}

?>