<!-- header -->
<?php
ob_start();
include("header.php");
include("template/uisolated.php");
?>
<!-- header -->

<?php
$server="localhost";
$username="root";
$password="";
$port="3307";
$databse="bookstore";
$con=mysqli_connect($server,$username,$password,$databse,$port);

if(!$con)
{
die("connection to this database failed due to".mysqli_connect_error());
}
echo "sucess connection to database established";






$sql="SELECT * FROM `bookspurchased` WHERE id = (SELECT MAX(id) FROM `bookspurchased`)";




$rows=mysqli_query($con,$sql);
print_r( $rows);





?>



     <center><h3 style="color:rgba(0, 150, 136, 0.7);">thank you for shopping with us</h3></center>
     <!-- <center><h3 style="color:rgba(0, 150, 136, 0.7);">your bill (press  Windows Logo Key+ PrtScn button to print)</h3></center> -->
  <center><button type="submit" disabled class="btn btn-warning font-size-12">your bill (press  Windows Logo Key+ PrtScn button to print) </button></center>




   
    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">
         <div class="card-header p-4">
             <a class="pt-2 d-inline-block" href="index.html" data-abc="true">Book Buffet</a>
             <div class="float-right">
                 
                 <h3 class="mb-0">Invoice #BBB10234</h3>
                 <?php foreach($rows as $value): ?>
                 Date: <?php echo $value['dop']??0;?>
             </div>
         </div>
         <div class="card-body">
             <div class="row mb-4">
                 <div class="col-sm-6">
                     <h5 class="mb-3">From:
                         <br>
                         crossword books</h5>
                     <h3 class="text-dark mb-1"></h3>
                     <div></div>
                
                     
                 </div>
                 <div class="col-sm-6 ">
                     <h5 class="mb-3">To:
                         <br><?php echo $value['user_name']??0;?></h5>
                     <h5 class="mb-3"></h5>
                     <div><?php echo $value['address']??0;?></div>
                     <div><?php echo $value['city']??0;?></div>
                     <div><?php echo $value['landmark']??0;?></div>
                     <div><?php echo $value['pin_code']??0;?></div>
                     <div><?php echo $value['state']??0;?></div>
                 </div>
             </div>
             <div class="table-responsive-sm">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th class="center">#</th>


                             <th>Item</th>
                             <th>purchased By</th>
                             <th class="right">date of order</th>
                             <th class="center">Qty</th>
                             <th class="right">Total Cost</th>
                         </tr>
                     </thead>
                     <tbody>
                  
                         <tr>
                             <td class="center">1</td>
                             <td class="left strong">book</td>
                             <td class="left"><?php echo $value['user_name']??0;?></td>
                             <td class="right"><?php echo $value['dop']??0;?></td>
                             <td class="center"><?php echo $value['qty']??0;?></td>
                             <td class="right"><?php echo $value['subtotal']??0;?></td>
                         </tr>
                         
                 
                     </tbody>
                    </table>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-sm-5">
                 </div>
                 <div class="col-lg-4 col-sm-5 ml-auto">
                     <table class="table table-clear">
                         <tbody>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Subtotal</strong>
                                 </td>
                                 <td class="right"><?php echo $value['subtotal']??0;?>$</td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Tax</strong>
                                 </td>
                                 <td class="right"><?php echo (($value['subtotal'])*1.1) ??0;?>$</td>
                             </tr>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Amount Paid </strong> </td>
                                 <td class="right">
                                     <strong class="text-dark"><?php echo (($value['subtotal'])*1.1) ??0;?>$</strong>
                                     <!-- total*taxrate/100; -->
                                     <!-- amt=70
                                    tax rate=5
                                    tx amt=amt*tax rate/100
                                    tax rate=70*5/100
                                    tax amt=3.5
                                    totol bill amt=amt+tax amt
                                    70+3.5 -->
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <div class="card-footer bg-white">
             <p class="mb-0">developed by Bhuran, Ashish,Ricky</p>
         </div>
     </div>
 </div>

 <?php endforeach; ?>







    
    


<!--Footer-->
<?php
include("footer.php");
?>
<!--Footer-->