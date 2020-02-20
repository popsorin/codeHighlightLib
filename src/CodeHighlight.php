<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Contracts\TokenInterface;
use HighlightLib\Token\TokenBraket;

class CodeHighlight
{
    private $tokenizer;
    private $clasifier;
    private $assembler;

    public function __construct(TokenizerInterface $tokenizer, ClasifierInterface $clasifier, AssemblerInterface $assembler)
    {
        $this->tokenizer = $tokenizer;
        $this->clasifier = $tokenizer;
        $this->tokenizer = $tokenizer;
    }

    public function highlight(string $string): string
    {
        $string = "random_stuff";
        // use the defined classes/services to perform the highlighting on $string

        return $string;
    }
}
