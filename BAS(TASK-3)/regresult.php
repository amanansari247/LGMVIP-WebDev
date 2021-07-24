<?php
require 'databaseconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST') {
$regno =$_POST['regno'];
$display ="SELECT * FROM `addmarks` WHERE `regno` = '$regno'";
$display2 ="SELECT * FROM `adddata` WHERE `regno` = '$regno'";
$res = mysqli_query($conn,$display);
$res2 = mysqli_query($conn,$display2);
   


}



?>