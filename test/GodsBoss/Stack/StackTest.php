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
		$stack->push($item);
	}

	public function testHasASizeAccordingToCountOfAddedItems()
	{
		$stack = new Stack();
		$stack->push('foo');
		$stack->push('bar');
		$stack->push('baz');
		$this->assertEquals(3, $stack->size());
	}

	public function testGivesLastAddedItemBack()
	{
		$item = 'Hello, world!';
		$stack = new Stack();
		$stack->push($item);
		$this->assertEquals($item, $stack->pop());
	}
}
