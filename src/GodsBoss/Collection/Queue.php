<?php

namespace GodsBoss\Collection;

class Queue
{
	private $size = 0;

	public function size()
	{
		return $this->size;
	}

	public function push($value)
	{
		$this->size++;
	}

	public function pop()
	{
		throw new EmptyException();
	}
}
