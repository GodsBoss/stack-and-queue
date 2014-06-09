<?php

namespace GodsBoss\Collection;

use GodsBoss\Collection\Queue\End;
use GodsBoss\Collection\Queue\Item;

class Queue
{
	/**
	* @var integer
	*/
	private $size = 0;

	/**
	* @var GodsBoss\Collection\Queue\Node
	*/
	private $first;

	/**
	* @var GodsBoss\Collection\Queue\Node
	*/
	private $end;

	/**
	* @var GodsBoss\Collection\Queue\Node
	*/
	private $secondToLast;

	public function __construct()
	{
		$this->first = new End();
		$this->end = $this->first;
		$this->secondToLast = $this->first;
	}

	public function size()
	{
		return $this->size;
	}

	public function isEmpty()
	{
		return $this->size === 0;
	}

	public function push($value)
	{
		$item = new Item($this->end, $value);
		$this->first = $this->first->getFirstOnPush($item);
		$this->secondToLast->setNextNode($item);
		$this->secondToLast = $item;
		$this->size++;
	}

	public function pop()
	{
		$value = $this->first->getValue();
		$this->first = $this->first->getNextNode();
		$this->secondToLast = $this->first->getSecondToLastOnPop($this->secondToLast);
		$this->size--;
		return $value;
	}
}
