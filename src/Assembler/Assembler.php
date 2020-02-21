<?php

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;
use HighlightLib\Token\TokenEOL;

class Assembler implements AssemblerInterface
{
    public function assemble(array $tokens): string
    {
        $text = "";
        foreach($tokens as $token) {
           if($token instanceof TokenEOL) {
               $text .= "<br>";
               continue;
           }
           $text .= $token->getType();
        }

        return $text;
    }
}