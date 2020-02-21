<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class TokenKeyWord
 * @package HighlightLib\Token
 */
class TokenKeyWord extends AbstractToken
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return "<span class=\"keyword\">" . $this->token . " </span>";
    }
}