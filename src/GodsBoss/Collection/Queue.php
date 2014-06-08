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
		if ($this->size === 0) {
			throw new EmptyException();
		} else {
			$this->size--;
		}
	}
}
