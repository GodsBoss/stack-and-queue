<?php

namespace GodsBoss\Stack;

class Item implements Node
{
	private $previousNode;
	private $value;

	public function __construct(Node $previousNode, $value)
	{
		$this->previousNode = $previousNode;
		$this->value = $value;
	}

	public function getPreviousNode()
	{
		return $this->previousNode;
	}

	public function getValue()
	{
		return $this->value;
	}
}
