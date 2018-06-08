<?php

namespace Iodev\Keyget;

class key_get_Test extends \PHPUnit\Framework\TestCase
{
    public function testExisting()
    {
        $res = key_get(['foo' => 'bar'], 'foo');
        $this->assertSame('bar', $res);
    }

    public function testExistingByIndex()
    {
        $res = key_get(['foo', 'bar'], 1);
        $this->assertSame('bar', $res);
    }

    public function testNotExisting()
    {
        $res = key_get(['foo' => 'bar'], 'baz');
        $this->assertNull($res);
    }

    public function testNotExistingByIndex()
    {
        $res = key_get(['foo', 'bar'], 2);
        $this->assertNull($res);
    }

    public function testNotExistingDefault()
    {
        $res = key_get(['foo' => 'bar'], 'alice', 'oops');
        $this->assertSame('oops', $res);
    }

    public function testNotExistingDefaultByIndex()
    {
        $res = key_get(['foo', 'bar'], 2, 'oops');
        $this->assertSame('oops', $res);
    }

    public function testNotSetDefault()
    {
        $res = key_get(['foo' => null], 'foo', 'oops');
        $this->assertNotSame('oops', $res);
        $this->assertNull($res);
    }

    public function testEmpty()
    {
        $res = key_get([], 'baz');
        $this->assertNull($res);
    }

    public function testEmptyDefault()
    {
        $res = key_get([], 'baz', 'oops');
        $this->assertSame('oops', $res);
    }
}
