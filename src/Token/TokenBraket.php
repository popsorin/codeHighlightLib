<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenBraket implements TokenInterface
{
    public function getType(): string
    {
        return "braket";
    }
}