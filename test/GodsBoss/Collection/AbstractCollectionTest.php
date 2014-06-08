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

	public function testHasAnInitialSizeOfZero()
	{
		$this->assertInternalType('integer', $this->collection->size());
		$this->assertEquals(0, $this->collection->size());
	}
}