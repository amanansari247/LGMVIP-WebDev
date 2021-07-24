<?php
require 'databaseconnect.php';
$insert = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
$regno = $_POST['regno'];
$name = $_POST['name'];
$fname = $_POST['fname'];
$class = $_POST['class1'];
$pno = $_POST['pno'];

$sqlinsert = "INSERT INTO `adddata` (`regno`, `name`, `fname`, `class1`, `pno`) VALUES ('$regno', '$name', '$fname', '$class', '$pno')";
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
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="add.css">
 
</head>

<body>
  <?php
 if($insert){
   echo   "<div class='alert alert-success alert-dismissible fade show' role='alert'>
   <strong>Sucessfully!</strong> Added.
   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
 </div>";
 }
  
  ?>
  <div class="nav3">
    <img src="logo.png" alt="" class="logo2">
    <div class="list">
      <ul class =" list2">
        <li><a href="wel.php">Home</a></li>
        <li><a href="#Add A Student">Add a Student</a></li>
        <li><a href="all.php">All Students</a></li>
        <li><a href=" addm.php">Add Marks</a></li>
        <li><a href="#Publish Result">Publish Result</a></li>
        <li><a href="index.php">Log Out</a></li>

      </ul>
    </div>
  </div>
  <div class="formm">
    <form action="" method="post">
      <label for="regno">Registration Number :</label>
      

      <input type="number" name="regno" id="regno">
     
      <label for="name"> Name :</label>

  
      <input type="text" name="name" id="name">
      <br>
      <label for="fname">Father Name:</label>

  
      <input type="text" name="fname" id="fname">
      <label for="class1" class="class1">Class :</label>

      
      <select id="class1" name="class1"style=" font-size: 2vw; height: 3vw;">
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
        <option value="IV">IV</option>
        <option value="V">V</option>
      </select>
      <br>
      <label for="pno" class="pnolabel">Phone Number :</label>
      <input type="number" name="pno" id="pno" placeholder="+91" class="pno">
      <label for="gender">Gender :</label>
      <label for="maLE" class="chbtn">Male</label>
  <input type="radio" id="gender" name="btnc" value="male">
  <label for="female" class="chbtn">Female</label>
  <input type="radio" id="gender" name="btnc" value="female">
  <label for="others" class="chbtn">Others</label>
<input type="radio" id="gender" name="btnc" value="others"><br>
<button type="submit" class="fsubmit">Submit</button>
    </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>