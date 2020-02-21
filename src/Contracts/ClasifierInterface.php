<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

/**
 * Interface ClasifierInterface
 * @package HighlightLib\Contracts
 */
interface ClasifierInterface {
    /**
     * @param string $stringToken
     * @param int $tokenOffset
     * @return TokenInterface
     */
    public function clasify(string $stringToken, int $tokenOffset): TokenInterface;
}
