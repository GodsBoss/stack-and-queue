<?php

namespace GodsBoss\Collection;

use GodsBoss\Collection\Stack\Bottom;
use GodsBoss\Collection\Stack\Item;

class Stack
{
	/**
	* @var integer
	*/
	private $size = 0;

	/**
	* @var \GodsBoss\Collection\Stack\Node
	*/
	private $item;

	public function __construct()
	{
		$this->item = new Bottom();
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
		$this->item = new Item($this->item, $value);
		$this->size++;
	}

	public function pop()
	{
		$value = $this->item->getValue();
		$this->item = $this->item->getPreviousNode();
		$this->size--;
		return $value;
	}
}
