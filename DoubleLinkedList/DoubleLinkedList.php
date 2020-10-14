<?php

require_once './Node.php';

/**
 * Class DoubleLinkedList
 */
class DoubleLinkedList
{
    public $head = null;
    public $tail = null;
    public $length = 0;


    /**
     * 头部添加数据
     * @param $data
     */
    public function unshift ($data)
    {
        $node = new Node($data);

        //如果链表为空,就将当前头部指针设置为头部节点
        if ($this->isEmpty()) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            //新节点的尾部节点指向当前头部指针所对应的节点(新节点的下一个节点是当前节点)
            $node->next = $this->head;

            //当前节点的头部指针,指向新的节点
            $this->head->prev = $node;
            //头部指针指向新的节点
            $this->head = $node;
        }
        $this->length += 1;


    }

    /**
     * 链表是否为空
     * @return bool
     */
    public function isEmpty ()
    {
        return is_null($this->head);
    }

    /**
     * 头部弹出数据
     */
    public function shift ()
    {
        if ($this->isEmpty()) {
            return false;
        }
        //当前头部指针的节点
        $node = $this->head;

        //下一个节点前驱指针为空
        if (!is_null($node->next)) {
            $node->next->prev = null;
        }

        //头部指针指向下一个节点
        $this->head = $node->next;
        $this->length -= 1;
        return $node->data;
    }

    /**
     * @return int
     */
    public function getLength ()
    {
        return $this->length;
    }


    public function push ($data)
    {
        $node = new Node($data);

        //如果链表为空,就将当前头部指针设置为尾部节点
        if ($this->isEmpty()) {
            $this->tail = $node;
            $this->head = $node;
        } else {
            //新节点的尾部节点指向当前尾部指针所对应的节点(新节点的下一个节点是当前节点)
            $node->prev = $this->tail;

            //当前节点的尾部指针,指向新的节点
            $this->tail->next = $node;
            //尾部指针指向新的节点
            $this->tail = $node;
        }
        $this->length += 1;
    }

    /**
     */
    public function pop ()
    {
        if ($this->isEmpty()) {
            return false;
        }
        //当前尾部指针的节点
        $node = $this->tail;

        //上一个节点后驱指针为空
        if (!is_null($node->prev)) {
            $node->prev->next = null;
        }

        //尾部指针指向上一个节点
        $this->tail = $node->prev;
        $this->length -= 1;
        return $node->data;

    }


}