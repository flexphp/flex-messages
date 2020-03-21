<?php declare(strict_types=1);
/*
 * This file is part of FlexPHP.
 *
 * (c) Freddie Gar <freddie.gar@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace FlexPHP\Messages\Tests\Unit;

use FlexPHP\Messages\MessageInterface;
use FlexPHP\Messages\Tests\Mocks\MessageMock;
use FlexPHP\Messages\Tests\TestCase;

class MessageTest extends TestCase
{
    public function testItUseInterface(): void
    {
        $message = new MessageMock();

        $this->assertInstanceOf(MessageInterface::class, $message);
    }
}
