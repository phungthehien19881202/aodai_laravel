<?php 
	namespace App;
class Cart{
    public $items = null;
 
    
    public function __construct(){
    	session_start();
        // get the shopping cart array from the session
        $this->items = !empty($_SESSION['cart_contents'])?$_SESSION['cart_contents']:NULL;
        if ($this->items === NULL){
            // set some base values
            $this->items = [];
            $_SESSION['cart_contents'] = $this->items; 
        } 
    }
 
    function add($id,$name,$quanity,$price)
    { 
    	array_push($this->items, [ 'id'=>$id,'name'=>$name,'quanity'=>$quanity,'price'=>$price,'total'=>$quanity*$price]);
    	$_SESSION['cart_contents'] = $this->items;
 
    }

function getTotal( )
	{
		$total=0;
		foreach ($this->items as $it) {
			$total+=$it['total'];
		}
		return $total;
	}

	function getContent( )
	{
		return $this->items;
	}
   

   function delete($id){
   		unset(  $this->items[0]);
   		$_SESSION['cart_contents'] = $this->items;

   }  
}

 

 ?>