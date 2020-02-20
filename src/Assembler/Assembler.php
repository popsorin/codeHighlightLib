<?php

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;
use HighlightLib\Token\TokenEOL;
use HighlightLib\Token\TokenWhiteSpace;

class Assembler implements AssemblerInterface
{

    public function assemble(array $tokens): string
    {
        $text = "";
        foreach($tokens as $key=>$value)
        {
           if($value instanceof TokenEOL)
           {
               $text = $text . "<br>";
           }
           else
           {
               $text = $text . $value->getType() . $key . "</span>" . " ";
           }
        }

        return $text;
    }
}