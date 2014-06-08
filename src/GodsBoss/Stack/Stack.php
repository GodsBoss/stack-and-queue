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
		$this->size--;
		return $this->item;
	}
}
