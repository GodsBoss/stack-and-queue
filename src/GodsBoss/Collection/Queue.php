<?php

namespace GodsBoss\Collection;

class Queue
{
	public function size()
	{
		return 0;
	}

	public function push($value)
	{
	}

	public function pop()
	{
		throw new EmptyException();
	}
}
