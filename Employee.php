<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "SHLTD";
    $u_name = $_POST["username"];
    $pwd_name = $_POST["password"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from Employee_Credentials";
    $result = $conn->query($sql);
    
    while ($row = $result->fetch_assoc()){
        if ($row["Username"] == $u_name && $row["Password"] == $pwd_name){
            header("Location: ./employee.html");
        }else{
            echo "Login failed. Please try again later";
        }
    }
?>