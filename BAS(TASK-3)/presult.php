<?php
require 'databaseconnect.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="all.css">
    
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
         } );
    </script>
    <title>Result!!</title>
  </head>
  <body>
  <div class="nav2">
    <img src="logo.png" alt="" class="logo4" >
    <div class="list">
      <ul class="ul2">
        <li><a href="wel.php">Home</a></li>
        <li><a href="add.php">Add a Student</a></li>
        <li><a href="all.php">All Students</a></li>
        <li><a href="addm.php">Add Marks</a></li>
        <li><a href="#Publish Result">Publish Result</a></li>
        <li><a href="index.php">Log Out</a></li>

      </ul>
    </div>
  </div>
    
  <div class="container">
       

       <table class="table" id = "myTable">
         <thead>
           <tr>
             <th scope="col">Reg.NO</th>
             <th scope="col">Maths</th>
             <th scope="col">Science</th>
             <th scope="col">S.st</th>
             <th scope="col">G.k</th>
             <th scope="col">Drawing</th>
             <th scope="col">Actions</th>
           </tr>
         </thead>
         <tbody>
         <?php
               $sql = "SELECT * FROM `addmarks`";
                 $result =mysqli_query($conn,$sql);
                 
                while( $row =mysqli_fetch_assoc($result)){
                  echo "<tr>
                  <th scope='row'>".$row['regno']."</th>
                  <td>".$row['maths']."</td>
                  <td>" . $row['science'] ."</td>
                  <td>" . $row['sst'] ."</td>
                  <td>" . $row['gk'] ."</td>
                  <td>" . $row['drawing'] ."</td>
                  <td> <button  class='btn btn-sm btn-primary edit' onclick='myFunction()'>Publish</button> </td>
                </tr>";
               
                 
                 }
                 
                  
              ?>
           
           
         </tbody>
       </table>
             </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        function myFunction() {
          alert("Published!");
        }
        </script>

  </body>
</html>