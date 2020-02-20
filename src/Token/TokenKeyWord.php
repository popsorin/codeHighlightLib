<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenKeyWord implements TokenInterface
{
    public function getType(): string
    {
        return "keyword";
    }
}