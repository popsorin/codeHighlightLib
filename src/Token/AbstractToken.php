<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class AbstractToken
 * @package HighlightLib\Token
 */
abstract class AbstractToken implements TokenInterface
{
    /**
     * @var string
     */
    protected $token;

    /**
     * @var int
     */
    protected $offset;

    /**
     * AbstractToken constructor.
     * @param string $token
     * @param int $offset
     */
    public function __construct(string $token, int $offset)
    {
        $this->offset = $offset;
        $this->token = $token;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * returns a string of empty spaces with the length equal to the value in the header
     * @param int $spacesNumber
     * @return string
     */
    public function getSpaces(int $spacesNumber): string
    {
        $spaces = "";
        for($i = 0; $i<=$spacesNumber; $i++){
            $spaces .= $spaces . " ";
        }

        return $spaces;
    }
}