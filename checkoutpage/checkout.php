<!-- header -->

<?php
include("header.php");
?>



<?php
          if(isset($_SESSION['count']))
          {
             $count= $_SESSION['count'];
             
          }
          else
          {
              $count=0;
          }

          if(isset($_SESSION['total']))
          {
             $tot= $_SESSION['total'];
          }
          else
          {
              $tot=0;
          }

            
?>     

<!-- header -->

<body>
    
    <br>
   

    
    <!-- subtotal section-->
    <div class="col-sm-3 id=left" style="
    display: inline;
    float: right;" >
  <div class="sub-total border text-center mt-2">
      <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
      <div class="border-top py-4">
          
          <h5 class="font-baloo font-size-20">Subtotal (<?php echo $count ?? "0"; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo $tot ?? "0"; ?></span> </span> </h5>
          
          <form action="msgcancel.php" method="post">
              <button type="submit" class="btn btn-warning mt-3">Cancel Payment</button>
            </form>
        </div>
    </div>
</div>



    <!-- !subtotal section-->
    
<br>







<div class="container">
    <div class="login-box">
        <div class="row">
            
            
            
            
            <!-- Delivery Address -->
            
            
            <div class="col-md-6 login-left" style="padding: 0px;">
    <form action="checkoutdb.php" method="post"  onsubmit="return validateForm()">
    
    <h2>Enter Your Delivery Address</h2>
    <!-- <form action="#" method="post"> -->
            
            <div class="form-group">
                <label>PIN code</label>
                <br>
                <input type="text" name="pincode" class="width1 inp" required > 
        </div>
        
        <div class="form-group">
            <label>Flat, House no., Building, Company, Apartment</label>
            <input type="text" name="fulladdress" size="500" class="width inp" required > 
        </div>
        
        <div class="form-group">
            <label>Landmark</label>
            <input type="text" name="landmark"  size="500" class="width inp" required > 
        </div>
        
        <div class="form-group">
            <label>Town/City</label>
            <br>
            <input type="text" name="city" class="width1 inp" required > 
        </div>
        
        <div class="form-group">
            <label>State / Province / Region</label>
            <input type="text" name="state" class="width inp" required > 
        </div>

        <p> <strong>Add delivery instructions Preferences are used to plan your delivery. However, shipments can sometimes arrive early or later than planned.</strong></p>
        <div class="form-group">
                <label>Select an Address Type</label>
                <br>
             Home (7 am – 9 pm delivery)<input  type="radio" name="atype" class="radio" required >
             <br>
               Office/Commercial (10 AM - 6 PM delivery)<input type="radio" name="atype" class="radio" required >
         </div>


         <div class="form-group">
         <input type="checkbox" name="check"   > 
            <label><strong> Use as my default address.</strong> </label>
            
        </div>


        
        
        
        
        
        
        
        
        
        <br>
        <br>
        
        
        
        
    
    


    </div>
    <!-- Delivery Address -->




















<!-- payment -->
<div class="col-md-6 payment-right">

<h2>Payment</h2>
<p>Accepted Cards</p>
<img     style="width: 304px;height: fit-content;" src="bankcards.PNG" alt="img of Accepted cards supported">




            <div class="form-group">
                <label>Select Credit /Debit /Atm Card</label>
                <br>
                Credit Card<input  type="radio" name="card" class="radio" required >
                Debit Card<input type="radio" name="card" class="radio" required >
                Atm Card<input type="radio" name="card" class="radio"  required>
                
                
                
            </div>
            
            <div class="form-group">
                <label>Name On Card</label>
                <input type="text" name="namec" class="form-control inp"  required> 
            </div>
            
            <div class="form-group">
                <label>Card Number </label>
                <input type="text"  name="cardnumberc" class="form-control inp"required >
                
            </div>
            
            <div class="form-group">
                <label>Expiry year </label>
                <input type="text" name="expyearc" class="form-control inp"required >
            </div>
            
            <div class="form-group">
                <label>Expiry Month </label>
                <input type="text" name="expmonthc" class="form-control inp" required >
                
            </div>
            
            <div class="form-group">
                <label style="display: block;">CCV</label>
                <input  id="ccv" type="text" name="ccvc inp" required >
            </div>
            
            
            
            
            
            
            <button type="submit" class="btn btn-primary">Proceed to Checkout</button>  
            <button type="reset" class="btn btn-primary">Reset</button>  
     
            <br>
            <br>
            
            
            
            
        <!-- </form> -->
        
   
    
    



    
</div>
<!-- payment -->

</form>






 </div>
</div>
</div>
</body>












<!-- footer -->
<?php
include("footer.php");
?>

<!-- footer -->
