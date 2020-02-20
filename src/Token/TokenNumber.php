<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenNumber implements TokenInterface
{
    public function getType(): string
    {
        return "<span class=\"number\">";
    }
}