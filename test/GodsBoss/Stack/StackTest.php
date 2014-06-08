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

	public function testAcceptsItems()
	{
		$item = 5;
		$stack = new Stack();
		$stack->add($item);
	}

	public function testHasASizeAccordingToCountOfAddedItems()
	{
		$stack = new Stack();
		$stack->add('foo');
		$stack->add('bar');
		$stack->add('baz');
		$this->assertEquals(3, $stack->size());
	}
}
