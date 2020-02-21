<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenKeyWord extends AbstractToken
{
    public function getType(): string
    {
        return "<span class=\"keyword\">" . $this->token . " </span>";
    }
}