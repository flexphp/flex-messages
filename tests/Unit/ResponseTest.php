<?php

namespace FlexPHP\Messages\Tests\Unit;

use FlexPHP\Messages\MessageInterface;
use FlexPHP\Messages\ResponseInterface;
use FlexPHP\Messages\Tests\Mocks\ResponseMock;
use FlexPHP\Messages\Tests\TestCase;

class ResponseTest extends TestCase
{
    public function testItUseInterface()
    {
        $response = new ResponseMock();

        $this->assertInstanceOf(MessageInterface::class, $response);
        $this->assertInstanceOf(ResponseInterface::class, $response);
    }
}
