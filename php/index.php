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
  <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>

  <!--BEGIN SESSION HERE-->
  <?php
        session_start();
        include_once "session.inc";
    ?>

<section class="main">
      <div class="bg-image" alt="">
        <div class="hero-container my-5">
          <h1 class="text-center myName display-4 pt-5 mt-5 pb-3">Travel <span class="AK">Sh</span>are</h1>
          <img
            class="img-fluid mx-auto rounded-circle border border-1 img-thumbnail d-block border-info mt-5 mb-1 myPhoto"
            src="../images/hero.jpeg" alt="Hero Imgs">

          <div class="container pt-4 intro">

            <h2 class="iAM display-6 mb-2">We Provide</h2>
            <h2 class="typing display-6  mb-2"></h2>
          </div>
          <div class="container p-4 pb-0 ">
            <section class="mb-4">
              <a class="btn btn-floating m-1" href="#" role="button" target="_blank"><i
                  class="myIcons fa fa-facebook-square"></i></a>

              <a class="btn btn-floating m-1" href="#" role="button" target="_blank"><i class="fa fa-twitter"></i></a>

              <a class="btn  btn-floating m-1" href="#" role="button" target="_blank"><i
                  class="fa fa-instagram"></i></a>

              <a class="btn  btn-floating m-1" href="#" role="button" target="_blank"><i class="fa fa-linkedin"></i></a>

              <a class="btn  btn-floating m-1" href="#" role="button" target="_blank"><i class="fa fa-github"></i></a>
            </section>

          </div>
        </div>
      </div>
</section>

<section>
      <h1>About Us</h1> <br>
      <h4>Welcome to Travel Share, a community of passionate wanderers sharing their journeys and experiences from
        around the globe.
        We believe that travel is not just about the destinations, but about the stories and connections that shape our
        adventures.
        We are a diverse group of travel enthusiasts, backpackers, photographers, and adventurers who have collectively
        explored numerous corners of the world.
        Our experiences range from bustling city streets to serene natural wonders, and we're excited to share the magic
        of these places with you.</h4>
      <br>
      <br>
      <h1>Our Mission</h1> <br>

      <h4>At Travel Share, we're dedicated to inspiring and assisting fellow travelers in exploring the world. We
        believe that every journey is an opportunity for discovery, learning, and personal growth.
        Our mission is to provide a platform where travelers can connect, share their experiences, and gain valuable
        insights for their next escapade.</h4>
      <br>
      <br>
      <h1>What We Offer</h1> <br>
      <h4>Inspiring Travel Stories: Immerse yourself in a world of captivating narratives, vivid photographs, and
        detailed itineraries that transport you to new destinations and cultures. <br>

        Community Engagement: Join a vibrant community of like-minded travelers. Connect, share, and engage in
        discussions with fellow explorers. Whether you're a seasoned globetrotter or a first-time adventurer, there's a
        place for you here. <br>

        Practical Tips and Advice: Find valuable insights on planning your trips, from choosing the perfect
        accommodation to discovering hidden gems off the tourist trail. Our seasoned travelers are here to guide you
        every step of the way. <br></h4>
</section>

    <br>
    <br>
    <br>

<section class="Gallery">
      <h1>Our Gallery</h1>
      <div class="gallery">
        <div class="gallery-item">
          <img src="../images/0.jpeg" alt="Placeholder Image 1">
        </div>
        <div class="gallery-item">
          <img src="../images/1.jpeg" alt="Placeholder Image 1">
        </div>
        <div class="gallery-item">
          <img src="../images/2.jpeg" alt="Placeholder Image 1">
        </div>
        <div class="gallery-item">
          <img src="../images/3.jpeg" alt="Placeholder Image 1">
        </div>
        <div class="gallery-item">
          <img src="../images/6.jpeg" alt="Placeholder Image 1">
        </div>
        <div class="gallery-item">
          <img src="../images/9.jpeg" alt="Placeholder Image 1">
        </div>
      </div>

</section>


    <br>
    <br>
    <br>
    <br>

    <section>

    <h1>Give us your location, To get personalized suggesstion</h1>

    <p id="content">Press the Button Below to share your location with us, We will provide nearby travel locations for you!!!</p>
  <p><button id="run">Share my Location</button></p>
  <script>
    const content = document.getElementById('content');
    const run = document.getElementById('run');

    function locationSuccess(position) {
      const coords = position.coords.latitude + ', ' + position.coords.longitude;
      console.log('lat, lon: ' + coords);
      content.textContent = ' Thank you for sharing your location, The current location latitude and longitude are: ' + coords;
    }

    function locationError(err) {
      console.warn(err)
      content.textContent = 'The was an error: ' + err.code + ', ' + err.message;
    }

    function locationRun() {
      console.log("getting position...");
      content.innerHTML = '<marquee><span class="blink">Getting location information, please wait...</span></marquee>';
      navigator.geolocation.getCurrentPosition(locationSuccess, locationError);
    }

    if ("geolocation" in navigator) {
      run.addEventListener('click', function() {
        locationRun();
      });
    } else {
      console.log("geolocation is not supported by your browser");
      content.textContent = 'Geolocation is not supported by your browser';
    }
  </script>
    </section>
 <br><br><br>
    <section>
      <h1>Our Headquaters</h1>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.2274514048718!2d144.9578175902322!3d-37.80814106145152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642cb67178b05%3A0xe5c2160ff784f314!2sRMIT%20University%20-%20Building%2080!5e0!3m2!1sen!2sau!4v1697366320828!5m2!1sen!2sau"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <br>
    <br>

</section>

    <footer class="footer">
      <p>Join our community today and start sharing your own travel tales. Let's embark on this journey together!</p>
      <div class="links">
        <p><a href="https://titan.csit.rmit.edu.au/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/aboutUs.php">About Us</a></p>
        <p><a href="https://titan.csit.rmit.edu.au/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/contactUs.php">Contact Us</a></p>
        <p><a href="https://titan.csit.rmit.edu.au/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/faq.php">FAQs</a></p>
        <p><a href="https://titan.csit.rmit.edu.au/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/products.php">Other Products & Services</a></p>
      </div>
    </footer>



    <div class="cookie-banner" id="cookieBanner">
      <p>This website uses cookies to ensure you get the best experience on our website.</p>
      <button onclick="acceptCookies()">Got it!</button>
    </div>



    <script type="text/JavaScript"
      src="/~s3991933/assignment-2-website-prototype-team_18_cosc3046_sep23/scripts/index.js">
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



</html>