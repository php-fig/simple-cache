<?php

namespace Psr\SimpleCache;

/**
 * This cache can be used to avoid conditional cache calls.
 */
class NullCache implements CacheInterface
{
    /**
     * {inheritdoc}
     */
    public function get($key, $default = NULL) {
        return $default;
    }

    /**
     * {inheritdoc}
     */
    public function getMultiple($keys, $default = NULL) {
        return $default;
    }

    /**
     * {inheritdoc}
     */
    public function set($key, $value, $ttl = NULL) {
        return TRUE;
    }

    /**
     * {inheritdoc}
     */
    public function delete($key) {
        return TRUE;
    }

    /**
     * {inheritdoc}
     */
    public function clear() {
        return TRUE;
    }

    /**
     * {inheritdoc}
     */
    public function setMultiple($values, $ttl = NULL) {
        return TRUE;
    }

    /**
     * {inheritdoc}
     */
    public function deleteMultiple($keys) {
        return TRUE;
    }

    /**
     * {inheritdoc}
     */
    public function has($key) {
        return FALSE;
    }
}
