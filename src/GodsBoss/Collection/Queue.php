<?php

namespace GodsBoss\Collection;

use GodsBoss\Collection\Queue\End;
use GodsBoss\Collection\Queue\Item;

class Queue
{
	private $size = 0;
	private $first;
	private $end;
	private $secondToLast;

	public function __construct()
	{
		$this->first = new End();
		$this->end = $this->first;
		$this->secondToLast = $this->first;
	}

	public function size()
	{
		return $this->size;
	}

	public function push($value)
	{
		$item = new Item($this->end, $value);
		$this->first = $this->first->getFirstOnPush($item);
		$this->secondToLast->setNextNode($item);
		$this->secondToLast = $item;
		$this->size++;
	}

	public function pop()
	{
		$value = $this->first->getValue();
		$this->first = $this->first->getNextNode();
		if ($this->first == $this->end) {
			$this->secondToLast = $this->end;
		}
		$this->size--;
		return $value;
	}
}
