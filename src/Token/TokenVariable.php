<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenVariable extends AbstractToken
{
    public function getType(): string
    {
        return "<span class=\"variable\">" . $this->token . " </span>";
    }
}