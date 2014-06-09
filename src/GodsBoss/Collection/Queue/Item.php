<?php

namespace GodsBoss\Collection\Queue;

class Item implements Node
{
	/**
	* @var mixed
	*/
	private $value;

	/**
	* @var \GodsBoss\Collection\Queue\Node
	*/
	private $nextNode;

	/**
	* @param \GodsBoss\Collection\Queue\Node $nextNode
	* @param mixed
	*/
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

	public function getSecondToLastOnPop(Node $candidate)
	{
		return $candidate;
	}
}
