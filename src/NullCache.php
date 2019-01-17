<?php

namespace Psr\SimpleCache;

class NullCache implements CacheInterface
{
    /**
     * {@inheritDoc}
     */
    public function get($key, $default = null)
    {
        return $default;
    }

    /**
     * {@inheritDoc}
     */
    public function set($key, $value, $ttl = null)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function delete($key)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getMultiple($keys, $default = null)
    {
        $values = array();
        foreach ($keys as $key) {
            $values[$key] = $default;
        }

        return $values;
    }

    /**
     * {@inheritDoc}
     */
    public function setMultiple($values, $ttl = null)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function deleteMultiple($keys)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function has($key)
    {
        return false;
    }
}
