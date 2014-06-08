<?php

namespace GodsBoss\Collection;

class StackTest extends AbstractCollectionTest
{
	protected function createEmptyCollection()
	{
		return new Stack();
	}

	public function testAcceptsItems()
	{
		$item = 5;
		$this->collection->push($item);
	}

	public function testHasASizeAccordingToCountOfAddedItems()
	{
		$this->collection->push('foo');
		$this->collection->push('bar');
		$this->collection->push('baz');
		$this->assertEquals(3, $this->collection->size());
	}

	public function testGivesLastAddedItemBack()
	{
		$item = 'Hello, world!';
		$this->collection->push($item);
		$this->assertEquals($item, $this->collection->pop());
	}

	public function testShrinksWhenPoppingItems()
	{
		$this->collection->push(1);
		$this->collection->push(2);
		$this->collection->push(3);
		$this->collection->pop();
		$this->assertEquals(2, $this->collection->size());
	}

	public function testSignalsErrorOnPoppingIfEmpty()
	{
		$this->setExpectedException('GodsBoss\Collection\PopFromEmptyStackException');
		$this->collection->pop();
	}

	public function testPopsItemsInReverseOrder()
	{
		$first = 'foobar';
		$second = 'Hello, world!';
		$third = 666;
		$this->collection->push($first);
		$this->collection->push($second);
		$this->collection->push($third);
		$this->assertEquals($third, $this->collection->pop());
		$this->assertEquals($second, $this->collection->pop());
		$this->assertEquals($first, $this->collection->pop());
	}
}
