<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
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
    </ul>
  </nav>
  <div class="container">
    <section class="vh-100">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 text-black">

            <div class="px-5 ms-xl-4">
              <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
              <span class="h1 fw-bold mb-0"></span>
            </div>

            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

              <form style="width: 23rem;">

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form2Example18" class="form-control form-control-lg" />
                  <label class="form-label" for="form2Example18">Email address</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form2Example28" class="form-control form-control-lg" />
                  <label class="form-label" for="form2Example28">Password</label>
                </div>
                <div class="mb-3">
            <label for="captcha-input" class="form-label">Enter Captcha</label>
            <input type="text" class="form-control" id="captcha-input" required>
          </div>
                <div class="pt-1 mb-4">
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block"
                    type="button">Login</button>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                <p>Don't have an account? <a href="ac.php" class="link-info">Register here</a></p>

              </form>

            </div>

          </div>
          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="" alt="Login image" class="w-100 vh-100"
              style="object-fit: cover; object-position: left;">
          </div>
        </div>
      </div>
    </section>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {
      // Generate captcha on page load
      generateCaptcha();
      // Handle captcha refresh button click
      $("#refresh-captcha").click(function () {
        generateCaptcha();
        $("#captcha-input").val("");
      });
      // Handle form submit
      $("#captcha-form").submit(function (event) {
        event.preventDefault();

        // Validate captcha
        var captchaInput = $("#captcha-input").val();
        var captchaCode = sessionStorage.getItem("captchaCode");
        if (captchaInput != captchaCode) {
          alert("Invalid captcha code. Please try again.");
          generateCaptcha();
          $("#captcha-input").val("");
          return;
        }
        // Form validation successful, submit form
        alert("Form submitted successfully.");
        $("#captcha-form").trigger("reset");
        generateCaptcha();
      });

      // Define the function generateCaptcha()
      function generateCaptcha() {
        // Get the canvas element with ID captcha and create an instance of its canvas rendering context
        var a = $("#captcha")[0],
            b = a.getContext("2d");
          // Clear the canvas
          b.clearRect(0, 0, a.width, a.height);
          // Define the string of characters that can be included in the captcha
          var f = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",
              e = "",
              g = -45,
              h = 45,
              i = h - g,
              j = 20,
              k = 30,
              l = k - j;
          // Generate each character of the captcha
          for (var m = 0; m < 6; m++) {
            // Select random letter from the pool to be part of the captcha
            var n = f.charAt(Math.floor(Math.random() * f.length));
            e += n;
            
            // Set up the text formatting
            b.font = j + Math.random() * l + "px Arial";
            b.textAlign = "center";
            b.textBaseline = "middle";
            
            // Set the color of the text
            b.fillStyle = "rgb(" + Math.floor(Math.random() * 256) + "," + Math.floor(Math.random() * 256) + "," + Math.floor(Math.random() * 256) + ")";
        
            // Add the character to the canvas
            var o = g + Math.random() * i;
            b.translate(20 + m * 30, a.height / 2);
            b.rotate(o * Math.PI / 180);
            b.fillText(n, 0, 0);
            b.rotate(-1 * o * Math.PI / 180);
            b.translate(-(20 + m * 30), -1 * a.height / 2);
          }
          // Set the captcha code in session storage
          sessionStorage.setItem("captchaCode", e);
      }
    })
    </script>
</body>

</html>