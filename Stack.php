<?php


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if ($this->limit < count($this->stack)){
        array_unshift($this->stack,$item);
        }
        else echo "No space left";
    }

    public function pop()
    {
        array_shift($this->stack);
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

}
