<?php

namespace Marek\Toggable\Http\Client;

/**
 * Interface HttpClientInterface
 * @package Marek\Toggable\Http\Client
 */
interface HttpClientInterface
{
    /**
     * Send Http request and returns response
     *
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function send(\Psr\Http\Message\RequestInterface $request);

    /**
     * Sets Authentication Token
     *
     * @param \Marek\Toggable\API\Security\TokenInterface $token
     */
    public function setToken(\Marek\Toggable\API\Security\TokenInterface $token);
}
