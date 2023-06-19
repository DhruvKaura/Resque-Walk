<?php 
$email =$_POST["email"];
$password =$_POST["password"];
$con =new mysqli('localhost','root','','resqueelogin');
if($con->connect_error){
   die('connection failed:'.$con->connect_error);
   }else{
   echo "display";
   }
   $sql="INSERT INTO signin('email', `password`) VALUES ('[$email]','[$password]')";
   $rs=mysqli_query($con,$sql);
   if($rs){
   echo"inserted";}
   
   ?>