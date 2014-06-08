<?php

namespace GodsBoss\Stack;

class Stack
{
	private $size = 0;
	private $item;

	public function size()
	{
		return $this->size;
	}

	public function push($value)
	{
		$this->size++;
		$this->item = $value;
	}

	public function pop()
	{
		if ($this->size === 0) {
			throw new PopFromEmptyStackException();
		}
		$this->size--;
		return $this->item;
	}
}
