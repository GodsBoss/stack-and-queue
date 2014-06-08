<?php

namespace GodsBoss\Stack;

use PHPUnit_Framework_TestCase;

class StackTest extends PHPUnit_Framework_TestCase
{
	public function testHasAnInitialSizeOfZero()
	{
		$stack = new Stack();
		$this->assertInternalType('integer', $stack->size());
		$this->assertEquals(0, $stack->size());
	}
}