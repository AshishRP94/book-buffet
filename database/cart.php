<?php
class Cart
{

public $db=null;


public function __construct(DBcontroller $db)
{
    if(!isset($db->con))
    {
        return null;
    }
    $this->db=$db;
}
//insert into cart table

public function insertIntoCart($par=null,$table="cart")
{
if($this->db->con!=null)
{
    if($par!=null)
    {
        // insert into cart(cart_id)
        $col=implode(',',array_keys($par));
     // print_r($col);
        $value=implode(',',array_values($par));
      //  print_r($value);

        // create sql query
        echo 
        $sql=sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$col,$value);

        // execute sql query
        $result=$this->db->con->query($sql);
        return $result;


    }
}
}



public function addToCart($userid,$bookid)
{
if (isset($userid)&&isset($bookid))
{ 
    $para=array(
        'user_id'=>$userid,
        'book_id'=>$bookid
    );
// insert data into cart

echo '------calling insertIntoCart()--------';
$res=$this->insertIntoCart($para);
if($res)
{
    echo'value inserted-----';
    header("location".$_SERVER['PHP_SELF']);
    }
}
}

//calculate sub total
public function getSum($arr)
{
if(isset($arr))
{
    $sum=0;
    foreach($arr as $i)
    {
        $sum+=floatval($i[0]);
    }
}
return sprintf("%.2f",$sum);
}

//delete cart item using book_id
public function deleteCart($bookss_id=null,$table='cart')
{
if($table=='cart')
{
    if($bookss_id!=null)
{
$res=$this->db->con->query("DELETE FROM {$table} WHERE book_id={$bookss_id}");
if($res)
{
    header("location".$_SERVER['PHP_SELF']);
    return $res;
}

}

}
else
{

    if($bookss_id!=null)
    {
    $res=$this->db->con->query("DELETE FROM {$table} WHERE book_id={$bookss_id}");
    if($res)
    {
        header("location".$_SERVER['PHP_SELF']);
        return $res;
    }
    
    }

}


}


//get book_id of shopping cart list
public function getCartId($cartArray=null,$key='book_id')
{
if($cartArray!=null)
{
    $cart_id=array_map(function($value) use($key) 
    {

        return $value[$key];




    },$cartArray);
    return $cart_id;
}
}


}
?>