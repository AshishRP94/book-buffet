<!-- converting html into php -->


<!--include fucntions.php so that we can use all object present in functions.php in cart.php-->
<?php
include("functions.php");
?>
<!--functions.php-->







<!-- header -->
<?php
ob_start();
include("template/cartheader.php")
?>
<!-- header -->







<!--cart main section-->
<?php
include("template/cartmainsection.php");
?>
<!--cart main section-->















<!--Footer-->
<?php
include("template/cartfooter.php");
?>
<!--Footer-->