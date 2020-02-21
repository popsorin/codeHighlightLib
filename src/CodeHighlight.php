<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Contracts\AssemblerInterface;
use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenizerInterface;

class CodeHighlight
{
    private $tokenizer;
    private $clasifier;
    private $assembler;

    public function __construct(TokenizerInterface $tokenizer, ClasifierInterface $clasifier, AssemblerInterface $assembler)
    {
        $this->tokenizer = $tokenizer;
        $this->clasifier = $clasifier;
        $this->assembler = $assembler;
    }

    public function highlight(string $string): string
    {
        $tokenizedArray = $this->tokenizer->tokenize($string);
        $clasifiedArray = array();

        foreach ($tokenizedArray as $stringToken) {
            $clasifiedToken = $this->clasifier->clasify($stringToken);
            array_push($clasifiedArray, $clasifiedToken);
        }

        $assembled = $this->assembler->assemble($clasifiedArray);
        return $assembled . "   <html> <head> <link rel='stylesheet' href='src/Style/Styling.css'></head> <html>";
    }
}
