<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="WEB programming" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;600;800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet" />
  <script src="https://use.fontawesome.com/78f2921884.js"></script>
  <title>Homepage</title>
  <link rel="stylesheet" href="~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/css/index.css" />
</head>

<body>

<?php
        session_start();
        include_once "session.inc";
    ?>

  <section class="main">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top header header-hide scroll-header" id="navBar">
      <div class="container">
        <a class="navbar-brand pt-2 px-2 name" href="#">
          <h3>Travel <span class="AK">Sh</span>are</h3>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="toggler-icon top-bar"></span>
          <span class="toggler-icon middle-bar"></span>
          <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse nav-right text-primary" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto text-center pt-2 d-flex">
            <li class="nav-item">
              <a class="nav-link" href="/~s3991933/assignment-3-final-website-team_18_cosc3046_sep23/index.html">
                <p>Home</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/~s3991933/assignment-3-final-website-team_18_cosc3046_sep23/php/mainblogs.php">
                <p>Blog</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="/~s3991933/assignment-3-final-website-team_18_cosc3046_sep23/php/discussion.php">
                <p>Discussions</p>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Continents
              </a>
              <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="continents/asia.html">Asia</a></li>
                <li><a class="dropdown-item" href="continents/africa.html">Africa</a></li>
                <li><a class="dropdown-item" href="continents/europe.html">Europe</a></li>
                <li><a class="dropdown-item" href="continents/namerica.html">North America</a></li>
                <li><a class="dropdown-item" href="continents/antarctica.html">Antarctica</a></li>
                <li><a class="dropdown-item" href="continents/oceania.html">Oceania</a></li>
                <li><a class="dropdown-item" href="continents/samerica.html">South America</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/~s3991933/assignment-3-final-website-team_18_cosc3046_sep23/signUp.html">
                <p>Sign Up</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/~s3991933/assignment-3-final-website-team_18_cosc3046_sep23/signIn.html">
                <p>Log In</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <br><br><br>

    <div class="content">
      <h1 class="heading">Our Products & Services</h1>


      <div class="grid">
        <div class="grid-item1">
          <h2>Product 1</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="grid-item2">
          <h2>Product 2</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="grid-item3">
          <h2>Product 3</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="grid-item4">
          <h2>Product 4</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>

    </div>

    <script type="text/JavaScript" src="/scripts/index.js">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"
      integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
    <script src="https://use.fontawesome.com/78f2921884.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

</body>

<footer class="footer">
  <p>Join our community today and start sharing your own travel tales. Let's embark on this journey together!</p>
  <div class="links">
    <p><a href="aboutUs.html">About Us</a></p>
    <p><a href="contactUs.html">Contact Us</a></p>
    <p><a href="faq.html">FAQs</a></p>
    <p><a href="products.html">Other Products & Services</a></p>
  </div>
</footer>