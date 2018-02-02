<?php

namespace Gounlaf\Psr7streams;

use GuzzleHttp\Psr7\Stream;
use GuzzleHttp\Psr7\StreamDecoratorTrait;
use GuzzleHttp\Psr7\StreamWrapper;
use Psr\Http\Message\StreamInterface;

class ConvertBase64DecodeStream implements StreamInterface
{
    use StreamDecoratorTrait;

    public function __construct(StreamInterface $stream)
    {
        $resource = StreamWrapper::getResource($stream);
        stream_filter_append($resource, 'convert.base64-decode');
        $this->stream = new Stream($resource);
    }
}
