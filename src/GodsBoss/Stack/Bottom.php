<?php

namespace GodsBoss\Stack;

class Bottom implements Node
{
	public function getValue()
	{
		throw new PopFromEmptyStackException();
	}

	public function getPreviousNode()
	{
		throw new PopFromEmptyStackException();
	}
}
