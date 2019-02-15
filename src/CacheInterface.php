<?php

namespace Psr\SimpleCache;

interface CacheInterface extends CacheSingleInterface, CacheMultipleInterface, CacheClearInterface, CacheHasInterface
{
    /**
     * Looking for signature of methods? See:
     * - CacheSingleInterface.php for get(), set(), delete()
     * - CacheMultipleInterface.php for getMultiple(), setMultiple(), deleteMultiple()
     * - CacheClearInterface.php for clear()
     * - CacheHasInterface.php for has()
     */
}
