
<?php
session_start();
include("header.php");
?>

    <div class="container">
        <div class="login-box">

            <div class="row">
                <div class="col-md-6 login-left">
                    <!-- login here -->
                    <h2>Login Here</h2>
                    <form action="validation.php" method="post">
                        
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required > 
                        </div>
                        
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required > 
                        
                            
    </div>
    
    <button type="submit" class="btn btn-primary">Login</button>
        <!--  alert -->
        <?php
       
            
            if((isset($_SESSION['alertwronguap'])) &&  ($_SESSION['alertwronguap']=='true'))
        {
            
            echo'<div class="alert alert-danger" role="alert">
            invalid username and password!
            </div>'; 
        
        }

        ?>


    
</form>



</div>
<!-- login here -->

<!-- register -->
<div class="col-md-6 login-right" >
    <h2>Register Here</h2>
    <form action="register.php" method="post" onsubmit="return validateForm()">
        
        <div class="form-group">
        <label>Username</label>
            <input type="text" name="user" class="form-control inp" required > 
        </div>
<!--  alert -->
        <?php
       
            
            if((isset($_SESSION['alertusername'])) &&  ($_SESSION['alertusername']=='true'))
        {
            
            echo'<div class="alert alert-danger" role="alert">
            Username already exists!
            </div>'; 
        
        }
        ?>




        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control inp" required > 
        </div>

        <div class="form-group">
            <label>Mobile Number</label>
            <input type="number" name="number" class="form-control inp" required > 
        </div>

        <div class="form-group">
            <label>Town/City</label>
            <input type="text" name="address" class="form-control inp" required > 
        </div>



        
        <button type="submit" class="btn btn-primary">register</button>        
        <!--  alert -->
        <?php
       
            
            if((isset($_SESSION['alertsucessfullregister'])) &&  ($_SESSION['alertsucessfullregister']=='true'))
        {
            
            echo'<div class="alert alert-success" role="alert">
            registration has been successful!
            </div>'; 
        
        }

        ?>

        <br>
        <br>
   
        

        
    </form>
    
    
</div>

<!-- register -->


</div>
</div>
</div>

<?php
include("footer.php");
?>
