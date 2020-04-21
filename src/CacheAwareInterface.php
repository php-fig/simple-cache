<?php

namespace Psr\SimpleCache;

/**
 * Describes a cache-aware instance.
 */
interface CacheAwareInterface
{
    /**
     * Sets a cache instance on the object.
     *
     * @param CacheInterface $cache
     *
     * @return void
     */
    public function setCache(CacheInterface $cache);
}
