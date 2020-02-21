<?php

namespace HighlightLib\Clasifier;

use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenInterface;
use HighlightLib\Token\NormalToken;

/**
 * Class Clasifier
 * @package HighlightLib\Clasifier
 */
class Clasifier implements ClasifierInterface
{
    /**
     * @var array
     */
    private $configuration;

    /**
     * Clasifier constructor.
     * @param array $configuration
     */
    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @param string $stringToken
     * @param int $tokenOffset
     * @return TokenInterface
     */
    public function clasify(string $stringToken, int $tokenOffset): TokenInterface
    {
        foreach ($this->configuration as $key => $value){
            if(preg_match($key, $stringToken)) {
                return new $value($stringToken, $tokenOffset);
            }
        }

        return new NormalToken($stringToken, $tokenOffset);
    }
}