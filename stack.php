<?php

$stack_array = [];
$top = -1;
$max = 5;

function push($element){
	if(isFull()){
		echo "stack is full \n";
	}else{
		global $stack_array, $top;
		array_push($stack_array, $element);
		$top++;
	}	
}

function pop(){
	if(!isEmpty()){
		global $top, $stack_array;
		array_splice($stack_array, $top);
		$top--;	
	}else{
		echo "stack is empty\n";
	}
	
}

function peek(){
	global $stack_array, $top;
	echo $stack_array[$top]."\n";
}

function display(){
	global $top, $stack_array;
	for($i=0; $i<=$top; $i++){
		echo $stack_array[$i]."\n";
	}
}

function isEmpty(){
	global $stack_array;
	return count($stack_array) === 0;
}

function isFull(){
	global $stack_array, $max;
	if(count($stack_array) == $max){
		return true;
	}else{
		return false;
	}
}

push(2);
push(5);
push(1);
push(4);
push(7);
pop();
push(9);
display();
peek();




