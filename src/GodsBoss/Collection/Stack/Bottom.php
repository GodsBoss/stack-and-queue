<?php

namespace GodsBoss\Collection\Stack;

use GodsBoss\Collection\EmptyException;

class Bottom implements Node
{
	public function getValue()
	{
		throw new EmptyException();
	}

	public function getPreviousNode()
	{
		throw new EmptyException();
	}
}
