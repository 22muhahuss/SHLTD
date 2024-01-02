<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "SHLTD";
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $message = $_POST["Message"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Contact_Form_Responses VALUES ('$name','$email','$message')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ./index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>