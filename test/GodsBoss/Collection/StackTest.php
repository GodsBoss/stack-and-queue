<?php

namespace GodsBoss\Collection;

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

	public function testShrinksWhenPoppingItems()
	{
		$stack = new Stack();
		$stack->push(1);
		$stack->push(2);
		$stack->push(3);
		$stack->pop();
		$this->assertEquals(2, $stack->size());
	}

	public function testSignalsErrorOnPoppingIfEmpty()
	{
		$stack = new Stack();
		$this->setExpectedException('GodsBoss\Collection\PopFromEmptyStackException');
		$stack->pop();
	}

	public function testPopsItemsInReverseOrder()
	{
		$first = 'foobar';
		$second = 'Hello, world!';
		$third = 666;
		$stack = new Stack();
		$stack->push($first);
		$stack->push($second);
		$stack->push($third);
		$this->assertEquals($third, $stack->pop());
		$this->assertEquals($second, $stack->pop());
		$this->assertEquals($first, $stack->pop());
	}
}
