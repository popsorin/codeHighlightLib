<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenVariable implements TokenInterface
{
    public function getType(): string
    {
        return "<span class=\"variable\">";
    }
}