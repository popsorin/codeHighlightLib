<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class TokenEOL
 * @package HighlightLib\Token
 */
class TokenEOL implements TokenInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return PHP_EOL;
    }
}