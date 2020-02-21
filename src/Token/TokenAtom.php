<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class TokenAtom
 * @package HighlightLib\Token
 */
class TokenAtom extends AbstractToken
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return  "<span class=\"atom\">" . $this->token . " </span>";;
    }
}