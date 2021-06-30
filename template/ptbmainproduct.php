<?php
ob_start();
$bookss=$product->getData();



if($_SERVER['REQUEST_METHOD']=="POST")
{
        if(isset($_POST['ptbmain_submit']))
    {
    
    echo "CALLED METHOD CART TO ADD------";
    $cart->addToCart($_POST['user_id'],$_POST['book_id']);
    //CALL METHOD CART TO ADD
    // $cart=new Cart($db);
    }
}


include("uisolated.php");


?>

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

<?php



        $book_id=$_GET['book_id']??1;//default book id is 1
        // $bookshuffe=;
        foreach($bookss as $items):
            if($items['book_id']==$book_id):
            ?>
            <section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $items['book_img'] ?? "your internet connection is slow"; ?>" alt="product" class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-baloo">
                                <div class="col">

                                <form action="checkoutpage/checkout.php" method="post">
                                <?php
                                if($suserid==0)
                                       {
                                       // echo'<button type="submit" disabled class="btn btn-primary font-size-12">please <strong>login in</strong> to buy this book  </button>';
                
                                       }
                                       else
                                       {
                                        $p=$items['book_price'];
                                        $x=$items['book_id'];
                                        $_SESSION['count']=1;
                                        $_SESSION['total']=$p;
                                        $_SESSION['ptbid']=$x;

                                           echo'<button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>';
                                          
                                           
                                        }


                                ?>
                                
                            </form>
                            
                        </div>



                                <div class="col">
                                <form method="post">
                                <input type="hidden" name="book_id" value="<?php  echo $items['book_id']??'1'; ?>">
                                <input type="hidden" name="user_id" value="<?php  echo $suserid??'0'; ?>">
                                    <?php
                                       if($suserid==0)
                                       {
                                    
                                        echo'<button type="submit"  disabled class="btn btn-primary form-control">please <strong>login in</strong> to buy this book </button>';

                
                                       }
                                       else
                                       {

                                           
                                           

                                           if(in_array( $items['book_id'], $cart->getCartId($product->getData('cart'))??[]))
                                           {
                                               echo'<button id="cs" type="submit"  disabled class="btn btn-warning form-control">In the Cart</button>';
                                            }
                                            else
                                            {
                                                echo'<button type="submit" name="ptbmain_submit" class="btn btn-warning form-control">Add the Cart</button>';
                                            }
                                        }
                                            ?>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $items['book_name'] ??"Unknown"; ?></h5>
                            <small><?php echo '$'.$items['Author']?? "Unknown";?></small>

                            <hr class="m-0">

                            <!---    product price       -->
                                <table class="my-3">
                                    <tr class="font-rale font-size-18">
                                        <td>M.R.P:</td>
                                        <td><?php echo '$'.$items['book_price']?? "??";?></td>
                                    </tr>
                                </table>
                            <!---    !product price       -->

                             
                              
                                <hr>

                            <!-- order-details -->
                                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                    <small>Delivery by : Mar 29  - Apr 1</small>
                                    <small>Sold by <a href="#">Crossword Book Store </a>(4.5 out of 5 | 18,198 ratings)</small>
                                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                                </div>
                             <!-- !order-details -->
                             	<br />

                                 <div class="col-6">
                                   <!-- product qty section -->  
                                     <div class="qty d-flex">
                                         <h6 class="font-baloo"></h6>
                                         <div class="px-4 d-flex font-rale">
                                            
                                         </div>
                                     </div>
                                    <!-- !product qty section -->  
                                 </div>
                             </div>



                        </div>

                        <br />

                        <div class="col-12">
                            <h6 class="font-rubik">Product Description</h6>
                            <hr>
                            <p class="font-rale font-size-14"><?php  echo $items['bookdesc']??'none'; ?></p>
                           
                        </div>
                    </div>
                </div>
              
            </section>
        <!--   !product  -->

        <?php
        endif;
        endforeach;
        ?>