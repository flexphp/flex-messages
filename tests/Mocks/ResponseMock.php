<?php

namespace FlexPHP\Messages\Tests\Mocks;

use FlexPHP\Messages\ResponseInterface;

/**
 * Class ResponseMock
 * @package FlexPHP\Messages\Tests\Mocks
 */
class ResponseMock implements ResponseInterface
{
    public function response()
    {
        return [];
    }
}
