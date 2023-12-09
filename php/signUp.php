<?php

session_start();

$dsn = 'mysql:host=talsprddb02.int.its.rmit.edu.au;dbname=COSC3046_2302_G18';
$user = 'COSC3046_2302_G18';
$pass = 'Mlso4ZBOGNS1';

$conn = new PDO($dsn, $user, $pass);

if(isset($_POST['submit'])) {
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$username  = $_POST['username'];
$email  = $_POST['email'];
$password  = $_POST['password'];
$passwordHash = password_hash( $password , PASSWORD_DEFAULT );

$sql = "INSERT INTO userCredentials (username, firstName, lastName, email, hashed_Password) VALUES ('$username', '$firstName', '$lastName', '$email', '$passwordHash')";

$conn->exec($sql);

echo '<script>alert("Account created successfully!")</script>';
header('Location: /~s3939858/assignment-3-final-website-team_18_cosc3046_sep23/signIn.html');
        exit;
}


