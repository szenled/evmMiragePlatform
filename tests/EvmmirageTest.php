<?php
/**
 * Tests for evmMirage
 */

use PHPUnit\Framework\TestCase;
use Evmmirage\Evmmirage;

class EvmmirageTest extends TestCase {
    private Evmmirage $instance;

    protected function setUp(): void {
        $this->instance = new Evmmirage(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Evmmirage::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
