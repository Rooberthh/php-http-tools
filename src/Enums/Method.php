<?php

namespace Rooberthh\HttpTools\Enums;

enum Method: string
{
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
    case PATCH = 'PATCH';
    case OPTIONS = 'OPTIONS';
    case HEAD = 'HEAD';

    public function __invoke(): string
    {
        return $this->value;
    }
}
