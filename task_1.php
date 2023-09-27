<?php

$text = "The quick brown fox jumps over the lazy dog.";

$LcaseText = strtolower($text);

$search = "brown";

$replace = "red";

$ModfText = str_replace($search, $replace, $LcaseText);

echo $ModfText;

?>