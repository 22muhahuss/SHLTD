<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form Responses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Stratford Hotel LTD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./manager.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./View_Room.php">Room Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./View_Employee.php">Employees</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Form Submissions
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./View_Booking.php">Booking Form Submissions</a></li>
                <li><a class="dropdown-item" href="#">Imports & Exports</a></li>
                <li><a class="dropdown-item" href="./View_Contact.php">Contact Form Submissions</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.html">Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "SHLTD";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "select * from Contact_Form_Responses";
        $result = $conn->query($sql);
        echo "<table border = 1 style='font-size: 1.2em;' width=100%><tr><th>Name</th><th>Email</th><th>Message</th></tr>";
        while ($row = $result->fetch_assoc()){
            echo "<form action='CFdelete.php' method='POST'>";
            echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Message"]."</td><td style='width: 50px'><input type='hidden' name='email' value='".$row["Email"]."'><input type='submit' value='Delete' style='background-color: #f54242; color: white; border: none; width: 100%'></td></tr>";
        }

        echo "</table>";
    ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>