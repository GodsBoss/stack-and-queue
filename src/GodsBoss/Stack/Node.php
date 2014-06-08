<?php

namespace GodsBoss\Stack;

interface Node
{
	/**
	* Returns the value for this node.
	*
	* @return mixed
	* @throws \GodsBoss\Stack\PopFromEmptyStackException
	*/
	public function getValue();

	/**
	* Returns the previous node.
	*
	* @return Node
	* @throws \GodsBoss\Stack\PopFromEmptyStackException
	*/
	public function getPreviousNode();
}
