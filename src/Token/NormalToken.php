<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class NormalToken extends AbstractToken
{
    public function getType(): string
    {
        return "<span class=\"normal\"> " . $this->token . " </span>";
    }
}