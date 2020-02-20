<?php
require "vendor/autoload.php";

use HighlightLib\CodeHighlight;
use HighlightLib\Tokenizer\TokenizerWhiteSpace;


$tokenizer = new TokenizerWhiteSpace();
print_r($tokenizer->tokenize("hello world I love you ,     please 
be my 
friend"));
