<?php
session_start();
if(isset($_POST['namec']) && isset($_POST['fulladdress'])  && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['landmark']) && $_SESSION['count']>0)  
{
include('../template/temp.php');






$server="localhost";
$username="root";
$password="";
$port="3307";
$databse="bookstore";
$con=mysqli_connect($server,$username,$password,$databse,$port);





//directly proceed to buy logic

$name=$_POST['namec'];//name
$address=$_POST['fulladdress'];
$pincode=$_POST['pincode'];
$city=$_POST['city'];
$state=$_POST['state'];
$landmark=$_POST['landmark'];
$count=$_SESSION['count'];
$total=$_SESSION['total'];
$suserid;
$status='pend';
if(isset($_SESSION['ptbid']))
{
    $s=$_SESSION['ptbid'];

 if($s>0)
 {
$_SESSION['ptbid']=0;
 $sql1="INSERT INTO `bookspurchased`( `book_id`, `subtotal`, `user_id`, `user_name`, `pin_code`, `address`, `landmark`, `city`, `state`, `status`,`qty`) 
 VALUES ('$s',  '$total'   ,  '$suserid'  , '$name' ,    '$pincode' ,  '$address' ,' $landmark ', '$city','$state','$status','1')";

 if(mysqli_query($con,$sql1))
 {
 echo "sucessfully inserted";
 }
else
 {
 echo "cannot be executed";
 echo "error $sql <br> $con->error";
 }


   header('location:../bill.php');


$con->close();


 }
 }

//after add to cart logic
$count=count($bid);
echo' $count ';

print_r($bid);
foreach ($bid as $value) 
{
    
    $vbid= $value['book_id'];

    
    
    
  


$sql="INSERT INTO `bookspurchased`( `book_id`, `subtotal`, `user_id`, `user_name`, `pin_code`, `address`, `landmark`, `city`, `state`, `status`,`qty`) 
VALUES ('$vbid',  '$total'   ,  '$suserid'  , '$name' ,    '$pincode' ,  '$address' ,' $landmark ', '$city','$state','$status','$count')";



if(mysqli_query($con,$sql))
{

echo "sucessfully inserted";

}
else
{
echo "cannot be executed";
echo "error $sql <br> $con->error";
}


}


if(!$con)
 {
 die("connection to this database failed due to".mysqli_connect_error());
 }
 echo "sucess connection to database established";

 $del="DELETE FROM `cart` WHERE `user_id`=$suserid";
 if(mysqli_query($con,$del))
 {
 echo "sucessfully inserted";
 }
 else
 {
 echo "cannot be executed";
 echo "error $sql <br> $con->error";
}

$bid=array();
header('location:../bill.php');


$con->close();
}
?>