<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenAtom extends AbstractToken
{
    public function getType(): string
    {
        return "<span class=\"atom\">" . $this->token . " </span>";;
    }
}