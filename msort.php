<?php
$unsorted_array = [1,8,4,6,0,3,5,2,7,9];

function merge_sort($data){
    //base condition for recursion
    if(count($data) <= 1){
        return $data;
    }
    $left = array_slice($data, 0, intval(count($data)/2));
    $right = array_slice($data, intval(count($data)/2));

    $left = merge_sort($left);
    $right = merge_sort($right);

    return merge($left, $right);
}

function merge($left, $right){
  $sorted = [];
  while(count($left) > 0 && count($right) > 0){
    if($left[0] < $right[0]){
        $left_first = array_shift($left);
        $sorted[] = $left_first;
    }else{
        $right_first = array_shift($right);
        $sorted[] = $right_first;
    }
  }
  for($i=0; $i<count($left);$i++){
    $sorted[] = $left[$i];
  }
  for($i=0; $i<count($right);$i++){
    $sorted[] = $right[$i];
  }
  return $sorted;
}
print_r(merge_sort($unsorted_array));