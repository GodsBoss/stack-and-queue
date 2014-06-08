<?php

namespace GodsBoss\Collection;

class Queue
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
			throw new EmptyException();
		} else {
			$this->size--;
			return $this->item;
		}
	}
}
