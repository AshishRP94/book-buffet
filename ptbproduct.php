<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Buffet</title>

    <!--Bootstrap Link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--Owl Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
    integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" 
    integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />



    <script>
     function active()
     {
       var s=document.getElementById('searchbar');
       if(s.value.trim()=='Search...')
       {
         s.value='';
         s.placeholder='Search...';
       }


     }



     function inactive()
     {
       var s=document.getElementById('searchbar');
       if(s.value.trim()=='')
       {
         s.value='Search...';
         s.placeholder='';
       }


     }

    </script>

    <style>
      #col
      {
      background-color: black;

      }
      /* css for search box */
      #searchbar
      {
        border: 1px solid #000000;
        padding: 10px;
        outline: none;
        width: 150px;
        height: 25px;
        border-bottom-left-radius:10px ;
        border-top-left-radius:10px ;
        margin: 0px;

        

      }

      #searchbtn
      {
        border: 1px solid #000000;
        padding: 0px;
        width: 33px;
        background: #00A5C4;       /* medium dark yellow color */
        font-weight: bold;
        cursor: pointer;
        outline: none;
        height: 25px;
        
        border-bottom-right-radius:10px ;
        border-top-right-radius:10px ;
        margin: 0px;



      }

      #searchbtn:hover
      {
        background: gray;

      }

      #accountsopt
      {
        border: 1px solid #000000;
        padding: 0px;
        width: 150px;
        height: 25px;
        border-bottom-left-radius:10px ;
        border-top-left-radius:10px ;
        margin: 0px;

      }

      #accountbtn
      {
        border: 1px solid #000000;
        padding: 0px;
        width: 33px;
        background:  #00A5C4;       /* medium dark yellow color */
        font-weight: bold;
        cursor: pointer;
        outline: none;
        height: 25px;
        
        border-bottom-right-radius:10px ;
        border-top-right-radius:10px ;
        margin: 0px -5px;



      }

      #accountbtn:hover
      {
        background:gray;

      }

    </style>
    













    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" 
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
    </head>












    <body>
<?php
    include("functions.php");

    ?>


<?php
session_start();
// if(!isset($_SESSION['username']))
// {
//   header('location:login_register/login.php');
// }
?> 

        <!--header section-->

        <header id="header">
          <div class="strip d-flex justify-content-between px-3 py-3 bg-dark">
          <form  action="accounts.php" method="post">
                          <select id="accountsopt" name="accountsopt" style="width: 161px;">
                              <option value="ViewYourAccount">View Your Account </option>
                              <option value="PurchasedProducts">Purchased Products</option>
                              <option value="CancelOrder">Cancel Order</option>
                              
                              
                            </select>
                            <input type="submit" id="accountbtn" value="Go!" style="margin: 0px -22px;">
                          </form>
                <p class="font-awesome font-size-12 text-dark-50 m-0"></p>
               
                <div class="font-rale font-size-14">


             
                        </div>


                <p class="font-awesome font-size-12 text-dark-50 m-0"></p>
                <div class="font-rale font-size-14">

                  <!-- search -->
                  <div>
                    
                    <form action="searchresult.php"  method="post">
                      <input type="text" id="searchbar" placeholder=""  name="search" value="Search..." maxlength="40" autocomplete="off" onmousedown="active();" onblur="inactive();"><input type="submit" id="searchbtn" value="Go!">
                      
                      
                    </form>
                  </div>
                  <!-- search -->

                
                <?php
                if(isset($_SESSION['username']))
                {
                  $u=$_SESSION['username'];
                  echo"<label  disabled style='color:whitesmoke;' font-size-12> Welcome $u </label>";
                  echo' <a href="login_register\logout.php" class="px-3 border-right text-light">logout</a>';
                }
                else
                {
                  echo"<label style='color:whitesmoke;'>Welcome guest</label>";
                  echo' <a href="login_register\logout.php" class="px-3 border-right text-light">logout</a>';

                 echo' <a href="login_register\login.php" class="px-3 border-right border-left text-light">Login&SignUp</a>';
                }
                  
                ?>

                <style>
                  #cs
                  {
                    background-color: black;
                    color: whitesmoke;

                  }
                </style>
                </div>
            </div>

             <!-- navigation -->
             <nav class="navbar navbar-expand-lg navbar-light color-second-bg">
                <a class="navbar-brand" href="#">Book Buffet</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#top-sale">Books that are popular</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#special-price">All Genres</a>
                    </li>
        
                      <li class="nav-item">
                        <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Coming Soon</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#footer">About Us</a>
                      </li>
                  </ul>
                  <form action="#" class="font-size-14 font-rale">
                      <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <?php
                        include("template/uisolated.php");
                        ?>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart',$suserid))  ?></span>
                      </a>
                  </form>
                </div>
              </nav>
              

        </header>


    <!-- start #main-site -->
        <main id="main-site">


        <!--  ptbmainproduct  -->
        <?php

        include("template/ptbmainproduct.php");
        ?>
         <!-- !ptbmainproduct  -->
  










          
        </main>
    <!-- !start #main-site -->

    
          <!--Footer-->
          <footer id="footer" class="bg-dark text-white py-5">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-12">
                  <h4 class="font-rubik font-size-20">Book-Buffet</h4>
                  <p class="font-size-14 font-rale text-white-50"></p>
                </div>

          </footer>

        
   
      
       
        
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    

<!--OWl Carousel JS-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" 
integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>


<!--isotop jquery-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" 
integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>


<!--Javascript -->
<script src="index.js"></script>

</body>
</html>