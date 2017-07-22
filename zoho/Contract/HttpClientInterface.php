<?php

namespace Zoho\Contract;

interface HttpClientInterface
{
    /**
     * Performs POST request.
     *
     * @param string $uri Direction to make the post
     * @param string $postBody Post data
     */
    public function post($uri, $postBody);
}