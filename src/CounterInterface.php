<?php

namespace Psr\SimpleCache;

interface CounterInterface
{
    /**
     * Increment a value atomically in the cache by the given step value and return the new value
     *
     * If the key does not exist, it is initialized to the value of $step
     *
     * @param string $key  The cache item key
     * @param int    $step The value to increment by, defaulting to 1
     *
     * @return int|bool The new value on success and false on failure
     */
    public function increment($key, $step = 1);

    /**
     * Decrement a value atomically in the cache by the given step value and return the new value
     *
     * If the key does not exist, it is initialized to the value of -$step
     *
     * @param string $key  The cache item key
     * @param int    $step The value to decrement by, defaulting to 1
     *
     * @return int|bool The new value on success and false on failure
     */
    public function decrement($key, $step = 1);
}
