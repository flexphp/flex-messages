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
use FlexPHP\Messages\ResponseInterface;
use FlexPHP\Messages\Tests\Mocks\ResponseMock;
use FlexPHP\Messages\Tests\TestCase;

class ResponseTest extends TestCase
{
    public function testItUseInterface(): void
    {
        $response = new ResponseMock();

        $this->assertInstanceOf(MessageInterface::class, $response);
        $this->assertInstanceOf(ResponseInterface::class, $response);
    }
}
