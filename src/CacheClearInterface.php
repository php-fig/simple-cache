<?php

namespace Psr\SimpleCache;

interface CacheClearInterface
{
    /**
     * Wipes clean the entire cache's keys.
     *
     * @return bool True on success and false on failure.
     */
    public function clear();
}
