<?php
//used to fetch product data
class product
{
    public $db=null;

    public function __construct(DBcontroller $db)
    {
        if(!isset($db->con))//if connection is not open then return null  
        return null;

        $this->db=$db;

        //fetch product data using getData() method
    }


   

        public function getData($table='product',$uid=null,$search=null)
        {   if(isset($table)&& isset($uid) &&($search))
            {
                if(($uid>0) && ($search=='ansertdatdasddsioiiaxyz') && ($table=='cart'))
                {
                    $sql= "SELECT `book_id` FROM `cart` WHERE user_id='$uid'";
                                                             //for eg if table=product(can be any table form bookstore db)
           $result= $this->db->con->query($sql);// return all data of product table from bookstore database
           $resultArray=array();//declare array 

           //fetch product data one by one
           if ($result->num_rows>0)//the function num_rows() checks if there are more than zero rows returned.
           {
           while($item=$result->fetch_assoc())
           {
               
               $resultArray[]=$item;

           }
           }
       

        return $resultArray;

                

                }

            }





            if(isset($search))
            {

                //for searching
                if($uid==999)
                {
                   $sql=" SELECT * FROM `product` WHERE `book_name` LIKE '%$search%' OR `Author` LIKE '%$search%' OR `genres` LIKE '%$search%' OR `publication`  LIKE '%$search%' ";
                 
                    $result= $this->db->con->query($sql);// return all data of product table from bookstore database
                    $resultArray=array();//declare array 
                    if ($result->num_rows>0)//the function num_rows() checks if there are more than zero rows returned.
                    {
                    while($item=$result->fetch_assoc())
                    {
                        
                        $resultArray[]=$item;
         
                    }
                    return $resultArray;
                    
                }
            }
            }
            else if(isset($uid))
            {
                $sql= "SELECT * FROM `cart` WHERE user_id='$uid'";

            }
            
           
            else
            {

                $sql="SELECT *FROM {$table}";
            }
            if(isset($sql))
            {
                                                        //for eg if table=product(can be any table form bookstore db)
           $result= $this->db->con->query($sql);// return all data of product table from bookstore database
           $resultArray=array();//declare array 

           //fetch product data one by one
           if ($result->num_rows>0)//the function num_rows() checks if there are more than zero rows returned.
           {
           while($item=$result->fetch_assoc())
           {
               
               $resultArray[]=$item;

           }
           }
       

        return $resultArray;

            }
          //  return $resultArray;
        

        }








        public function getpurschasedbook($uid=null,$status=null)
        {   
            if(isset($status))
            {

                
                if(isset($uid))
                {
                    if($status=='changepassword')
                    {
                        return;

                    }
                    else if($status=='PurchasedProducts')
                    {
                        
                        $sql=" SELECT * FROM `bookspurchased` WHERE user_id='$uid'  And  status='sucess'" ;

                    }
                    else if($status=='CancelOrder')
                    {
                        $sql=  " SELECT * FROM `bookspurchased` WHERE user_id='$uid' And status='pend'";

                    }
                 
                    $result= $this->db->con->query($sql);// return all data of bookpurchased table from bookstore database
                    $resultArray=array();//declare array 
                    if ($result->num_rows>0)//the function num_rows() checks if there are more than zero rows returned.
                    {
                    while($item=$result->fetch_assoc())
                    {
                        
                        $resultArray[]=$item;
         
                    }
                    return $resultArray;
                    
                    }
                }
            }
        }








//get product using item id
public function getProduct($book_id=null,$table='product')
{
if(isset($book_id))
{
$result=$this->db->con->query("SELECT * FROM {$table} WHERE book_id={$book_id}");
$resultArray=array();//declare array 

//fetch product data one by one
if ($result->num_rows>0)//the function num_rows() checks if there are more than zero rows returned.
{
while($item=$result->fetch_assoc())
{
    
    $resultArray[]=$item;

}
}


return $resultArray;


}

}
}


?>
