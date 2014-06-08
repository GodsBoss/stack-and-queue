<?php

namespace GodsBoss\Stack;

class Stack
{
	private $size = 0;

	public function size()
	{
		return $this->size;
	}

	public function add($value)
	{
		$this->size++;
	}
}
