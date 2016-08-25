<?php
namespace Psr\SimpleCache;

interface CounterInterface
{
    /**
     * Increment a value atomically in the cache by its step value, which defaults to 1
     *
     * @param string  $key  The cache item key
     * @param int $step The value to increment by, defaulting to 1
     *
     * @return int|bool The new value on success and false on failure
     */
    public function increment($key, $step = 1);

    /**
     * Decrement a value atomically in the cache by its step value, which defaults to 1
     *
     * @param string  $key  The cache item key
     * @param int $step The value to decrement by, defaulting to 1
     *
     * @return int|bool The new value on success and false on failure
     */
    public function decrement($key, $step = 1);
}
