<?php


class Queue
{
    public $queue;

    public function __construct()
    {
        $this->queue = array();
    }

    public function isEmpty()
    {
        if (count($this->queue) == 0){
            return true;
        }
        return false;
    }

    public function enQueue($item)
    {
        array_push($this->queue,$item);
    }

    public function deQueue()
    {   if (count($this->queue) > 0)
    {
        array_shift($this->queue);
    }
        else echo "You fucking piece of shit";
    }




}