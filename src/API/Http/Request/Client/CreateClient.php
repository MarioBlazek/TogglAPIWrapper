<?php

namespace Marek\Toggable\API\Http\Request\Client;

use Marek\Toggable\API\Http\Request\Request;

/**
 * Class CreateClient
 * @package Marek\Toggable\API\Http\Request\Client
 */
class CreateClient extends Request
{
    /**
     * @var string
     */
    protected $uri = 'clients';

    /**
     * @var string
     */
    protected $method = Request::POST;

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return array('client' => $this->data);
    }
}
