<?php

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;
use HighlightLib\Token\TokenEOL;

/**
 * Class Assembler
 * @package HighlightLib\Assembler
 */
class Assembler implements AssemblerInterface
{
    /**
     * @param array $tokens
     * @return string
     */
    public function assemble(array $tokens): string
    {
        $text = "";
        foreach($tokens as $token) {
            if($token instanceof TokenEOL) {
                $text .= "<br>";
                continue;
            }
           if($token->getOffset() === 0) {
               $previousToken = $token;
               $text = $token->getType($token->getOffset());
               continue;
           }
           //spaceNumber: calculates the number of spaces between the current token and
           //             the previous one
           $spacesNumber = $token->getOffset() - ($previousToken->getOffset() + strlen($previousToken->getToken()));
           $spaces = $token->getSpaces($spacesNumber);
           $text .= $spaces . $token->getType();
           $previousToken = $token;
        }

        return $text;
    }
}