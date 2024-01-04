<?php

require __DIR__ . "/../vendor/autoload.php";

$htmlChars = new \crocciari\htmlChars\HtmlChars();

$code = $htmlChars->getString("Teste");

var_dump($code);
