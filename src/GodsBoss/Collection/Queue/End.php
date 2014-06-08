<?php

namespace GodsBoss\Collection\Queue;

use GodsBoss\Collection\EmptyException;

class End implements Node
{
	public function getValue()
	{
		throw new EmptyException();
	}

	public function getNextNode()
	{
		throw new EmptyException();
	}

	public function setNextNode(Node $node)
	{
	}

	public function getFirstOnPush(Node $candidate)
	{
		return $candidate;
	}
}
