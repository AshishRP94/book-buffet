<!-- header -->

<?php
ob_start();
include("header.php");

?>

<?php if(isset($_POST['accountsopt']))  : ?>






<!-- header -->

<!--contains user_id which is stored in $suserid variable    -->
<?php
include("template/uisolated.php");
?>



<!-- <?php
//  if($_SERVER['REQUEST_METHOD']=="POST")
//  {
//      if(isset($_POST['delete_cart']))
//      {
//          $delr=$cart1->deleteCart($_POST['book_id']);

//      }
//  }
 ?> -->

<?php
if(isset($_POST['accountsopt']))
{

    $val=$_POST['accountsopt'];
}




?>










<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<!-- password update logic -->
<?php if($suserid==0)  : ?>
    <center>
        <form action="login_register/login.php" method="post">

            <div>
                <br><br><br><br><br>
                <div style="width: 200px;">
                    <button type="submit" class="btn btn-warning  ">please login to see your User Account</button>
                    
                </div>
            </div>
        </form>
</center>





<?php elseif($val=='changepassword' && isset($_SESSION['username'])) : ?>
  
    <div style="background-color: rgba(110, 248, 255);">
        <center> <h3>Change Password</h3></center>
    </div>
    
    <br><br><br>
    <center>
        <?php
        
    
            
            $s1=$_SESSION['username'];


        
    
        ?>

            <img src="https://images-eu.ssl-images-amazon.com/images/S/amazon-avatars-global/default._CR0,0,1024,1024_SR50,50_.png" alt="userimg">
            <h3>Welcome <?php echo $s1?></h3>
            
            
            
            <div style="width: 262px;border: 1px solid black;height: 256px;">
            <div style="width: 200px">
                
                
                <form action="msg.php" method="post" >

                    
                    
                    
                    
              
                    new password 
                    <br>
                    <input type="password" name="newpassword" class="form-control" required autofocus>
                    <br> 
                          
                    confirm password
                    <br>
                    <input type="password" name="cpassword" class="form-control" required >
                    <br>   


                        <button type="submit" class="btn btn-warning form-control ">update password</button>
                   
                    
                </div>
                </form>
            </div>
    
</center>
    

 


   
<!-- **************************************************************************************************************************************************** -->





















<!-- **************************************************************************************************************************************************** -->
<!-- your purchased books -->






<?php elseif($val=='PurchasedProducts') : ?>

<!-- Shopping cart section  -->
<div style="background-color: rgba(110, 248, 255);">
   <center> <h3>your purchased products</h3></center>
    
</div>
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
<h5 class="font-baloo font-size-20">Shopping Cart</h5>

<!--  shopping cart items   -->
<div class="row">
<div class="col-sm-9">





    <?php
   
//   $pbook= $product->getpurschasedbook($suserid,$val);



foreach($product->getpurschasedbook($suserid,$val) as $items):
   $cart=$product->getProduct($items['book_id'],'product');

 
   


        

        
     //print_r(count($cart));
    //  print_r($items);

    $subtotal[]=array_map(function($item){
        
        

        

    ?>
  <!-- cart item -->



  

      <div class="row border-top py-3 mt-3">
          <div class="col-sm-2">

        
           <a href="<?php printf('%s?book_id=%s','ptbproduct.php',$item['book_id']); ?>"><img src="<?php echo$item['book_img'] ?? "your internet connection is slow"; ?>" alt="product1" class="img-fluid"></a></td>
           <button type="submit" class="btn font-baloo text-danger">click on the img to buy it again</button>


          </div>
          <div class="col-sm-8">
              <h5 class="font-baloo font-size-20"><?php echo $item['book_name']?? "Unknown"; ?></h5>
              <small>Sold By Crossword Book Store</small>

        
              



            
                                    
                                    <!-- product qty -->
                                    <div class="qty d-flex pt-2">
                                        <div class="d-flex font-rale w-25">
                      </div>
                    <form  method="post">
                        <input type="hidden" name="book_id" value="<?php  echo $item['book_id']??0; ?>">
                        <?php 
                        include('template/uisolated.php');
                        ?>
                          
                        <button type="submit" name="delete_cart" disabled class="btn font-baloo text-primary px-3 border-right">order no <?php echo ((($suserid*100000)-12345)%10000);?></button>
                        <button type="submit" name="delete_cart" disabled class="btn font-baloo text-primary px-3 border-right">payment sucessfull</button>


                    </form>
                        

                
                  </div>
              <!-- !product qty -->
              


          </div>

          <div class="col-sm-2 text-right">
              <div class="font-size-20 text-danger font-baloo">
                  <span class="product_price"><?php  echo '$'.$item['book_price']?? "??"; ?></span>
              </div>
          </div>


          <?php
            $u=$_SESSION['username'];
          

           ?>
           <div>

               <p style="font-size:15 px;">purchased by <strong><?php echo $u ?></strong>, order has been delivered to your respective address</p>
            </div>
               










      </div>
      
  <!-- !cart item -->


<?php
return $item['book_price'];
},$cart); //closing array map function
endforeach;
// print_r($subtotal);

?>












</section>
</div>


<!-- !subtotal section-->

<!-- x -->
</div>
<!--  !shopping cart items   -->
</div>


<!-- your purchased books -->
<!-- **************************************************************************************************************************************************** -->

<?php endif; ?>



















<!-- **************************************************************************************************************************************************** -->

<?php
$cart1=new Cart($db);
?>


    <?php
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
     if(isset($_POST['delete_cart']))
     {
         $delr=$cart1->deleteCart($_POST['book_id'],'bookspurchased');

     }
 }
 ?>

<?php if($val=='CancelOrder') : ?>






   
    <!-- Shopping cart section  -->
<div style="background-color: rgba(110, 248, 255);">
<?php
$su=$_SESSION['username'];
?>
   <center> <h3><?php echo$su ?> Your Orders</h3></center>
   
    
</div>

<img src="https://images-na.ssl-images-amazon.com/images/G/01/support_images/GUID-D2D25277-9C3E-44CD-9318-37A084D06D95_en-GB.png" alt="box" style="float: right;">

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
<h5 class="font-baloo font-size-20">Shopping Cart</h5>

<!--  shopping cart items   -->
<div class="row">
<div class="col-sm-9">





    <?php
   
//   $pbook= $product->getpurschasedbook($suserid,$val);



foreach($product->getpurschasedbook($suserid,$val) as $items):
   $cart=$product->getProduct($items['book_id'],'product');





        

        
     //print_r(count($cart));
    //  print_r($items);

    $subtotal[]=array_map(function($item){
        
        

        

    ?>
  <!-- cart item -->


  

      <div class="row border-top py-3 mt-3">
          <div class="col-sm-2">

        

              <img src="<?php echo $item['book_img'] ?? "your internet connection is slow"; ?>" style="height: 120px;" alt="cart1" class="img-fluid">
          </div>
          <div class="col-sm-8">
              <h5 class="font-baloo font-size-20"><?php echo $item['book_name']?? "Unknown"; ?></h5>
              <small>By Crossword Book Store</small>

        
              



            
                                    
                                    <!-- product qty -->
                                    <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale w-25">
                                        
                      </div>
                    <form  method="post">
                        <input type="hidden" name="book_id" value="<?php  echo $item['book_id']??0; ?>">
                          
                        <button type="submit" name="delete_cart" class="btn font-baloo text-danger px-3 border-right">Cancel Order</button>
                    </form>
                      <button type="submit" class="btn font-baloo text-danger">Your order will be delivered soon</button>
                  </div>
              <!-- !product qty -->
              


          </div>

          <div class="col-sm-2 text-right">
              <div class="font-size-20 text-danger font-baloo">
                  <span class="product_price"><?php  echo '$'.$item['book_price']?? "??"; ?></span>
              </div>
          </div>
          <!-- <p style="font-size: 15px"> </p> -->
         
          

      </div>
      


  <!-- !cart item -->


<?php
return $item['book_price'];
},$cart); //closing array map function
endforeach;
// print_r($subtotal);

?>






    
</section>


</div>


<!-- !subtotal section-->

<!-- x -->
</div>
<!--  !shopping cart items   -->
</div>

<!-- cancel orders -->
<!-- **************************************************************************************************************************************************** -->





<?php endif; ?>


<?php else : ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
$cart1=new Cart($db);
?>


    <?php
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
     if(isset($_POST['delete_cart']))
     {
         $delr=$cart1->deleteCart($_POST['book_id'],'bookspurchased');

         echo'   
         <br>
         <br>
         <br>
         <br>
        
         <center>
         <div style="width: 500px;">
        <div class="alert alert-danger" role="alert">
        your order has been sucessfully canceled
        </div>
        </div>
        </center>';

     }
 }
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
<?php endif; ?>








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




