<?php

namespace FlexPHP\Messages\Tests\Unit;

use FlexPHP\Messages\MessageInterface;
use FlexPHP\Messages\Tests\Mocks\MessageMock;
use FlexPHP\Messages\Tests\TestCase;

class MessageTest extends TestCase
{
    public function testItUseInterface()
    {
        $message = new MessageMock();

        $this->assertInstanceOf(MessageInterface::class, $message);
    }
}
