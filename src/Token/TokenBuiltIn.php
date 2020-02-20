<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenBuiltIn implements TokenInterface
{
    public function getType(): string
    {
        return "builtIn";
    }
}