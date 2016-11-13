<?php

namespace Psr\SimpleCache;

use Psr\Cache\CacheItemPoolInterface;

class Psr6Bridge implements CacheInterface
{
    private $pool;

    public function __construct(CacheItemPoolInterface $pool)
    {
        $this->pool = $pool;
    }

    public function get($key, $default = null)
    {
        $item = $this->pool->getItem($key);
        if ($item->isHit()) {
            return $item->get();
        }

        return $default;
    }

    public function set($key, $value, $ttl = null)
    {
        $item = $this->pool->getItem($key)->set($value);
        if (null !== $ttl) {
            $item->expiresAfter($ttl);
        }

        return $this->pool->save($item);
    }

    public function delete($key)
    {
        $this->pool->deleteItem($key);
    }

    public function clear()
    {
        $this->pool->clear();
    }

    public function getMultiple($keys)
    {
        $result = array();
        foreach ($this->pool->getItems($keys) as $key => $item) {
            $result[$key] = $item->isHit() ? $item->get() : null;
        }

        return $result;
    }

    public function setMultiple($items, $ttl = null)
    {
        foreach ($items as $key => $value) {
            $item = $this->pool->getItem($key)->set($value);
            if (null !== $ttl) {
                $item->expiresAfter($ttl);
            }
            if (!$this->pool->saveDeferred($item)) {
                return false;
            }
        }

        return $this->pool->commit();
    }

    public function deleteMultiple($keys)
    {
        $this->pool->deleteItems($keys);
    }

    public function exists($key)
    {
        return $this->pool->getItem($key)->isHit();
    }
}
