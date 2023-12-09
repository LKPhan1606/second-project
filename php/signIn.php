<?php

session_start();

$dsn = 'mysql:host=talsprddb02.int.its.rmit.edu.au;dbname=COSC3046_2302_G18';
$user = 'COSC3046_2302_G18';
$pass = 'Mlso4ZBOGNS1';

$conn = new PDO($dsn, $user, $pass);

if(isset($_POST['signIn'])) {
$username = $_POST['username'];
$password = $_POST['password'];

$statement = $conn->prepare("SELECT username, hashed_Password FROM userCredentials WHERE username = :username");
$statement->bindParam(':username', $username);
$statement->execute();

$userRow = $statement->fetch(PDO::FETCH_ASSOC);

if ($userRow) {
    if (password_verify($password, $userRow['hashed_Password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $userRow['username'];
        $_SESSION['password'] = $userRow['hashed_Password'];

        header('Location: /~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/php/index.php');
        
    } else {
        $_SESSION['loggedin'] = false;
        echo '<script>alert("Wrong login details. Please try again.");</script>';
        echo '<script>window.location.href = "/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/signIn.html";</script>';
        exit;
    }
} 
else {
    $_SESSION['loggedin'] = false;
    echo '<script>alert("There is no account associated with the provided username. Please try again.");</script>';
    echo '<script>window.location.href = "/~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/signIn.html";</script>';
    exit;
}

}