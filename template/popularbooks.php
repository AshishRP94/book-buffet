<!-- popular books -->


<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['popularbooks_submit']))
  {
  echo "CALLED METHOD CART TO ADD------";
  $cart->addToCart($_POST['user_id'],$_POST['book_id']);
  //CALL METHOD CART TO ADD
  // $cart=new Cart($db);
  }
}
?>

<?php
include("uisolated.php");

?>



<!-- books in the popular books section are begin displayed dynamically 
i.e the their values are begin fetched with the help of product table which  is stored  in the bookstore database -->

<div class="owl-carousel owl-theme">
              <?php foreach($bookshuffle as $items){?>
                <div class="item py-2">
                  <div class="product font-rale">
                    <td> <a href="<?php printf('%s?book_id=%s','ptbproduct.php',$items['book_id']); ?>"><img src="<?php echo$items['book_img'] ?? "your internet connection is slow"; ?>" alt="product1" class="img-fluid"></a></td>
                    <div class="text-center">
                      <h6><?php echo $items['book_name']?? "Unknown"; ?></h6>
                      <div class="price py-2">
                        <span><?php echo '$'.$items['book_price']?? "??"; ?>  </span>
                      </div>
                      <form method="post">
                        <input type="hidden" name="book_id" value="<?php  echo $items['book_id']??'1'; ?>">
                        <input type="hidden" name="user_id" value="<?php  echo $suserid??'0'; ?>">
                        <?php
                       if($suserid==0)
                       {
                        echo'<button type="submit" disabled class="btn btn-primary font-size-12">please <strong>login in</strong> to buy this book  </button>';

                      }
                       else
                       {

                         
                         if(in_array( $items['book_id'], $cart->getCartId($product->getData('cart',$suserid))??[]))
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
                <?php } ?>
                <!-- curly braces indicates closing for each function -->
                
     
              </div>
          
          </div>
        </section>