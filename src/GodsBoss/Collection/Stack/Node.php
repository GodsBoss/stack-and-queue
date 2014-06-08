<?php

namespace GodsBoss\Collection\Stack;

interface Node
{
	/**
	* Returns the value for this node.
	*
	* @return mixed
	* @throws \GodsBoss\Collection\EmptyException
	*/
	public function getValue();

	/**
	* Returns the previous node.
	*
	* @return Node
	* @throws \GodsBoss\Collection\EmptyException
	*/
	public function getPreviousNode();
}
