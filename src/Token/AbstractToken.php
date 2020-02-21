<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

abstract class AbstractToken implements TokenInterface
{
    protected $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }
}