<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "SHLTD";
    $room_no = $_POST["room_no"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM Room_Info WHERE Room_No = '$room_no'";
    $result = $conn->query($sql);
    header("Location: View_Room.php");
?>