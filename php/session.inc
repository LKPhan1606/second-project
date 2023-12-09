<?php


echo '
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
              <a class="nav-link" href="/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/index.php">
                <p>Home</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/mainblogs.php">
                <p>Blog</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/discussion.php">
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
              <a class="nav-link" href="/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/signUp.html">
                <p>Sign Up</p>
              </a>
            </li>
';

if(isset($_POST['logOut'])) {
    // User clicked the "Log Out" button
    session_unset();
    session_destroy();
    header("Location: /~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/index.php");
    exit;
}

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    // User is logged in
    echo '
        <li class="nav-item">
            <a class="nav-link" href="/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/account.php">
                <p>Account</p>
            </a>
        </li>
        
        <li class="nav-item">
            <form action="" method="post">
                <button type="submit" name="logOut" class="logOutButton">Log Out</button>
            </form>
        </li>
    ';


} else {
    // User is not logged in
    echo '
        <li class="nav-item">
            <a class="nav-link" href="/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/signIn.html">
                <p>Log In</p>
            </a>
        </li>
    ';
}





echo   '</ul>
        </div>
      </div>
    </nav>
';