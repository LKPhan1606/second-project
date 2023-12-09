<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="WEB programming" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bangers&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Aladin&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;600;800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />
    <script src="https://use.fontawesome.com/78f2921884.js"></script>
    <title>Discussion</title>
    <link rel="stylesheet" type="text/css" href="discussion.css">
    
  </head>

  <body>
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
                    <a class="nav-link" href="/~s3991933/assignment-3-final-website-team_18_cosc3046_sep23/php/discussion.php">
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
    <h1>Discussion Forum</h1>
    

    <?php
    if (isset($_GET['topic_id'])) {
        $topic_id = $_GET['topic_id'];

        $dsn = 'mysql:host=talsprddb02.int.its.rmit.edu.au;dbname=COSC3046_2302_G18';
        // Dummy user/pass for this example
        $user = 'COSC3046_2302_G18';
        $password = 'Mlso4ZBOGNS1';

        $conn = new PDO($dsn, $user, $password);

        $query = "SELECT title, content, created_at FROM discussion_topics WHERE topic_id = :topic_id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':topic_id', $topic_id, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        echo "<br> <br> <h2 class='title'>{$row['title']}</h2>";
        echo "<p>Created on: {$row['created_at']}</p> <br> <br>";
        echo "<p>{$row['content']}</p> <br> <br>"; // Display the content
    }
    ?>


    <h2>Replies</h2>
    <!-- Display replies for the specific discussion topic -->
    <?php
    if (isset($_GET['topic_id'])) {
        $query = "SELECT user_id, content, created_at FROM replies WHERE topic_id = :topic_id ORDER BY created_at DESC";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':topic_id', $topic_id, PDO::PARAM_INT);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='reply'> <br> <br>";
            echo "<h5>{$row['content']}</h5>";
            echo "<p>Replied by: User {$row['user_id']}</p>";
            echo "<p>Replied on: {$row['created_at']}</p>";
            echo "</div>";
        }
    }
    ?>
        <h2>Add a Replaay</h2>
    <form action="addreply.php" method="POST">
        <input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>">
        <label for="content">Content:</label>
        <textarea name="content" rows="4" required></textarea><br>

        <input type="submit" value="Add Reply"> <!-- Submit button to add a reply -->
    </form>
    <a href="discussion.php">Go back to discussion topics</a>

    <footer class="footer">
      <p>Join our community today and start sharing your own travel tales. Let's embark on this journey together!</p>
      <div class="links">
        <p><a href="aboutUs.html">About Us</a></p>
        <p><a href="contactUs.html">Contact Us</a></p>
        <p><a href="faq.html">FAQs</a></p>
        <p><a href="products.html">Other Products & Services</a></p>
      </div>
    </footer>
    

    <script src="./scripts/discussion.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"
     integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://use.fontawesome.com/78f2921884.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
     crossorigin="anonymous"></script>

</body>
</html>

