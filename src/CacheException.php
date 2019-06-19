<?php

namespace Psr\SimpleCache;

/**
 * PHP 5 compatibility for \Throwable interface.
 */
if (PHP_VERSION_ID < 70000 && !class_exists('\Throwable')) {
    class_alias('Psr\SimpleCache\ThrowablePhp5', '\Throwable');
}

/**
 * Interface used for all types of exceptions thrown by the implementing library.
 */
interface CacheException extends \Throwable
{
}
