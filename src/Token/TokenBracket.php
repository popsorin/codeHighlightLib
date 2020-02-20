<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenBracket implements TokenInterface
{
    public function getType(): string
    {
        return "<span class=\"bracket\">";
    }
}