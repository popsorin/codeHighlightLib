<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenWhiteSpace implements TokenInterface
{

    public function getType(): string
    {
        return " ";
    }
}