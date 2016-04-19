<?php

namespace Marek\Toggable\API\Http\Request;

use Marek\Toggable\API\Toggl\Values\ValueObject;
use RuntimeException;

/**
 * Class Request
 * @package Marek\Toggable\API\Http\Request
 *
 * @property-read string $method
 * @property-read string $uri
 * @property-read array $data
 * @property-read array $headers
 */
class Request extends ValueObject implements RequestInterface
{
    /**
     * HTTP GET method
     */
    const GET = 'GET';

    /**
     * HTTP POST method
     */
    const POST = 'POST';

    /**
     * HTTP PUT method
     */
    const PUT = 'PUT';

    /**
     * HTTP DELETE method
     */
    const DELETE = 'DELETE';

    /**
     * @var array
     */
    public $headers = array(
        'Content-Type' => 'application/json',
    );

    /**
     * @var string
     */
    public $method = Request::GET;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var array
     */
    public $data;

    /**
     * @inheritDoc
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @inheritDoc
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @inheritDoc
     */
    function jsonSerialize()
    {
        throw new RuntimeException('Not implemented');
    }

    /**
     * @inheritDoc
     */
    public function getData()
    {
        return $this->data;
    }
}
