<?php
require "vendor/autoload.php";

use HighlightLib\Clasifier\Clasifier;
use HighlightLib\CodeHighlight;
use HighlightLib\Tokenizer\TokenizerWhiteSpace;

$configuration =  require dirname(__FILE__) . "/src/Config/Config.php";
$tokenizer = new TokenizerWhiteSpace();
$clasifier = new Clasifier($configuration);
$tokenizedArray = $tokenizer->tokenize("1 \$kali 3 { } ( ] , . : ; static array_flip __LINE__ self \n");

foreach ($tokenizedArray as $stringToken)
{
  echo $clasifier->clasify($stringToken)->getType() . "<br>";
}
/*
*/