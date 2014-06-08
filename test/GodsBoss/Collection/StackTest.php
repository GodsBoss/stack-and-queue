<?php

namespace GodsBoss\Collection;

class StackTest extends AbstractCollectionTest
{
	protected function createEmptyCollection()
	{
		return new Stack();
	}

	public function testGivesLastAddedItemBack()
	{
		$item = 'Hello, world!';
		$this->push($item);
		$this->assertEquals($item, $this->collection->pop());
	}

	public function testPopsItemsInReverseOrder()
	{
		$first = 'foobar';
		$second = 'Hello, world!';
		$third = 666;
		$this->push($first, $second, $third);
		$this->assertEquals($third, $this->collection->pop());
		$this->assertEquals($second, $this->collection->pop());
		$this->assertEquals($first, $this->collection->pop());
	}
}
