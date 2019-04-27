<?php

namespace FlexPHP\Messages;

/**
 * Interface ResponseInterface
 * @package FlexPHP\Messages
 */
interface ResponseInterface extends MessageInterface
{
    /**
     * Get response from request
     *
     * @return mixed
     */
    public function response();
}
