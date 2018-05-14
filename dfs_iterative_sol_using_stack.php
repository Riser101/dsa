<?php
/*
 * Iterative solution using stack
*/

class GraphNode
{
	public $label=null;
	public $neighbours=[];

	public function __construct($label)
	{
		$this->label = $label;
	}
	public function get_label()
	{
		return $this->label;
	}
	public function get_neighbours()
	{
		return $this->neighbours[0];
	}
	public function add_neighbour($neighbour)
	{
		$this->neighbours[$neighbour->get_label()]=$neighbour;
	}
	public function has_neighbour($neighbour)
	{
		return isset($this->neighbours[$neighbour->get_label()]);
	}
}

class dfs
{
	public static function dfs_traversal($vertex)
	{
		$visited = [];
		$stack = new SplStack();
		$stack->push($vertex);
		// print_r($stack);exit();
		$visited[$vertex->get_label()] = 1;
		while($stack->isEmpty() == false){
			$v = $stack->top();
			$stack->pop();
			
			foreach($v->neighbours as $item)
			{
				if(isset($visited[$item->get_label()]) == false)
				{	
					$stack->push($item);
					$visited[$item->get_label()] = 1;
					echo $item->get_label()."\t";
				}
			}
		}
	}
}

$node_a = new GraphNode('a');
$node_b = new GraphNode('b');
$node_c = new GraphNode('c');
$node_d = new GraphNode('d');
$node_e = new GraphNode('e');
$node_k = new GraphNode('k');

$node_a->add_neighbour($node_b);
$node_b->add_neighbour($node_e);
$node_a->add_neighbour($node_c);
$node_c->add_neighbour($node_d);
$node_d->add_neighbour($node_a);
$node_c->add_neighbour($node_k);


// print_r($node_a);exit();
dfs::dfs_traversal($node_a);