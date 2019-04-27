<?php

namespace FlexPHP\Messages\Tests\Unit;

use FlexPHP\Messages\MessageInterface;
use FlexPHP\Messages\RequestInterface;
use FlexPHP\Messages\Tests\Mocks\RequestMock;
use FlexPHP\Messages\Tests\TestCase;

class RequestTest extends TestCase
{
    public function testItUseInterface()
    {
        $request = new RequestMock();

        $this->assertInstanceOf(MessageInterface::class, $request);
        $this->assertInstanceOf(RequestInterface::class, $request);
    }
}
