$(document).ready(function(){

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });


    // popular books carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

     // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });
    
    // filter items on button click
    $(".button-group").on("click", "button", function(){
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue});
})


         // product qty section
         let $qty_up = $(".qty .qty-up");
         let $qty_down = $(".qty .qty-down");
         let $dprice=$("#deal-price");
        //  alert($dprice);
        //  let $input = $(".qty .qty_input");

 
         // click on qty up button
         $qty_up.click(function(e){

            // $(this).data("id")}']` return current book_id

            let $input=$(`.qty_input[data-id='${$(this).data("id")}']`);
            let $price = $(`.product_price[data-id='${$(this).data("id")}']`);


            //  change product price using ajax
             $.ajax({url: "template/ajax.php", type:'post', data :{ book_id : $(this).data("id")}, success: function(result){
                //  alert(result.trim());
                //  console.log("result=",result);
                 let obj=JSON.parse(result);
                 let book_price=obj[0]['book_price'];
                 console.log(book_price);
                 if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });
                     //increase price of the book
                $price.text(parseInt(book_price*$input.val()).toFixed(2));

                //set subtotal price
                let subtotal=parseInt($dprice.text())+parseInt(book_price);
                $dprice.text(subtotal.toFixed(2));
                }

               

            }}); // closing ajax request

         

            // alert("inc-up");
         
         });
 
         // click on qty down button
             $qty_down.click(function(e){
                let $input=$(`.qty_input[data-id='${$(this).data("id")}']`);
                let $price = $(`.product_price[data-id='${$(this).data("id")}']`);


                      //  change product price using ajax
             $.ajax({url: "template/ajax.php", type:'post', data :{ book_id : $(this).data("id")}, success: function(result){
                //  alert(result.trim());
                //  console.log("result=",result);
                 let obj=JSON.parse(result);
                 let book_price=obj[0]['book_price'];
                 console.log(book_price);

             
                  //  alert("inc-down");
                  if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });
                      //increase price of the book
                $price.text(parseInt(book_price*$input.val()).toFixed(2));

                //set subtotal price
                let subtotal=parseInt($dprice.text())-parseInt(book_price);
                $dprice.text(subtotal.toFixed(2));
                }

              

            }}); // closing ajax request

         

              
             });
 
                 
 
 
 
 });
 
