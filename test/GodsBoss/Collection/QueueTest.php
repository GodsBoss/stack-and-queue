<?php

namespace GodsBoss\Collection;

class QueueTest extends AbstractCollectionTest
{
	protected function createEmptyCollection()
	{
		return new Queue();
	}

	public function testsPopsItemInOrder()
	{
		$first = 'First!!!11';
		$second = 12345;
		$third = 'xxx';
		$this->push($first, $second, $third);
		$this->assertEquals($first, $this->collection->pop());
		$this->assertEquals($second, $this->collection->pop());
		$this->assertEquals($third, $this->collection->pop());
	}
}
