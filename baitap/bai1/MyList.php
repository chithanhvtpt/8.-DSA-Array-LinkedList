<?php

class MyList
{
    public $size;
    public $elements;
    public function __construct($size)
    {
        $this->size = $size;
        $this->elements = [];
    }

    public function insert($index, $obj)
    {
        array_splice($this->elements,$index,0,$obj);
    }

    public function get($index)
    {
        return $this->elements[$index];
    }

    public function add($obj)
    {
        array_push($this->elements, $obj);
    }

    public function size()
    {
        return count($this->elements);
    }

    public function remove($index)
    {
        array_splice($this->elements, $index, 1);
    }

    public function clear()
    {

    }

    public function addAll($arr)
    {

    }

    public function sort()
    {
    }

    public function reset()
    {

    }


}