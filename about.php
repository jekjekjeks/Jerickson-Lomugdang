<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="favicon.jpg">
    <title>ABOUT - JEKS</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Me</a></li>
              <li><a href="hobbies.php">Hobbies</a></li>
              <li><a href="work-experience.php">Work Experience</a></li>
              <li><a href="my-people.php">My People</a></li>
              <li>
              <a data-placement="bottom" href="index.php?logout='1'" target><p></p> Logout</a>
            </li>
          </ul>
          <h1 class="logo">JEKS</h1>
      </div>
  </nav>
    <section class="showcase-area2" id="showcase">
      <div class="showcase-container2">
        <h1 class="main-title" id="home">About Me</h1>
      </div>
    </section>

    <section id="about">
      <div class="about-wrapper container">
        <div class="about-text">
          <p class="small">About Me</p>
          <h2>Get to know me a little bit</h2>
          <p>
            I am Jerickson A. Lomugdang, 28 years old from Marilao Bulacan. I am 6th from the order of my family. I am currently taking Business Administration in Financial Management at St  Louis College Valenzuela.
          </p>
        </div>
        <div class="about-img">
          <img src="home-image.jpg" alt="about me" />
        </div>
      </div>
    </section>
    
    <footer id="footer">
      <h2>&copy; 2024 JEKS All rights reserved.</h2>
    </footer>
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      // Add smooth scrolling to all links
      $("a").on("click", function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $("html, body").animate(
            {
              scrollTop: $(hash).offset().top,
            },
            800,
            function () {
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            }
          );
        } // End if
      });
    });
  </script>
</html>
