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

	public function add($value)
	{
		$this->size++;
		$this->item = $value;
	}

	public function pop()
	{
		return $this->item;
	}
}
