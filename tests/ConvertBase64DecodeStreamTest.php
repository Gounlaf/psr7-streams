<?php

namespace Gounlaf\Tests\Psr7;

use Gounlaf\Psr7streams\ConvertBase64DecodeStream;
use PHPUnit\Framework\TestCase;

class ConvertBase64DecodeStreamTest extends TestCase
{
    public function testBase64DecodeStreams()
    {
        $content = 'dGVzdA==';
        $a       = \GuzzleHttp\Psr7\stream_for($content);
        $b       = new ConvertBase64DecodeStream($a);

        $this->assertEquals('test', (string)$b->read($b->getSize()));
    }
}
