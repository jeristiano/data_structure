<?php


/**
 * Class Node
 */
class Node
{

    public $prev;
    public $next;
    public $data;

    /**
     * Node constructor.
     * @param $data
     */
    public function __construct ($data)
    {
        $this->data = $data;
        $this->prev = null;
        $this->next = null;
    }
}