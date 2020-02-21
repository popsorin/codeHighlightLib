<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

/**
 * Interface TokenInterface
 * @package HighlightLib\Contracts
 */
interface TokenInterface{
    /**
     * returns the type of the token between span tags
     * @return string
     */
    public function getType(): string;
}