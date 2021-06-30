 <!-- start #main-site -->
 <main id="main-site">

<?php
$cart1=new Cart($db);
?>


 <?php
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
     if(isset($_POST['delete_cart']))
     {
         $delr=$cart1->deleteCart($_POST['book_id']);

     }
 }
 ?>

<?php
include("uisolated.php");
?>


<!-- Shopping cart section  -->
<section id="cart" class="py-3">
<div class="container-fluid w-75">
<h5 class="font-baloo font-size-20">Shopping Cart</h5>

<!--  shopping cart items   -->
<div class="row">
<div class="col-sm-9">


<?php
$bids=$product->getData('cart',$suserid,'ansertdatdasddsioiiaxyz');



$_SESSION['bids']=$bids;

//include('temp.php');
?>


    <?php
   




foreach($product->getData('cart',$suserid) as $items):
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


                                          
                                          
                                          <button class="qty-up border bg-light" data-id="<?php echo$item['book_id']??0;?>"><i class="fas fa-angle-up"></i></button>
                                            <input type="text" data-id="<?php echo$item['book_id']??0;?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                            <button data-id="<?php echo$item['book_id']??0;?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                            
                                      
                                            <!-- <input type="number" id=" 1" maxlength="2" autofocus value="1" style="width: 100px;height: 37px;"> -->



                                    </div>
                    <form  method="post">
                        <input type="hidden" name="book_id" value="<?php  echo $item['book_id']??0; ?>">
                          
                        <button type="submit" name="delete_cart" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                    </form>
                      <!-- <button type="submit" class="btn font-baloo text-danger">Save for Later</button> -->
                  </div>
              <!-- !product qty -->




              


          </div>

          <div class="col-sm-2 text-right">
              <div class="font-size-20 text-danger font-baloo">
                  <span class="product_price" data-id="<?php echo$item['book_id']??0;?>" ><?php  echo '$'.$item['book_price']?? "??"; ?></span>
              </div>
              
          </div>
      </div>
  <!-- !cart item -->


<?php
return $item['book_price'];
},$cart); //closing array map function
endforeach;
// print_r($subtotal);

?>





</div>
<!-- subtotal section-->
<div class="col-sm-3">
  <div class="sub-total border text-center mt-2">
      <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
      <img src="https://rukminim1.flixcart.com/www/88/88/promos/06/04/2017/32f62e07-a9e4-4bfc-88d8-3eeb8b4be127.png?q=80" alt="deliveryimg">
      <div class="border-top py-4">
        <?php
        if(isset($subtotal))
        {
            $c=count($subtotal);
            $c1=$cart1->getSum($subtotal);
            

        
        echo"   <h5 class='font-baloo font-size-20'>Subtotal ($c item):&nbsp; <span class='text-danger'>$<span class='text-danger' id='deal-price'>$c1</span> </span> </h5>";
         // // //    // // session_start();
        
         $_SESSION['count']=$c;
         $_SESSION['total']=$c1;
        }
        else
        {
          echo'  <h5 class="font-baloo font-size-20">Subtotal (0 item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price">0.00</span> </span> </h5>';

          $_SESSION['count']=0;
          $_SESSION['total']=0;

        }
        ?>  
          
          <?php
          if($suserid==0)
          {
            echo'<button type="submit" disabled class="btn btn-primary mt-3">Please <strong>login</strong> to view your books here</button>';


          }
          else
          {
         echo'<form action="checkoutpage/checkout.php" method="post">';
         echo'<button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>';

         echo' </form>';
         }
   
          ?>
          
          
        
      </div>
<!-- img -->
      <div>

          <!-- displays img when count=0 -->
          <?php
          $cop=$_SESSION['count'];
        if($cop==0)
          {
          echo'<img src="emptycart.PNG" alt="cc" style="
          float: left;
          width: 444px;
          margin: -233px -540px;
      ">';
              
            }
            
            
        ?>
    <!-- displays img when count=0 -->

    </div>
    <!-- img -->
  </div>
</div>


<!-- !subtotal section-->

<!-- x -->
</div>
<!--  !shopping cart items   -->
</div>

<!-- !Shopping cart section  -->

          
  

</main>
<!-- !start #main-site -->



                            