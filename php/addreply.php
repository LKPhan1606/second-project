<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code
    $dsn = 'mysql:host=talsprddb02.int.its.rmit.edu.au;dbname=COSC3046_2302_G18';
    // Dummy user/pass for this example
        $user = 'COSC3046_2302_G18';
        $password = 'Mlso4ZBOGNS1';
    
    
    
    $conn = new PDO($dsn, $user, $password);

    // Retrieve form data
    $topic_id = $_POST["topic_id"];
    $content = $_POST["content"];
    $user_id = 1; // Replace with actual user authentication logic

    // Insert a new reply into the database
    $query = "INSERT INTO replies (user_id, topic_id, content) VALUES (:user_id, :topic_id, :content)";

    $stmt = $conn->prepare($query);

    // Bind parameters and execute the statement
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':topic_id', $topic_id, PDO::PARAM_INT);
    $stmt->bindParam(':content', $content, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // Reply added successfully
        header("Location: discussion.php"); // Redirect to the discussion topic page
    } else {
        // Handle the error as needed
        echo "Error: " . $stmt->errorInfo()[2];
    }
    
    // Close the statement and the database connection
    $stmt = null;
    $conn = null;
}
?>