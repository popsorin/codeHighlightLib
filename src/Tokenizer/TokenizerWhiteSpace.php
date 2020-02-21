<?php

namespace HighlightLib\Tokenizer;

use HighlightLib\Contracts\TokenizerInterface;

/**
 * Class TokenizerWhiteSpace
 * @package HighlightLib\Tokenizer
 */
class TokenizerWhiteSpace implements TokenizerInterface
{
    /**
     * @param string $in
     * @return array
     */
    public function tokenize(string $in): array{
        return preg_split("/ +/", $in, -1, PREG_SPLIT_OFFSET_CAPTURE);
    }
}
