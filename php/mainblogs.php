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
    <title>Blog</title>
    <link rel="stylesheet" href="mainblog.css" />
  </head>

  <body>
    
  <?php
        session_start();
        include_once "session.inc";
    ?>

<?php
// Function to delete a blog post
function deleteBlogPost($postId, $conn) {
    $sql = "DELETE FROM posts WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $postId, PDO::PARAM_INT);
    return $stmt->execute();
}

$dsn = 'mysql:host=talsprddb02.int.its.rmit.edu.au;dbname=COSC3046_2302_G18';
$user = 'COSC3046_2302_G18';
$password = 'Mlso4ZBOGNS1';

try {
    $conn = new PDO($dsn, $user, $password);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["delete"])) {
            // Delete button clicked, delete the blog post
            $postId = $_POST["delete"];
            if (deleteBlogPost($postId, $conn)) {
                echo "Blog post deleted successfully.";
            } else {
                echo "Error deleting the blog post.";
            }
        } else {
            // Form submitted, process the data to add a new blog post
            $title = $_POST["title"];
            $content = $_POST["content"];

            // Sanitize and validate inputs (you should improve this)
            $title = htmlspecialchars($title);
            $content = htmlspecialchars($content);

            // Perform database insertion
            $sql = "INSERT INTO posts (title, content) VALUES (:title, :content)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            $stmt->bindParam(':content', $content, PDO::PARAM_STR);

            if ($stmt->execute()) {
                echo "Blog post added successfully.";
            } else {
                echo "Error: " . $stmt->errorInfo()[2];
            }
        }
    }

    // Display the form to create a new blog post
   
    // Display the "Add Blog" button
    
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    
    echo "<div class ='blogsarea'>";
    echo "<h1>Create Blog Posts</h1> <br> ";
    echo "<h5>Click the button below to create blog post</h5>";
    echo '<button onclick="toggleAddForm()">Add Blog</button>';
    
    // Display the form to create a new blog post (initially hidden)
    echo '<form id="add-form" action="' . $_SERVER['PHP_SELF'] . '" method="post" style="display: none;">';
    echo '<label for="title">Title:</label>';
    echo '<input type="text" name="title" required>';
    echo '<br>';
    echo '<label for="content">Content:</label>';
    echo '<textarea name="content" rows="4" required></textarea>';
    echo '<br>';
    echo '<input type="submit" value="Add Blog Post">';
    echo '</form>  <br><br><br>';
  
    
    // Retrieve and display blog posts
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    echo '<h1>Blog Posts</h1>';
    foreach ($rows as $row) {
        echo '<table border="1">';
        echo '<tr><th colspan="2">' . $row['title'] . '</th></tr>';
        echo '<tr><td>Content:</td><td>' . $row['content'] . '</td></tr>';
        echo '<tr><td>Posted on:</td><td>' . $row['created_at'] . '</td></tr>';
        echo '<tr><td colspan="2">';
        echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post"> <br><br>';
        echo '<input type="hidden" name="delete" value="' . $row['id'] . '">';
        echo '<input type="submit" value="Delete"> <br><br> ';
        echo '</form>';
        echo '</td></tr>';
        echo '</table> <br><br><br>' ;
    }
  }

  else {
    echo '<h1 class="message">You need to be logged in to create blogs!</h1>';
  }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
        echo '</div>';
?>
</body>
</html>
<style>
        /* CSS to control text overflow and wrapping */
        table {
            width: 100%;
        }
        table td {
            word-wrap: break-word;
        }
    </style>
     <script>
    // JavaScript function to toggle the visibility of the add blog form
    function toggleAddForm() {
        var addForm = document.getElementById("add-form");
        if (addForm.style.display === "none" || addForm.style.display === "") {
            addForm.style.display = "block";
        } else {
            addForm.style.display = "none";
        }
    }
</script>
<footer class="footer">
      <p>Join our community today and start sharing your own travel tales. Let's embark on this journey together!</p>
      <div class="links">
        <p><a href="https://titan.csit.rmit.edu.au/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/aboutUs.php">About Us</a></p>
        <p><a href="https://titan.csit.rmit.edu.au/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/contactUs.php">Contact Us</a></p>
        <p><a href="https://titan.csit.rmit.edu.au/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/faq.php">FAQs</a></p>
        <p><a href="https://titan.csit.rmit.edu.au/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/products.php">Other Products & Services</a></p>
      </div>
    </footer>



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