<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class TokenVariable
 * @package HighlightLib\Token
 */
class TokenVariable extends AbstractToken
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return "<span class=\"variable\">" . $this->token . " </span>";
    }
}