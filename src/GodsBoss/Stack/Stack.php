<?php

namespace GodsBoss\Stack;

class Stack
{
	private $size = 0;
	private $items = array();

	public function size()
	{
		return $this->size;
	}

	public function push($value)
	{
		$this->items[$this->size] = $value;
		$this->size++;
	}

	public function pop()
	{
		if ($this->size === 0) {
			throw new PopFromEmptyStackException();
		}
		$this->size--;
		$item = $this->items[$this->size];
		unset($this->items[$this->size]);
		return $item;
	}
}
