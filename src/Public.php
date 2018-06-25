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

    /**
     * Retrieve the list of available currencies.
     *
     * @return mixed
     */
    public function getCurrencies()
    {
        return $this->call('public/getcurrencies');
    }
}
