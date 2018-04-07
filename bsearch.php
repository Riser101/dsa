<?php
$sorted_arr = [2,3,5,6,8,9,12,15,16,39,70];

function binary_search($element_to_search){
	global $sorted_arr;
	$low=0;
	$high=count($sorted_arr)-1;
	
	while($low<=$high){
		
		$mid=intval($low+($high-$low)/2);
		
		if($sorted_arr[$mid] == $element_to_search){
			return $mid;
		}
		
		if($sorted_arr[$mid] > $element_to_search){
			$high=$mid-1;
		}
		if($sorted_arr[$mid] < $element_to_search){
			$low=$mid+1;
		}
	}
	return -1;
}

echo binary_search(15);