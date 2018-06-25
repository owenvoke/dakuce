<?php

namespace pxgamer\Dakuce;

/**
 * Class Basic
 */
class Basic
{
    use Traits\ApiCallable;

    /**
     * Retrieve the list of available markets.
     *
     * @return mixed
     */
    public function getMarkets()
    {
        return $this->call('public/getmarkets');
    }
}
