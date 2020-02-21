<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenPunctuation extends AbstractToken
{
    public function getType(): string
    {
        return "<span class=\"punctuation\">" . $this->token . " </span>";
    }
}