<?php 
	namespace App;
class Cart{
    public $items = null;
 
    
    public function __construct(){
    	session_start();
        if(!empty($_SESSION['cart_contents'])) // nếu trong session đã có key cart_contents, nghĩa là trong session đã có hàng mua.
         $this->items=$_SESSION['cart_contents']; //lấy dữ liệu đã lưu trong session 
        else // chưa có, khi lần đàu mở web,
          $this->items=[];
  
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
   		
   }  
}

 

 ?>