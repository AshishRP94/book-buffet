




<?php
session_start();
header('location:login.php');
$server="localhost";
$username="root";
$pass="";
$port="3307";
$databse="bookstore";
$con=mysqli_connect($server,$username,$pass,$databse,$port);

if(!$con)
{
die("connection to this database failed due to".mysqli_connect_error());
}

echo 'sucess connection to database established';

$name=$_POST['user'];
$password=$_POST['password'];
$hashpassword=password_hash($password,PASSWORD_DEFAULT);
$number=$_POST['number'];
$deladd=$_POST['address'];



$s= "SELECT * FROM `user` WHERE NAME= '$name' " ;
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
  $_SESSION['alertusername']='true';

    // echo "Username already taken";
}
else
{
    $_SESSION['alertusername']='false';
    
 
    $reg="INSERT INTO `user`(`name`, `password`, `number`, `delivery_address`) VALUES ('$name','$hashpassword','$number','$deladd')";
    
    
if(mysqli_query($con,$reg))
{

$_SESSION['alertsucessfullregister']='true';



// echo "sucessfully inserted";
}
else
{
$_SESSION['alertsucessfullregister']='false';
echo "cannot be executed";
echo "error $reg <br> $con->error";
}

$con->close();
}
?>


