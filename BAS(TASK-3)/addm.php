<?php
require 'databaseconnect.php';
$insert = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
$regno = $_POST['regno'];
$maths = $_POST['maths'];
$science = $_POST['science'];
$sst = $_POST['sst'];
$gk = $_POST['gk'];
$drawing = $_POST['drawing'];
$sqlinsert = "INSERT INTO `addmarks` (`regno`, `maths`, `science`, `sst`, `gk`,`drawing`) VALUES ('$regno', '$maths', '$science', '$sst', '$gk','$drawing')";
 $ri = mysqli_query($conn,$sqlinsert);
 if($ri){
  $insert = true;
}
   
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Marks</title>
    <link rel="stylesheet" href="addm.css">
</head>
<body>
  <?php
 if($insert){
 
 }



?>

<div class="nav2">
    <img src="logo.png" alt="" class="logo2">
    <div class="list">
      <ul class="ulc">
        <li><a href="wel.php">Home</a></li>
        <li><a href="#Add a Student">Add a Student</a></li>
        <li><a href="all.php">All Students</a></li>
        <li><a href="addm.php">Add Marks</a></li>
        <li><a href="presult.php">Publish Result</a></li>
        <li><a href="index.php">Log Out</a></li>

      </ul>
    </div>
  </div>
  <div class="mform">
      <form action="" method="post" class='df'>
        <label for="regno">Reg.No :</label>
        <input type="number" name="regno" id="regno"><br>
          <label for="maths">Maths :</label>
          <input type="number" name="maths" id="maths"><br>
          <label for="science">Science :</label>
          <input type="number" name="science" id="science"><br>
          <label for="sst">SSt :</label>
          <input type="number" name="sst" id="sst"><br>
          <label for="gk">G.K :</label>
          <input type="number" name="gk" id="gk"><br>
          <label for="drawing">Drawing :</label>
          <input type="number" name="drawing" id="drawing"><br>
          <button type="submit" class="mbtn">Submit</button>
      </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>