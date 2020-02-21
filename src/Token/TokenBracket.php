<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenBracket extends AbstractToken
{
    public function getType(): string
    {
        return "<span class=\"bracket\">" . $this->token . " </span>";
    }
}