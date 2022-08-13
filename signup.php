<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `signup`.`tcet` (`Name`, `Email`, `Password`, `dt`) VALUES ('$name','$email', '$password', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

   

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="content.css" />
    <link rel="stylesheet" href="modal.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>TCET | Thakur College Of Engineering and Technology</title>
  </head>
  <body>
    <div class="nav-container">
      <nav class="navbar">
        <h1 id="navbar-logo"><img src="img/icons8-graduation-cap-48.png" id="tcet-logo"></img>TCET</h1>
        <div class="menu-toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="nav-menu">
          <li><a href="#" class="nav-links">Home</a></li>
          <li><a href="#" class="nav-links">Programs</a></li>
          <li><a href="#" class="nav-links">About Us</a></li>
          <li><a href="#" class="nav-links">Contact Us</a></li>
          <li><a href="#" class="nav-links nav-links-btn">Sign Up</a></li>
        </ul>
      </nav>
    </div>

    <div class="main">
      <div class="main-container">
        <div class="main-content">
          <h1><a href="https://www.tcetmumbai.in/" class="heading-link" target="_blank">Thakur College Of Engineering and Technology</a></h1>
          <hr style="margin-top: 8px;">
          <p>Autonomous Institute Affiliated to University of Mumbai</p>
          <p>Approved by AICTE</p>
          <button class="main-btn"><a href="#">Enroll Now</a></button>
        </div>
      </div>
    </div>

    <!-- Modal-->

    <div class="modal" id="email-modal">
      <div class="modal-content">
        <span class="close-btn">&times;</span>
        <div class="modal-content-left">
          <img id="modal-img" src="img/tcet-logo.png" alt="img" />
        </div>
        <div class="modal-content-right">
          <form action="signup.php" method="post" class="modal-form" id="form">
            <h1>
              Get enrolled with us today! Create your account by filling out the
              information below.
            </h1>
            <div class="form-validation">
              <input
                type="text"
                class="modal-input"
                name="name"
                id="name"
                placeholder="Enter Your Name"
              />
            </div>
            <div class="form-validation">
              <input
                type="email"
                class="modal-input"
                name="email"
                id="email"
                placeholder="Enter Your email"
              />
              <p>Error Message</p>
            </div>
            <div class="form-validation">
              <input
                type="password"
                class="modal-input"
                name="password"
                id="password"
                placeholder="Enter Your password"
              />
              <p>Error Message</p>
            </div>
            <div class="form-validation">
              <input
                type="password"
                class="modal-input"
                name="password"
                id="password-confirm"
                placeholder="Confirm Your password"
              />
              <p>Error Message</p>
            </div>
            <input type="submit" class="modal-input-btn" value="Sign Up" />
            <span class="modal-input-login"
              >Already have an account? Login <a href="#">here</a></span
            >
          </form>
        </div>
      </div>

    </div>
    
    <footer>
      <div class="center">
        Copyright &copy; TCET. All rights reserved.
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
