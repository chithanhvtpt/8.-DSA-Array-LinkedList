<?php

class LinkedList
{
    public $count;
    public $firstNode;
    public $lastNode;
    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function add($index,$data)
    {
       $node = new Node($data);

    }

    public function addFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        
        if(is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function addLast($data)
    {
        if (is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        }else {
            $this->addFirst($data);
    }
    }

    public function remove($index)
    {

    }
}
