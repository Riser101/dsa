<?php
class Graph 
{
    protected $_len = 0;
    protected $_g = array();
    protected $_visited = array();
 
    public function __construct()
    {
        $this->_g = array(
            array(0, 1, 1, 0, 0, 0),
            array(1, 0, 0, 1, 0, 0),
            array(1, 0, 0, 1, 1, 1),
            array(0, 1, 1, 0, 1, 0),
            array(0, 0, 1, 1, 0, 1),
            array(0, 0, 1, 0, 1, 0),
        );
 
        $this->_len = count($this->_g);
 
        $this->_initVisited();
    }
 
    protected function _initVisited()
    {
        for ($i = 0; $i < $this->_len; $i++) {
            $this->_visited[$i] = 0;
        }
    }
 
    public function depthFirst($vertex)
    {
    	$this->_visited[$vertex] = 1;
    	echo $vertex . "\n";
    	// echo "\n"."$$$$$$$$$".count($this->$this->_g)."\n";
    	// echo "#############\n";
    	// print_r($this->_len);
    	// echo "#############\n";
    	for($i=0; $i<$this->_len; $i++)
    	{
    		// echo "hello\n";
    		if($this->_g[$vertex][$i] == 1 && $this->_visited[$i] != 1)
    	 	{
    			$this->depthFirst($i);
    		}
    	}
    }
}
 
$g = new Graph();
// 2 0 1 3 4 5
$g->depthFirst(2);