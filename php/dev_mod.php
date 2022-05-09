<?php
if(isset($_POST["id"]))
{

    $conn = new mysqli("localhost", "root", "root", "devices_state");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $userid = $conn->real_escape_string($_POST["id"]);

    $state = $_POST["moder"];
    $sql = "SELECT * FROM moderation WHERE id = '$userid'";
    $result = $conn->query($sql);
    $subject = "Состояние заказа";
    
    foreach($result as $row)
        {
        $name = $row['Name'];
        $email = $row['EMail'];
        $date = $row['Date'];
        $comment = $row['Comment'];
        $photo = $row['Photo'];
        $checkSerie = $row['check series'];
        $checkNumber = $row['check number'];
    
        if ($state == "done") {
        $sql2 = "INSERT INTO done (`Name`, `EMail`, `Date`, `State`, `Comment`, `Photo`, `check series`, `check number`) VALUES ('$name', '$email', '$date', 'Done', '$comment', '$photo', '$checkSerie', '$checkNumber')";
        $conn->query($sql2);
        $sql3 = "DELETE FROM moderation WHERE id = '$userid'";   
        $conn->query($sql3);  
        $message = "Ваш заказ завершён";
        } elseif ($state == "progress") {
        $sql2 = "INSERT INTO inprogress (`Name`, `EMail`, `Date`, `State`, `Comment`, `Photo`, `check series`, `check number`) VALUES ('$name', '$email', '$date', 'Done', '$comment', '$photo', '$checkSerie', '$checkNumber')";
        $conn->query($sql2);
         $sql3 = "DELETE FROM moderation WHERE id = '$userid'";   
        $conn->query($sql3); 
        $message = "Ваш заказ в процессе выполнения";
        } elseif ($state == "Denied") {
        $sql2 = "INSERT INTO denied (`Name`, `EMail`, `Date`, `State`, `Comment`, `Photo`, `check series`, `check number`) VALUES ('$name', '$email', '$date', 'Done', '$comment', '$photo', '$checkSerie', '$checkNumber')";
        $conn->query($sql2);
        $sql3 = "DELETE FROM moderation WHERE id = '$userid'";   
        $conn->query($sql3);  
        $message = "В вашем заказе отказано";
        }
        }
        $headers = "Доброго времени суток, $name" . "\r\n";
        mail($email, $subject, $message, $headers);
    

    header("Location: admin_page.php");
    $conn->close();  
}
?>