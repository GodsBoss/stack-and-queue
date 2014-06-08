<?php

namespace GodsBoss\Collection\Queue;

class Item implements Node
{
	private $value;
	private $nextNode;

	public function __construct(Node $nextNode, $value)
	{
		$this->nextNode = $nextNode;
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function getNextNode()
	{
		return $this->nextNode;
	}

	public function setNextNode(Node $node)
	{
		$this->nextNode = $node;
	}

	public function getFirstOnPush(Node $candidate)
	{
		return $this;
	}
}
