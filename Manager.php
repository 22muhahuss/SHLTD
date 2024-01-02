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
    $sql = "select * from Manager_Credentials";
    $result = $conn->query($sql);
    
    while ($row = $result->fetch_assoc()){
        if ($row["Username"] == $u_name && $row["Password"] == $pwd_name){
            header("Location: ./manager.html");
        }else{
            echo "Login failed. Please re-enter your password or try again later";
        }
    }
?>