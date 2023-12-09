<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code
    $dsn = 'mysql:host=talsprddb02.int.its.rmit.edu.au;dbname=COSC3046_2302_G18';
// Dummy user/pass for this example
    $user = 'COSC3046_2302_G18';
    $password = 'Mlso4ZBOGNS1';



$conn = new PDO($dsn, $user, $password);

    // Retrieve form data
    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_id = 1; // Replace with actual user authentication logic

    // Insert a new discussion topic into the database
    $query = "INSERT INTO discussion_topics (user_id, title, content) VALUES (:user_id, :title, :content)";
    
    $stmt = $conn->prepare($query);

    // Bind parameters and execute the statement
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':content', $content, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // Topic created successfully
        header("Location: discussion.php"); // Redirect to the forum's main page
    } else {
        // Handle the error as needed
        echo "Error: " . $stmt->errorInfo()[2];
    }
    
    // Close the statement and the database connection
    $stmt = null;
    $conn = null;
}
?>