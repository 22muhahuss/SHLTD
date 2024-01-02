<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "SHLTD";
  $name = $_POST["name"];
  $nationality = $_POST["nationality"];
  $email  = $_POST["email"];
  $phone_no = $_POST["phone_number"];
  $landline_no = $_POST["landline_number"];
  $dob = $_POST["dob"];
  $arrival_date = $_POST["arrival_date"];
  $departure_date = $_POST["departure_date"];
  $room = $_POST["room"];
  $cardholder_name = $_POST["cardholder_name"];
  $card_number = $_POST["card_number"];
  $expiry_date = $_POST["expiry_date"];
  $cvv = $_POST["cvv"];

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO Booking_Form_Responses VALUES ('$name','$nationality','$email','$phone_no','$landline_no','$dob','$arrival_date','$departure_date','$room','$cardholder_name','$card_number','$expiry_date','$cvv')";
  if ($conn->query($sql) === TRUE) {
      header("Location: ./index.html");
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>