<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "SHLTD";
    $room_no = $_POST["room_no"];
    $room_type = $_POST["room_type"];
    $price = $_POST["price"];
    $available = $_POST["available"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Room_Info VALUES ('$room_no','$room_type','$price','$available')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ./View_Room.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>