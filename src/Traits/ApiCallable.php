<?php

namespace pxgamer\Dakuce\Traits;

use GuzzleHttp\Client;
use pxgamer\Dakuce\Dakuce;

/**
 * Trait ApiCallable
 */
trait ApiCallable
{
    /**
     * @var Client
     */
    protected $client;
    /**
     * @var string
     */
    protected $apiKey;

    /**
     * ApiCallable constructor.
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => Dakuce::API_BASE_URI,
        ]);
    }

    /**
     * @param string $endpoint
     *
     * @return mixed
     */
    public function call(string $endpoint)
    {
        return \GuzzleHttp\json_decode(
            $this->client
                ->get($endpoint)
                ->getBody()
                ->getContents()
        );
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }
}
