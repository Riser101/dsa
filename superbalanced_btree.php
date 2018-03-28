<?php

class BTreeNode
{
	public $value;
	public $left;
	public $right;

	public function __construct($value){
		$this->value=$value;
	}

	public function insert_left($value){
		$this->left = new BTreeNode($value);
		return $this->left;
	}

	public function insert_right($value){	
		$this->right = new BTreeNode($value);
		return $this->right;
	}
}
$max_level=$current_level=0;
$min_level=100;

function isBalanced($node){
	global $max_level, $min_level, $current_level;
	$current_level +=1; 
	if($node->left){
		isBalanced($node->left);
	}
	if($current_level>$max_level){
		$max_level=$current_level;
	}
	if($current_level<$min_level){
		$min_level=$current_level;
	}
	if($node->right){
		isBalanced($node->right);
	}
	echo $max_level;
	echo $min_level;
	echo $current_level."\n";

	if($max_level-$min_level <= 1){
		return 'true'."\n";
	}
	return 'false'."\n";
}

// unbalanced tree with difference > 1
$a = new BTreeNode(1);
$level_1_left = $a->insert_left(2);
$level_1_right = $a->insert_right(3);
$new_node_obj = new BTreeNode(4);
$level_1_left->left = $new_node_obj;
$new_node_obj->insert_left(5);
// print_r($a);

echo isBalanced($a);