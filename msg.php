<!-- header -->
<?php
ob_start();
include("header.php");
?>
<!-- header -->


<?php





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


include('./template/uisolated.php');

$c=$_POST['cpassword'];
$n=$_POST['newpassword'];



// // // 

// $hpasswordo=password_hash($o,PASSWORD_DEFAULT);

$hpasswordn=password_hash($n,PASSWORD_DEFAULT);

if(password_verify($c,$hpasswordn))
{

    $reg="UPDATE `user` SET `password`='$hpasswordn' WHERE `id`= '$suserid' ";






if(mysqli_query($con,$reg))
{
 echo'
<center>
    
<img src="https://img.icons8.com/cute-clipart/2x/ok.png" alt="">

</center>


<center>
<div style="width: 500px;">
<div class="alert alert-success" role="alert">
Success
<br>
your password has been updated sucessfuly
</div>
</div>

</center>';
}

else
{
 echo'   
 <br>
 <br>
 <br>
 <br>
 <center>
 <div style="width: 500px;">

 <div class="alert alert-danger" role="alert">
Success
<br>
internal server error
<br>
site under maintenance
</div>
</div>
</center>';
echo "error $reg <br> $con->error";
}
}

else
{
 echo'   
 <br>
 <br>
 <br>
 <br>

 <center>
 <div style="width: 500px;">
<div class="alert alert-danger" role="alert">
new password text does not match with confirm password text
<br>
retype your password correctly
</div>
</div>
</center>';

}

$con->close();




?>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<!--Footer-->
<?php
include("footer.php");
?>
<!--Footer-->