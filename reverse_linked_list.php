<?php
/*
	Write a function for reversing a linked list. ↴ Do it in-place. ↴

	Your function will have one input: the head of the list.

	Your function should return the new head of the list.
*/
class LinkedListNode
{
	private $value;
	private $next;
	public function __construct($value){
		$this->value = $value;
		$this->next = NULL;
	}

	public function set_value($value){
		$this->value = $value;
	}

	public function get_value(){
		return $this->value;
	}

	public function set_next($next){
		$this->next = $next;
	}

	public function get_next(){
		return $this->next;
	}
}

function reverse_linked_list($first_node){	
	$current = $first_node;
	$next_node = null;
	$prev_node = null;
	while($current){
		$next_node = $current->get_next();
		$current->set_next($prev_node);
		$prev_node = $current;
		$current = $next_node;
	}
	return $prev_node;
}
$a = new LinkedListNode(2);
$b = new LinkedListNode(4);
$c = new LinkedListNode(5);
$d = new LinkedListNode(8);

$a->set_next($b);
$b->set_next($c);
$c->set_next($d);
echo "original linked list\n";
print_r($a);
$reversed_list = reverse_linked_list($a);
echo "reversed linked list\n";
print_r($reversed_list);

