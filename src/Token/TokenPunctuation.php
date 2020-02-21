<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class TokenPunctuation
 * @package HighlightLib\Token
 */
class TokenPunctuation extends AbstractToken
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return "<span class=\"punctuation\">" . $this->token . " </span>";
    }
}