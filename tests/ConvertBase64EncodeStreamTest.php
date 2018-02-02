<?php

namespace Gounlaf\Tests\Psr7;

use Gounlaf\Psr7streams\ConvertBase64EncodeStream;
use PHPUnit\Framework\TestCase;

class ConvertBase64EncodeStreamTest extends TestCase
{
    public function testBase64EncodeStreams()
    {
        $content = 'test';
        $a       = \GuzzleHttp\Psr7\stream_for($content);
        $b       = new ConvertBase64EncodeStream($a);

        $this->assertEquals('dGVzdA==', (string)$b);
    }
}
