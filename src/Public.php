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

    /**
     * Retrieve the list of orders for a specific market from start time to end time.
     *
     * @param string   $marketName
     * @param int|null $startTime
     * @param int|null $endTime
     * @return mixed
     */
    public function getOrderTicker(string $marketName, int $startTime = null, int $endTime = null)
    {
        return $this->call('public/getmarketsummaries?'.
            http_build_query([
                'market' => $marketName,
                'start'  => $startTime,
                'end'    => $endTime,
            ]));
    }

    /**
     * Retrieve the list of market summaries.
     *
     * @return mixed
     */
    public function getMarketSummaries()
    {
        return $this->call('public/getmarketsummaries');
    }
}
