<?php
//require sql connection
    require("database/DBcontroller.php");
$db=new DBcontroller(); //DBcontroller object
  

//require product class
require("database/product.php");
$product=new product($db);//product  object
$bookshuffle=$product->getData();



//note DBcontroller object and product object are acessible anywhere in this project

//require cart class
require("database/cart.php");
 $cart=new Cart($db);
//  print_r($cart->getCartId($product->getData('cart')));



// $product->getData();//getdata get data from any table by deafault it return data from product table


