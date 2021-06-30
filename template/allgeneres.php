<?php
$genres=array_map(function($pro){return $pro['genres'];},$bookshuffle);
$unique=array_unique($genres);
// sort($unique);
// print_r($unique);


if($_SERVER['REQUEST_METHOD']=="POST")
{
  //CALL METHOD CART TO ADD
  echo "CALLED METHOD CART TO ADD------";
  $cart->addToCart($_POST['user_id'],$_POST['book_id']);
  
}
?>

<?php
$product1=new product($db);//product  object
// $cart2=new Cart($db);//cart object

//gets data from cart table 
//for clear understanding go to cart.php
//refer getData() function
$in_cart=$cart->getCartId($product->getData('cart',$suserid));





?>





<section id="special-price">
            <div class="container">
              <h4 class="font-rubik font-size-20">All Genres</h4>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">Books that are Available</button>
                <?php
                array_map(function($gen){

                printf('<button class="btn" data-filter=".%s">%s</button>',$gen,$gen);



                },$unique);


                ?>
                <!-- <button class="btn" data-filter=".Crime">Crime</button>
                <button class="btn" data-filter=".Comic">Comic</button>
                <button class="btn" data-filter=".Fiction">Fiction</button> -->
                <button class="btn" data-filter=".Pop">Popular Authors</button>
              </div>


              <?php
              $productShuffle=$product->getData();

              ?>


              <!--Crime section-->

              <div class="grid">
                <?php 
                array_map(function($items) use($in_cart) { ?>
                <div class="grid-item <?php echo $items['genres']??"Genres";?> border">
                 <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <a href="<?php printf('%s?book_id=%s','ptbproduct.php',$items['book_id']); ?>"><img src="<?php echo$items['book_img'] ?? "your internet connection is slow"; ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                      <h6><?php echo $items['book_name'] ??"Unknown"; ?></h6>
                     
                      <div class="price py-2">
                        <span>  <?php echo '$'.$items['book_price']?? "??";?> </span>
                      </div>
                      <form method="post">
                      <?php
                     include("uisolated.php");
                      ?>
                        
                        <input type="hidden" name="book_id" value="<?php  echo $items['book_id']??'1'; ?>">
                        <input type="hidden" name="user_id" value="<?php  echo $suserid??'0'; ?>">


                        <?php
                           if($suserid==0)
                           {
                            echo'<button type="submit" disabled class="btn btn-primary font-size-12">please <strong>login in</strong> to buy this book  </button>';
                            echo'<br>';
    
                           }
                           else
                           {

                             
                             
                             if(in_array( $items['book_id'], $in_cart??[]))
                             {
                               echo'<button id="col" type="submit" disabled class="btn btn-danger font-size-12">In the Cart</button>';
                               
                              }
                              else
                              {
                                
                                echo'<button type="submit" name="allgenres_submit"  class="btn btn-danger font-size-12">Add To Cart</button>';
                              }
                            }
                        ?>
                        </form>
                        
                    </div>
                  </div>
                </div>
                </div>


        <?php } , $bookshuffle)?>


    

        </div>
      </div>
    </section>