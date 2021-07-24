<?php
require 'databaseconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
   if($username ==  '247001' && $password == 'aman@247'){
       header('LOcation: wel.php');
   }
   else{
    echo   "<div class='alert alert-Warning alert-dismissible fade show myal' role='alert'>
    <strong>Warning!</strong>Incorrect Credentials.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || BAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<nav class="navbar2">

        <img src="logo.png" alt="" srcset="" class="logo" id="logos">
        <p class="sn">
            Bright Area School
        </p>
    
</nav>
    <div class="formm">
        <p class="logtex">
            Login:
        </p>
<form action="" method="post" class="form3">
<label for="username">Username:</label>
<br>
<input type="text" name="username" id="username" class="userclass" required>
<br>
<label for="password">Password:</label>
<br>
<input type="password" name="password" id="password" class="passclass" required>
<button type="submit" id="submit" class="btnclass">Log In</button>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<div class="cret">
       <p class="cete">
           Created With 💖 By Aman Hussain
       </p>
   </div>
</body>
</html>