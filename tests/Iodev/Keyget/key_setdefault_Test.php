<?php

namespace Iodev\Keyget;

class key_setdefault_Test extends \PHPUnit\Framework\TestCase
{
    public function testReturnsIncoming()
    {
        $arr = ['foo' => 'bar'];
        $res = key_setdefault($arr, 'foo');
        $this->assertSame($arr, $res);
    }

    public function testExisting()
    {
        $arr = ['foo' => 'bar'];
        key_setdefault($arr, 'foo', 'test');
        $this->assertSame('bar', $arr['foo']);
    }

    public function testExistingIndex()
    {
        $arr = ['foo', 'bar'];
        key_setdefault($arr, 0, 'test');
        $this->assertSame('foo', $arr[0]);
    }

    public function testNotExisting()
    {
        $arr = ['foo' => 'bar'];
        key_setdefault($arr, 'alice', 'bob');
        $this->assertSame('bob', $arr['alice']);
    }

    public function testNotExistingIndex()
    {
        $arr = ['foo', 'bar'];
        key_setdefault($arr, 2, 'bob');
        $this->assertSame('bob', $arr[2]);
    }

    public function testNotSet()
    {
        $arr = ['foo' => 'bar', 'alice' => null];
        key_setdefault($arr, 'alice', 'bob');
        $this->assertSame(null, $arr['alice']);
    }
}
