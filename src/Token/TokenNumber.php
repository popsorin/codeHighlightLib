<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class TokenNumber
 * @package HighlightLib\Token
 */
class TokenNumber extends AbstractToken
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return "<span class=\"number\">" . $this->token . " </span>";
    }
}