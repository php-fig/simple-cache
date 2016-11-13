<?php

namespace Psr\SimpleCache;

interface CacheInterface
{
    /**
     * Fetch a value from the cache.
     *
     * @param string $key     The unique key of this item in the cache
     * @param mixed  $default Default value to return if the key does not exist
     *
     * @return mixed The value of the item from the cache, or $default in case of cache miss
     */
    public function get($key, $default = null);

    /**
     * Persist data in the cache, uniquely referenced by a key with an optional expiration TTL time.
     *
     * @param string                $key   The key of the item to store
     * @param mixed                 $value The value of the item to store
     * @param null|int|DateInterval $ttl   Optional. The TTL value of this item. If no value is sent and
     *                                     the driver supports TTL then the library may set a default value
     *                                     for it or let the driver take care of that.
     *
     * @return bool True on success and false on failure
     */
    public function set($key, $value, $ttl = null);

    /**
     * Delete an item from the cache by its unique key
     *
     * @param string $key The unique cache key of the item to delete
     *
     * @return void
     */
    public function delete($key);

    /**
     * Wipe clean the entire cache's keys
     *
     * @return void
     */
    public function clear();

    /**
     * Obtain multiple cache items by their unique keys
     *
     * @param array|Traversable $keys A list of keys that can obtained in a single operation.
     *
     * @return array An array of key => value pairs. Cache keys that do not exist or are stale will have a value of null.
     */
    public function getMultiple($keys);

    /**
     * Persisting a set of key => value pairs in the cache, with an optional TTL.
     *
     * @param array|Traversable     $items An array of key => value pairs for a multiple-set operation.
     * @param null|int|DateInterval $ttl   Optional. The TTL value of this item. If no value is sent and
     *                                     the driver supports TTL then the library may set a default value
     *                                     for it or let the driver take care of that.
     *
     * @return bool True on success and false on failure
     */
    public function setMultiple($items, $ttl = null);

    /**
     * Delete multiple cache items in a single operation
     *
     * @param array|Traversable $keys The array of string-based keys to be deleted
     *
     * @return void
     */
    public function deleteMultiple($keys);

    /**
     * Identify if an item is in the cache.
     * NOTE: It is recommended that exists() is only to be used for cache warming type purposes
     * and not to be used within your live applications operations for get/set, as this method
     * is subject to a race condition where your exists() will return true and immediately after,
     * another script can remove it making the state of your app out of date.
     *
     * @param string $key The cache item key
     *
     * @return bool
     */
    public function exists($key);
}
