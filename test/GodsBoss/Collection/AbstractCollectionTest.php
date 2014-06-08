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

	public function testAcceptsItems()
	{
		$item = 5;
		$this->push($item);
	}

	public function testSignalsErrorOnPoppingIfEmpty()
	{
		$this->setExpectedException('GodsBoss\Collection\EmptyException');
		$this->collection->pop();
	}

	public function testSignalsErrorIfPoppedItemCountExceedsPushedItemCount()
	{
		$this->push('foo', 'baz');
		$this->setExpectedException('GodsBoss\Collection\EmptyException');
		$this->collection->pop();
		$this->collection->pop();
		$this->collection->pop();
	}

	public function testHasStillASizeOfZeroAfterSignalingPoppingIfEmptyError()
	{
		try {
			$this->collection->pop();
		} catch (EmptyException $exception) {
		}
		$this->assertEquals(0, $this->collection->size());
	}

	public function testHasASizeAccordingToCountOfAddedItems()
	{
		$this->push('foo', 'bar', 'baz');
		$this->assertEquals(3, $this->collection->size());
	}

	public function testShrinksWhenPoppingItems()
	{
		$this->push(1, 2, 3);
		$this->collection->pop();
		$this->assertEquals(2, $this->collection->size());
	}

	public function testPopsSingleItem()
	{
		$item = 'Hello, world!';
		$this->push($item);
		$this->assertEquals($item, $this->collection->pop());
	}

	public function testExposesIfItIsEmpty()
	{
		$this->assertTrue($this->collection->isEmpty());
	}

	public function testExposesIfItIsNotEmpty()
	{
		$this->push('foobar');
		$this->assertFalse($this->collection->isEmpty());
	}
}