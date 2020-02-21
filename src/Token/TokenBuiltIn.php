<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenBuiltIn extends AbstractToken
{
    public function getType(): string
    {
        return "<span class=\"builtin\">" . $this->token . " </span>";
    }
}