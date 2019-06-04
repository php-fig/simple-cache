<?php

namespace Psr\SimpleCache;

/**
 * This cache can be used to avoid conditional cache calls.
 */
class NullCache implements CacheInterface
{
    public function get($key, $default = null)
    {
        // noop
    }

    public function set($key, $value, $ttl = null)
    {
        // noop
    }

    public function delete($key)
    {
        // noop
    }

    public function clear()
    {
        // noop
    }

    public function getMultiple($keys, $default = null)
    {
        // noop
    }

    public function setMultiple($values, $ttl = null)
    {
        // noop
    }

    public function deleteMultiple($keys)
    {
        // noop
    }

    public function has($key)
    {
        // noop
    }
}
