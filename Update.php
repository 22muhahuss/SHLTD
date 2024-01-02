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
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $query = "UPDATE Room_Info SET Room_No='$room_no', Room_Type='$room_type', Price='$price',Available='$available' WHERE Room_No = $room_no";

  $conn->query($query);

  header("Location: ./View_Room.php");
?>