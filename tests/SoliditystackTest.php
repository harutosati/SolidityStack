<?php
/**
 * Tests for SolidityStack
 */

use PHPUnit\Framework\TestCase;
use Soliditystack\Soliditystack;

class SoliditystackTest extends TestCase {
    private Soliditystack $instance;

    protected function setUp(): void {
        $this->instance = new Soliditystack(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditystack::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
