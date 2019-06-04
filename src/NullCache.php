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
        return $default;
    }

    public function set($key, $value, $ttl = null)
    {
        // noop
        return true;
    }

    public function delete($key)
    {
        // noop
        return true;
    }

    public function clear()
    {
        // noop
        return true;
    }

    public function getMultiple($keys, $default = null)
    {
        // noop
        $values = [];

        foreach ($keys as $key) {
            $values[$key] = $default;
        }

        return $values;
    }

    public function setMultiple($values, $ttl = null)
    {
        // noop
        return true;
    }

    public function deleteMultiple($keys)
    {
        // noop
        return true;
    }

    public function has($key)
    {
        // noop
        return false;
    }
}
