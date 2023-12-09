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

<div class="container">
    <br>
    <br>
    <br>
    <br>    
    <h1>User Account Page</h1>
    
        <div class="user-info">
            <p>Username: <?php echo $_SESSION['username']?></p>
            <form action="" name="changeNamePopup" method="POST"><button type="submit" name="changeUser">Change username</button></form>
            
            <?php 
            $dsn = 'mysql:host=talsprddb02.int.its.rmit.edu.au;dbname=COSC3046_2302_G18';
            $user = 'COSC3046_2302_G18';
            $pass = 'Mlso4ZBOGNS1';
            
            $conn = new PDO($dsn, $user, $pass);
                if(isset($_POST['changeUser'])) {
                    // User clicked the "Log Out" button
                    echo '
                    <form action="" name="changeNameForm" method="POST">
                    <label for="username">Username</label>
                    <input type="text" id="userNameChange" name="userNameChange" placeholder="New username" required="" autofocus="" />
                    <button type="submit" name="changeConfirm">Change</button>
                    </form>
                    ';

                    if (isset($_POST['changeConfirm'])) {
                    $currentUsername = $_SESSION['username'];
                    $newUsername = $_POST['userNameChange'];
                    $statement = $conn->prepare("SELECT * FROM userCredentials WHERE username = '$currentUsername'");
                    $statement->bindParam(':username', $currentUsername);
                    $statement->execute();

                    $userRow = $statement->fetch(PDO::FETCH_ASSOC);

                    if ($userRow) {
                        if ($currentUsername === $userRow['username']) {
                            $statement2 = $conn->prepare("UPDATE userCredentials SET username = '$newUsername' WHERE username = '$currentUsername';");
                            $statement->execute();
                            $_SESSION['username'] = $newUsername;
                            echo '<p>Username changed!</p>';
                        }
                    }
                }
                }
            ?>


            <!--<p>First name: <?php echo $_SESSION['firstName']?></p>-->
            <form action="" method="POST"><button type="submit" name="changeFirstName">Change first name</button></form>
            

            
            


            <!--<p>Last name: <?php echo $_SESSION['lastName']?></p>-->
            <form action="" method="POST"><button type="submit" name="changeLastName">Change last name</button></form>
            


            <!--<p>Email: <?php echo $_SESSION['email']?></p>-->
            <form action="" method="POST"><button type="submit" name="changeEmail">Change email</button></form>

            
            <?php 
            $hidden_password = preg_replace("|.|","*", $_SESSION['password']);
            ?>
            <!--<p>:Password: <?php echo $hidden_password?></p>-->
            <form action="" method="POST"><button type="submit" name="changeFirstName">Change password</button></form>


        </div>
    </div>