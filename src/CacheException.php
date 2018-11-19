<?php

namespace Psr\SimpleCache;

/**
 * PHP 5 compatibility for \Throwable interface.
 */
if (version_compare(PHP_VERSION, '7.0.0', 'lt')) {
    class_alias('Psr\SimpleCache\ThrowablePhp5', '\Throwable');
}

/**
 * Interface used for all types of exceptions thrown by the implementing library.
 */
interface CacheException extends \Throwable
{
}
