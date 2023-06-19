<?php 
$fullname =$_POST["fullname"];
$email =$_POST["email"];
$password =$_POST["password"];
$cpassword =$_POST["cpassword"];
$con =new mysqli('localhost','root','','resqueelogin');
if($con->connect_error){
   die('connection failed:'.$con->connect_error);
   }else{
   echo "display";
   }
   $sql="INSERT INTO signup('fullname', 'email', `password`, 'cpassword') VALUES ('[$fullname]','[$email]','[$password]','[$cpassword]')";
   $rs=mysqli_query($con,$sql);
   if($rs){
   echo"inserted";}
   
   ?>