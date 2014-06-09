<?php

namespace GodsBoss\Collection\Queue;

interface Node
{
	/**
	* Returns the value stored by this node.
	*
	* @return mixed
	* @throws \GodsBoss\Collection\EmptyException
	*/
	public function getValue();

	/**
	* Returns the next node.
	*
	* @return \GodsBoss\Collection\Queue\Node
	* @return \GodsBoss\Collection\EmptyException
	*/
	public function getNextNode();

	/**
	* Set the next node to be another node.
	*
	* @param \GodsBoss\Collection\Queue\Node $node
	*/
	public function setNextNode(Node $node);

	/**
	* Decide for a new first node on pushing a node.
	*
	* @param \GodsBoss\Collection\Queue\Node $candidate
	* @return \GodsBoss\Collection\Queue\Node
	*/
	public function getFirstOnPush(Node $candidate);

	/**
	* Decide for a new second to last node on popping a node.
	*
	* @param \GodsBoss\Collection\Queue\Node $candidate
	* @return \GodsBoss\Collection\Queue\Node
	*/
	public function getSecondToLastOnPop(Node $candidate);
}
