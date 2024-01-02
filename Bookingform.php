<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stratford Hotel LTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Book a Room</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Gallery.html">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Forms
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./Bookingform.php">Booking Form</a></li>
                <li><a class="dropdown-item" href="./Work_Here.html">Work Here</a></li>
                <li><a class="dropdown-item" href="./Contact.html">Contact Us</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Staff_Login.html">Staff Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <form action="Booking.php" method="POST">
      <label class="form-label">Name:</label><input type="text" name="name" class="form-control" required>
        <br>
        <br>
        <label>Nationality</label><select name="nationality" id="nationality" class="form-select" required>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Antigua & Deps">Antigua & Deps</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option>Bhutan</option>
            <option>Bolivia</option>
            <option>Bosnia Herzegovina</option>
            <option>Botswana</option>
            <option>Brazil</option>
            <option>Brunei</option>
            <option>Bulgaria</option>
            <option>Burkina</option>
            <option>Burundi</option>
            <option>Cambodia</option>
            <option>Cameroon</option>
            <option>Canada</option>
            <option>Cape Verde</option>
            <option>Central African Rep</option>
            <option>Chad</option>
            <option>Chile</option>
            <option>China</option>
            <option>Colombia</option>
            <option>Comoros</option>
            <option>Congo</option>
            <option>Congo</option>
            <option>Costa Rica</option>
            <option>Croatia</option>
            <option>Cuba</option>
            <option>Cyprus</option>
            <option>Czech Republic</option>
            <option>Denmark</option>
            <option>Djibouti</option>
            <option>Dominica</option>
            <option>Dominican Republic</option>
            <option>East Timor</option>
            <option>Ecuador</option>
            <option>Egypt</option>
            <option>El Salvador</option>
            <option>Equatorial Guinea</option>
            <option>Eritrea</option>
            <option>Estonia</option>
            <option>Ethiopia</option>
            <option>Fiji</option>
            <option>Finland</option>
            <option>France</option>
            <option>Gabon</option>
            <option>Gambia</option>
            <option>Georgia</option>
            <option>Germany</option>
            <option>Ghana</option>
            <option>Greece</option>
            <option>Grenada</option>
            <option>Guatemala</option>
            <option>Guinea</option>
            <option>Guinea-Bissau</option>
            <option>Guyana</option>
            <option>Haiti</option>
            <option>Honduras</option>
            <option>Hungary</option>
            <option>Iceland</option>
            <option>India</option>
            <option>Indonesia</option>
            <option>Iran</option>  
            <option>Iraq</option>
            <option>Ireland {Republic}</option>
            <option>Israel</option>
            <option>Italy</option>
            <option>Ivory Coast</option>
            <option>Jamaica</option>
            <option>Japan</option>
            <option>Jordan</option>
            <option>Kazakhstan</option>
            <option>Kenya</option>
            <option>Kiribati</option>
            <option>Korea North</option>
            <option>Korea South</option>
            <option>Kosovo</option>
            <option>Kuwait</option>
            <option>Kyrgyzstan</option>
            <option>Laos</option>
            <option>Latvia</option>
            <option>Lebanon</option>
            <option>Lesotho</option>
            <option>Liberia</option>
            <option>Libya</option>
            <option>Liechtenstein</option>
            <option>Lithuania</option>
            <option>Luxembourg</option>
            <option>Macedonia</option>
            <option>Madagascar</option>
            <option>Malawi</option>
            <option>Malaysia</option>
            <option>Maldives</option>
            <option>Mali</option>
            <option>Malta</option>
            <option>Marshall Islands</option>
            <option>Mauritania</option>
            <option>Mauritius</option>
            <option>Mexico</option>
            <option>Micronesia</option>
            <option>Moldova</option>
            <option>Monaco</option>
            <option>Mongolia</option>
            <option>Montenegro</option>
            <option>Morocco</option>
            <option>Mozambique</option>
            <option>Myanmar, {Burma}</option>
            <option>Namibia</option>
            <option>Nauru</option>
            <option>Nepal</option>
            <option>Netherlands</option>
            <option>New Zealand</option>
            <option>Nicaragua</option>
            <option>Niger</option>
            <option>Nigeria</option>
            <option>Norway</option>
            <option>Oman</option>
            <option>Pakistan</option>
            <option>Palau</option>
            <option>Panama</option>
            <option>Papua New Guinea</option>
            <option>Paraguay</option>
            <option>Peru</option>
            <option>Philippines</option>
            <option>Poland</option>
            <option>Portugal</option>
            <option>Qatar</option>
            <option>Romania</option>
            <option>Russian Federation</option>
            <option>Rwanda</option>
            <option>St Kitts & Nevis</option>
            <option>St Lucia</option>
            <option>Saint Vincent & the Grenadines</option>
            <option>Samoa</option>
            <option>San Marino</option>
            <option>Sao Tome & Principe</option>
            <option>Saudi Arabia</option>
            <option>Senegal</option>
            <option>Serbia</option>
            <option>Seychelles</option>
            <option>Sierra Leone</option>
            <option>Singapore</option>
            <option>Slovakia</option>
            <option>Slovenia</option>
            <option>Solomon Islands</option>
            <option>Somalia</option>
            <option>South Africa</option>
            <option>South Sudan</option>
            <option>Spain</option>
            <option>Sri Lanka</option>
            <option>Sudan</option>
            <option>Suriname</option>
            <option>Swaziland</option>
            <option>Sweden</option>
            <option>Switzerland</option>
            <option>Syria</option>
            <option>Taiwan</option>
            <option>Tajikistan</option>
            <option>Tanzania</option>
            <option>Thailand</option>
            <option>Togo</option>
            <option>Tonga</option>
            <option>Trinidad & Tobago</option>
            <option>Tunisia</option>
            <option>Turkey</option>
            <option>Turkmenistan</option>
            <option>Tuvalu</option>
            <option>Uganda</option>
            <option>Ukraine</option>
            <option>United Arab Emirates</option>
            <option>United Kingdom</option>
            <option>United States</option>
            <option>Uruguay</option>
            <option>Uzbekistan</option>
            <option>Vanuatu</option>
            <option>Vatican City</option>
            <option>Venezuela</option>
            <option>Vietnam</option>
            <option>Yemen</option>
            <option>Zambia</option>
            <option>Zimbabwe</option>
        </select>
        <br>
        <br>
        <label>Email:</label><input type="email" name="email" id="email" class="form-control" required>
        <br>
        <br>
        <label>Phone Number:</label><input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="0208 594 206" required>
        <br>
        <br>
        <label>Landline Number:</label><input type="tel" name="landline_number" id="landline_number" class="form-control">
        <br>
        <br>
        <label>DOB:</label><input type="date" class="form-control" name="dob" id="dob" required>
        <br>
        <br>
        <label>Arrival Date:</label><input type="date" name="arrival_date" id="arrival_date" class="form-control" required>
        <br>
        <br>
        <label>Departure Date:</label><input type="date" name="departure_date" id="departure_date" class="form-control" required>
        <br>
        <br>
        <label class="form-label">Which room would you like to book?</label><select name="room" id="room" class="form-select" required>
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
          $sql = "select * from Room_Info WHERE Available = 'Yes'";
          $result = $conn->query($sql);
          while ($row = $result->fetch_assoc()){
              echo "<option>Room ".$row['Room_No']."&nbspType: ".$row['Room_Type']."&nbspPrice: £".$row['Price']."</option>";
          }
          ?>
        </select>
        <br>
        <br>
        <label>Cardholder Name:</label><input type="text" name="cardholder_name" id="cardholder_name" class="form-control" requried>
        <br>
        <br>
        <label>Card Number:</label><input type="tel" name="card_number" id="card_number" class="form-control" required>
        <br>
        <br>
        <label>Expiry Date:</label><input type="date" name="expiry_date" id="expiry_date" class="form-control" required>
        <br>
        <br>
        <label>CVV:</label><input type="tel" name="cvv" id="cvv" class="form-control" required>
        <br>
        <br>
        <center><input type="submit" class="btn btn-primary"></center>
    </form>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>