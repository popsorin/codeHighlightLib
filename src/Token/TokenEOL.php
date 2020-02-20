<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenEOL implements TokenInterface
{
    public function getType(): string
    {
        return "<br>";
    }
}