<?php

namespace HighlightLib\Tokenizer;

use HighlightLib\Contracts\TokenizerInterface;

class TokenizerWhiteSpace implements TokenizerInterface
{
    public function tokenize(string $in): array
    {
        return preg_split("/ +/", $in);
    }
}