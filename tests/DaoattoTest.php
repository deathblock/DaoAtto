<?php
/**
 * Tests for DaoAtto
 */

use PHPUnit\Framework\TestCase;
use Daoatto\Daoatto;

class DaoattoTest extends TestCase {
    private Daoatto $instance;

    protected function setUp(): void {
        $this->instance = new Daoatto(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Daoatto::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
