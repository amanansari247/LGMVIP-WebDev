<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="result.css">
     <title>Document</title>
</head>
<body>
    <div class="full">
    <div class="nn">
        <img src="logo.png" alt="" srcset="" class="logo5">
        <p class="name">
           
            <?php
            require 'regresult.php';
            $sql2 = "SELECT * FROM `adddata` WHERE `regno` ='$regno' ";
            $result2 =mysqli_query($conn,$sql2);
            while( $row2 =mysqli_fetch_assoc($result2)){
            echo "Name   :&nbsp" .$row2['name'];
            echo "<br>";
            echo "Fathers Name   :&nbsp" .$row2['fname'];
            echo "<br>";
            echo "Class   :&nbsp" .$row2['class1'];
            }
            ?>
        </p>
        <button type="submit"class="pbtn"onclick="window.print();return false;">Print</button>
        </div>
      <div class="container">
       

       <table class="table myct" id = "myTable">
         <thead>
           <tr>
             <th scope="col">Subjects</th>
             <th scope="col">Marks</th>
             
           </tr>
         </thead>
         <tbody>
         <?php
         require 'databaseconnect.php';
         include 'regresult.php';
               $sql = "SELECT * FROM `addmarks` WHERE `regno` ='$regno' ";
                 $result =mysqli_query($conn,$sql);
                 
                while( $row =mysqli_fetch_assoc($result)){
                  echo "<tr>
                  <th scope='row'>Maths</th>
                  <td>".$row['maths']."</td>
                  </tr>
                 <tr>
                  <th scope='row'>Science</th>
                  <td>".$row['science']."</td>
                  </tr>
                  <tr>
                  <th scope='row'>S.st</th>
                  <td>".$row['sst']."</td>
                  </tr>
                  <tr>
                  <th scope='row'>G.K</th>
                  <td>".$row['gk']."</td>
                  </tr>
                  <th scope='row'>Drawing</th>
                  <td>".$row['drawing']."</td>
                  </tr>
                  
                  
                  
                  
                  
                  ";
               
                 
                 }
                 
                  
              ?>
           
           
         </tbody>
       </table>
             </div>
     </div>
</body>
</html>