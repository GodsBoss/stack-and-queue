<?php

namespace GodsBoss\Collection\Queue;

interface Node
{
	/**
	* Returns the value stored by this node.
	*
	* @return mixed
	*/
	public function getValue();

	/**
	* Returns the next node.
	*
	* @return \GodsBoss\Collection\Queue\Node
	*/
	public function getNextNode();

	/**
	* Set the next node to be another node.
	*
	* @param \GodsBoss\Collection\Queue\Node
	*/
	public function setNextNode(Node $node);

	public function getFirstOnPush(Node $candidate);
}
