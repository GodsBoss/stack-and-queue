<?php

namespace GodsBoss\Collection\Stack;

class Item implements Node
{
	/**
	* @var \GodsBoss\Collection\Stack\Node
	*/
	private $previousNode;

	/**
	* @var mixed
	*/
	private $value;

	/**
	* @param \GodsBoss\Collection\Stack\Node $previousNode
	* @param mixed $value
	*/
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
