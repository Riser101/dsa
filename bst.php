<?php

class Node{
	public $data;	
	public $left;
	public $right;
	public $level;

	public function __construct($data){
		$this->data = $data;
		$this->level = NULL;
		$this->left = NULL;
		$this->right = NULL;
	}
}

class SearchBinaryTree{
	public $root;
	
	public function __construct(){
		$this->root = NULL;
	}

	public function create($data){
		if($this->root === NULL){
			$this->root = new Node($data);
		}else{
			$current = $this->root;
			while(true){
				if($data < $current->data){
					if($current->left){
						$current = $current->left;
					}else{
						$current->left = new Node($data);
						break;
					} 
				}else if($data > $current->data){
						if($current->right){
							$current = $current->right;
						}else{
							$current->right = new Node($data);
							break;
						}
				}else{ 
					break; 
				}
			}//while
		}//outest else
	}//create func

	public function bft(){
		$node = $this->root;
		$node->level = 1;
		$node_tracker = [$node];
		$result = ["\n"];
		$current_level = $node->level;
		while(count($node_tracker) > 0){
			
			$current_node = array_shift($node_tracker);
			array_push($result, $current_node->data);
			
			if($current_node->left){
				$current_node->left->level = $current_level+1;
				array_push($node_tracker, $current_node->left);
			}
			
			if($current_node->right){
				$current_node->right->level = $current_level+1;
				array_push($node_tracker, $current_node->right);
			}
			
			if($current_node->level > $current_level){
				$current_level+=1;
				array_push($result, "\n");
			}	
		}
		return join($result, " ");
	}//bft

	public function inorder($node){
		//<left><root><right>
		if($node->left){
			$this->inorder($node->left);
		}
		print_r($node->data."\t") ;
		if($node->right){
			$this->inorder($node->right);
		}
	}

	public function preorder($node){
		//<root><left><right>
		echo $node->data."\t";
		if($node->left){
			$this->preorder($node->left);
		}
		if($node->right){
			$this->preorder($node->right);
		}
	}

	public function postorder($node){
		//<left><right><root>
		if($node->left){
			$this->postorder($node->left);
		}
		if($node->right){
			$this->postorder($node->right);
		}
		echo $node->data."\t";
	}

	public function traverse($method){
		switch($method){
			case 'inorder':	
			$this->inorder($this->root);
			break;
			case 'preorder':
			$this->preorder($this->root);
			break;
			case 'postorder':
			$this->postorder($this->root);
			break;
		}	
	}
}//class

$arr = [18,16,24,14,17,12,15,24,20,30,19,22];
$obj = new SearchBinaryTree();
for($i=0; $i<count($arr); $i++){
	$obj->create($arr[$i]);
}
echo "\nBFT of input vector [8,3,1,6,4,7,10,14,13] :\n";
print_r($obj->bft()."\n");
echo "\nInorder traversal :\n";
$obj->traverse('inorder');
echo "\nPreorder traversal\n";
$obj->traverse('preorder');
echo "\nPostorder traversal\n";
$obj->traverse('postorder');
echo "\n";
