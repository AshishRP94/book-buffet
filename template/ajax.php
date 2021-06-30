<?php
    require("../database/DBcontroller.php");
    $db=new DBcontroller(); //DBcontroller object
      


 require("../database/product.php");
 $product=new product($db);//product  object

//  this function receives book_id from cart.js using post request  

if(isset($_POST['book_id']))
{
    // echo($_POST['book_id']);
   
$books=$product->getProduct($_POST['book_id']);
// print_r($books);
echo json_encode($books);//convert data into json file and return to the cart.js


}

?>