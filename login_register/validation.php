<?php
session_start();

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
echo "sucess connection to database established";

$name=$_POST['user'];
$password=$_POST['password'];


$s= "SELECT * FROM `user` WHERE NAME= '$name'" ;





$result=mysqli_query($con,$s);
$hrow=mysqli_fetch_assoc($result);


// imp
$s1= "SELECT `id` FROM `user` WHERE NAME='$name' " ;
$result1=mysqli_query($con,$s1);

$row = $result1->fetch_assoc();

$uid=$row['id'];

// if(isset($uid))
// {

    $_SESSION['uid']=$uid;

// }
// else
// {
//     $gid='0';
//     $_SESSION['uid']=$gid;
// }

// imp


$num=mysqli_num_rows($result);

if(($num==1) && (password_verify($password, $hrow['password'])))
{
    $_SESSION['alertwronguap']='false';

    $_SESSION['username']=$name;
    header('location:../index.php');
}
else
{
    $_SESSION['alertwronguap']='true';
    header('location:login.php');

}





?>
