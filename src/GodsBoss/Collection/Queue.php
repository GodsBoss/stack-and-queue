<?php

namespace GodsBoss\Collection;

class Queue
{
	private $size = 0;
	private $index = 0;
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
			throw new EmptyException();
		} else {
			$item = $this->items[$this->index];
			unset($this->items[$this->index]);
			$this->index++;
			$this->size--;
			return $item;
		}
	}
}
