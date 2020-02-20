<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenAtom implements TokenInterface
{
    public function getType(): string
    {
        return "atom";
    }
}