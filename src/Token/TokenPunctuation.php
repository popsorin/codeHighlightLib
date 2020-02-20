<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class TokenPunctuation implements TokenInterface
{
    public function getType(): string
    {
        return "<span class=\"punctuation\">";
    }
}