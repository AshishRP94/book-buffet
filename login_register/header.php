<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Buffet</title>
        <style>


        </style> 

<script>
  function validateForm()
{
    var i=0;
    var valinp=document.getElementsByClassName("inp");
   

    for(i=0;i<valinp.length;i++)
    {
      var cmp=valinp[i].value;
        if(cmp.trim()=="")
        {
          
            alert("some fields are remaining");
            return false;
        }
    }
    return true;


    
}

</script>


        <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    
    <!--Bootstrap Link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--Owl Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
    integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" 
    integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" 
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!--CSS-->
    </head>

    <body>

        <!--header section-->

        <header id="header">
          <div class="strip d-flex justify-content-between px-3 py-3 bg-dark">
                <p class="font-awesome font-size-12 text-dark-50 m-0"></p>
                <div class="font-rale font-size-14">
                    <!-- <a href="#" class="px-3 border-right border-left text-light">Login&SignUp</a> -->
               
                      <a href="../index.php" class="px-3 border-right text-light ">Proceed to Book Buffet As a Guest User</a>
                   

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
                      <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                      </a>
                  </form>
                </div>
              </nav>
              

        </header>






