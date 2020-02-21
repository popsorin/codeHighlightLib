<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class TokenBuiltIn
 * @package HighlightLib\Token
 */
class TokenBuiltIn extends AbstractToken
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return "<span class=\"builtin\">" . $this->token . " </span>";
    }
}