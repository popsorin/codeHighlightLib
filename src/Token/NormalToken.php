<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class NormalToken
 * @package HighlightLib\Token
 */
class NormalToken extends AbstractToken
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return "<span class=\"normal\"> "  . $this->token . "</span>";
    }
}