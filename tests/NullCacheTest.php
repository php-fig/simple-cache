<?php

namespace Psr\Tests\SimpleCache;

use PHPUnit\Framework\TestCase;
use Psr\SimpleCache\NullCache;

class NullCacheTest extends TestCase
{
    public function testGet()
    {
        $cache = new NullCache();

        self::assertSame(null, $cache->get('key'));
        self::assertSame('value', $cache->get('key', 'value'));
    }

    public function testSet()
    {
        $cache = new NullCache();

        self::assertTrue($cache->set('key', 'value'));
        self::assertTrue($cache->set('key', 'value', 120));
    }

    public function testDelete()
    {
        $cache = new NullCache();

        self::assertTrue($cache->delete('key'));
    }

    public function testClear()
    {
        $cache = new NullCache();

        self::assertTrue($cache->clear());
    }

    public function testGetMultiple()
    {
        $cache = new NullCache();

        self::assertSame(array('key' => null), $cache->getMultiple(array('key')));
        self::assertSame(array('key' => 'value'), $cache->getMultiple(array('key'), 'value'));
    }

    public function testSetMultiple()
    {
        $cache = new NullCache();

        self::assertTrue($cache->setMultiple(array('key', 'value')));
        self::assertTrue($cache->setMultiple(array('key', 'value'), 120));
    }

    public function testDeleteMultiple()
    {
        $cache = new NullCache();

        self::assertTrue($cache->deleteMultiple(array('key')));
    }

    public function testHas()
    {
        $cache = new NullCache();

        self::assertFalse($cache->has('key'));
    }
}
