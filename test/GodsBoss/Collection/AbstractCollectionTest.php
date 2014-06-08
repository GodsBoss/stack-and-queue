<?php

namespace GodsBoss\Collection;

use PHPUnit_Framework_TestCase;

abstract class AbstractCollectionTest extends PHPUnit_Framework_TestCase
{
	protected $collection;

	protected function setUp()
	{
		$this->collection = $this->createEmptyCollection();
	}

	abstract protected function createEmptyCollection();

	protected function push()
	{
		$values = func_get_args();
		foreach ($values as $value) {
			$this->collection->push($value);
		}
	}

	public function testHasAnInitialSizeOfZero()
	{
		$this->assertInternalType('integer', $this->collection->size());
		$this->assertEquals(0, $this->collection->size());
	}
}