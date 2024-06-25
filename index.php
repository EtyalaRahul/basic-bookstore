<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .feedbackform {
      height: 240px;
      margin: auto;
      width: 100%;
      margin-top: 60px;
      margin-left: -70px;
    }

    .ram {
      display: flex;
      flex-direction: column;
    }

    .ram input {
      gap: 12px;
      margin-top: 6px;
    }

    .ram input::placeholder {
      color: black;
      text-align: center;
    }

    .ram textarea {
      margin-top: 6px;
    }

    input[type="submit"] {
      margin-left: 340px;
      background-color: blue;
    }

    .rah1 {
      text-align: center;
    }

    @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

    * {
      box-sizing: border-box;
    }


    body.dark {
      background-color: #292c35;
    }

    /* #9b59b6 */

    body.dark h1,
    body.dark .support a {
      color: #fff;
    }

    .checkbox {
      opacity: 0;
      position: absolute;
    }

    .checkbox-label {
      background-color: #111;
      width: 50px;
      height: 26px;
      border-radius: 50px;
      position: relative;
      padding: 5px;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .fa-moon {
      color: #f1c40f;
    }

    .fa-sun {
      color: #f39c12;
    }

    .checkbox-label .ball {
      background-color: #fff;
      width: 22px;
      height: 22px;
      position: absolute;
      left: 2px;
      top: 2px;
      border-radius: 50%;
      transition: transform 0.2s linear;
    }

    .checkbox:checked+.checkbox-label .ball {
      transform: translateX(24px);
    }


    /*  Support me if you like it */
    .support {
      position: absolute;
      right: 20px;
      bottom: 20px;
    }

    .support a {
      color: #292c35;
      font-size: 32px;
      backface-visibility: hidden;
      display: inline-block;
      transition: transform 0.2s ease;
    }

    .support a:hover {
      transform: scale(1.1);
    }

    .hp {
      /* margin-top: 1000px; */
    }

    .wa {
      width: 100%;
      height: 300px;
      margin-top: 4px;
      display: flex;
      background-color: #D2E8E9;
    }

    .wa img {
      width: 300px;
      height: 300px;
      margin: auto;
      box-shadow: 5px 5px white;
      border-radius: 95px;
      padding: 15px;
    }

    .wa img:hover {
      transform: scale(1.15, 1.15);
    }
    
  </style>
</head>

<body>
  <nav>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="comics.php">COMIC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="devetional.php">DEVETIONAL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sports.php">SPORTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="current_affairs.php">CURRENT AFFAIRS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="others.php">OTHER</a>
      </li>
      <li class="nav-item">
        <div>
          <input type="checkbox" class="checkbox" id="checkbox">
          <label for="checkbox" class="checkbox-label">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <span class="ball"></span>
          </label>
        </div>
      </li>
      <li class="nav-item">
        <a href="login.php"><button type="button" class="btn btn-outline-primary button" id="remo">Login</a>
      </li>
    </ul>
  </nav>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://wallpaperaccess.com/full/5487841.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://wallpapercave.com/wp/wp3892792.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://wallpaperaccess.com/full/31201.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <div class="wa">
    <marquee behavior="alternate">
      <img src="https://images.pexels.com/photos/694740/pexels-photo-694740.jpeg?auto=compress&cs=tinysrgb&w=600"
        alt="book1">
      <img src="https://images.pexels.com/photos/256450/pexels-photo-256450.jpeg?auto=compress&cs=tinysrgb&w=600"
        alt="book2">
      <img src="https://images.pexels.com/photos/1809347/pexels-photo-1809347.jpeg?auto=compress&cs=tinysrgb&w=600"
        alt="book3">
      <img src="https://images.pexels.com/photos/214659/pexels-photo-214659.jpeg?auto=compress&cs=tinysrgb&w=600"
        alt="book4">
      <img src="https://th.bing.com/th/id/OIP.9Y31JLDYsmlb59YR6G6D1QHaEo?w=282&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
        alt="">
      <img src="https://th.bing.com/th/id/OIP.QOQUP5zI3P4ouRcpcFE-RQHaEo?w=231&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
        alt="">
      <img src="https://th.bing.com/th/id/OIP.6eJfbG0U0lu-KRb_a5OO2wHaEo?w=290&h=181&c=7&r=0&o=5&dpr=1.3&pid=1.7"
        alt="">
      <img src="https://th.bing.com/th/id/OIP.zJidkyQuqbjZ99MdSlLk9AHaEo?w=232&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
        alt="">
    </marquee>
  </div>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $text = $_POST['text'];

    // Replace with your actual database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbms";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO feedback (name, emailid, mobile, feedback, time) VALUES (?, ?, ?, ?, current_timestamp())";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute
    $stmt->bind_param("ssss", $name, $email, $tel, $text);
    if ($stmt->execute()) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Hello ' . htmlspecialchars($name) . '</strong> welcome to our online store &#x1F600;
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">
              Failed to insert into the database: ' . $conn->error . '
            </div>';
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
  }
  ?>
  
  <footer class="footerr hp">
    <div class="divv rah1">
      <h3>About us</h3>
      <ul class="li">
        <li>Demo</li>
        <li>contact</li>
        <li>customer support</li>
        <li>Terms of service</li>
        <li>guidence</li>
        <li>more info..</li>
      </ul>
      <p>© Copyright 2024 _rahul_etyala.</p>
    </div>
    <div class="divv rah2">
      <h3>social media</h3>
      <ul>
        <li><img src="icons8-instagram-48.png" style="border: radius 20px;"><a
            href="https://www.instagram.com/_rahul_etyala_/" style="text-decoration:none; color: white;">Instagram</a>
        </li>
        <li><img src="icons8-facebook-48.png" style="border: radius 20px;"><a
            href="https://www.facebook.com/sharat.karthik.9" style="text-decoration:none; color: white;">facebook</a>
        </li>
        <li><img src="icons8-whatsapp-48.png" style="border: radius 20px;">whatsapp</li>
        <li><img src="icons8-telegram.gif" style="border-radius:20px;">telegram</li>
      </ul>
    </div>
    <div class="divv2">
      <div class="feedbackform">
        <h4 style="text-align:center; " class="linear-text-gradient">Your feedback is important for us</h4>
        <div class="ram">
          <input type="text" class="name" id="name" placeholder="Enter your name">
          <input type="email" class="email" id="email" placeholder="Enter your email id">
          <input type="tel" class="tel" id="tel" placeholder="Enter your mobile number">
          <textarea rows="4" cols="40" placeholder="please enter your valubale feedback"></textarea>
          <a href=""><input type="submit" class="submit btn btn-primary" placeholder="submit"></a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    const checkbox = document.getElementById("checkbox")
    checkbox.addEventListener("change", () => {
      document.body.classList.toggle("dark")
    })
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>