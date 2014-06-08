<?php

namespace GodsBoss\Collection;

use PHPUnit_Framework_TestCase;

class QueueTest extends PHPUnit_Framework_TestCase
{
	public function testHasAnInitialSizeOfZero()
	{
		$queue = new Queue();
		$this->assertInternalType('integer', $queue->size());
		$this->assertEquals(0, $queue->size());
	}
}
