<?php
$sorted_arr = [2,3,5,6,8,9,12,15,16,39,70];

/* Iterative solution */
function binary_search_iterative($element_to_search){
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
//driver code
echo binary_search_iterative(15);

/* recursive solution */
function binary_search_recursive(array $a, $ldix, $fidx, $x)
{
	
	$mid = ceil(($fidx+$ldix)/2);
	if($mid > $ldix || $mid<$fidx)
	{
		echo "did not find your shit!\n";
		exit();
	}
	if($a[$mid] == $x)
	{
		echo "found it -- $a[$mid]\n";
		exit();
	}
	if($x>$a[$mid])
	{
		binary_search_recursive($a, count($a)-1, $mid+1, $x);
	}else{
		binary_search_recursive($a, $mid-1, 0, $x);
	}
}

//driver code
$ip=[2, 5, 10, 15, 30, 45];
print_r(binary_search_recursive($ip, count($ip)-1, 0, 123));

