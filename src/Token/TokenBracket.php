<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class TokenBracket
 * @package HighlightLib\Token
 */
class TokenBracket extends AbstractToken
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return "<span class=\"bracket\">" . $this->token . " </span>";
    }
}