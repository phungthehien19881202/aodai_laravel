<?php


$arr=[1,2,3,4,5,6,7,8,9,10,11,12];
 

$temp=[];
foreach ($arr as $a) {

	array_push($temp, $a);
	if(count($temp)==3){
		echo $temp[0];
		echo $temp[1];
		echo $temp[2];

		$temp=[];
		echo '<br />';
	}

}


 for($i=0; $i<count($arr); $i = $i + 3)
 { 
 	echo $arr[$i];
 	echo $arr[$i+1];
 	echo $arr[$i+2];

 	echo '<br />';
 }
?>