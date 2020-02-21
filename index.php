<?php
require "vendor/autoload.php";

use HighlightLib\Assembler\Assembler;
use HighlightLib\Clasifier\Clasifier;
use HighlightLib\CodeHighlight;
use HighlightLib\Tokenizer\TokenizerWhiteSpace;

$configuration = require dirname(__FILE__) . "/Config/Config.php";
$tokenizer = new TokenizerWhiteSpace();
$clasifier = new Clasifier($configuration);
$arrayForTokenizing = "for ( \$i = 1 ; \$i <= \$n ; \$i ++ ) \n { echo \"hi\" }  true array_push abstract and false";
$assembler = new Assembler();

$codeHighlight = new CodeHighlight($tokenizer, $clasifier, $assembler);

print_r($codeHighlight->highlight($arrayForTokenizing));

echo "<html> <head> <link rel='stylesheet' href='src/Style/Styling.css'></head> <html>";
/*
*/