<!DOCTYPE html>
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
  
  <?php
        session_start();
        include_once "session.inc";
    ?>
    
    <div class="discussion">
      <h1>Create a New Discussion Topic</h1>
      
    
      <?php 
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
      echo '<form action="addtopic.php" method="POST">
      <br>
      <br>
        <label for="title">Title:</label>
        <input type="text" name="title" required><br><br>

        <label for="content">Content:</label>
        <textarea name="content" rows="4" required></textarea><br><br>

        <input type="submit" value="Create Topic"> <br><br>
      </form>';
      }

      else {
        echo '<h1>You need to be logged in to create discussions!</h1>';
      }
      ?>
      
      
      
      
      
      
      <h1>Discussion Topics</h1>
    <!-- Display discussion topics from the database -->
    <?php
    $dsn = 'mysql:host=talsprddb02.int.its.rmit.edu.au;dbname=COSC3046_2302_G18';
    // Dummy user/pass for this example
    $user = 'COSC3046_2302_G18';
    $password = 'Mlso4ZBOGNS1';

    $conn = new PDO($dsn, $user, $password);

    $query = "SELECT topic_id, title, created_at FROM discussion_topics ORDER BY created_at DESC";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='topic'>";
        echo "<h3>{$row['title']}</h3>";
        echo "<p>Created on: {$row['created_at']}</p> <br> ";
        echo "<a class= 'view_button' href='view_topic.php?topic_id={$row['topic_id']}'>View Topic</a> <br> <br>"; // Link to view_topic.php
        echo "</div>";
    }
    ?>
  
  
  </div>

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
