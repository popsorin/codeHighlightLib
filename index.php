<?php
require "vendor/autoload.php";

use HighlightLib\Assembler\Assembler;
use HighlightLib\Clasifier\Clasifier;
use HighlightLib\CodeHighlight;
use HighlightLib\Tokenizer\TokenizerWhiteSpace;

$configuration =  require dirname(__FILE__) . "/src/Config/Config.php";
$tokenizer = new TokenizerWhiteSpace();
$clasifier = new Clasifier($configuration);
$tokenizedArray = $tokenizer->tokenize("1 \$kali 3 { } \n ( ] , . : ;  static array_flip \n __LINE__ self \n");
$clasifiedArray = array();

foreach ($tokenizedArray as $stringToken)
{
  $clasifiedArray[$stringToken] = $clasifier->clasify($stringToken);
}

$assembler = new Assembler();
print_r($assembler->assemble($clasifiedArray));

echo "<html> <head> <link rel='stylesheet' href='src/Style/Styling.css'></head> <html>";
/*
*/