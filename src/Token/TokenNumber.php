<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenNumber extends AbstractToken
{
    public function getType(): string
    {
        return "<span class=\"number\">" . $this->token . " </span>";
    }
}