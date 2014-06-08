<?php

namespace GodsBoss\Collection;

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
