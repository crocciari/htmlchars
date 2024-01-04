<?php

require_once("vendor/autoload.php");

use Crocciari\HtmlChars;

$html = new HtmlChars;

$result = $html->getString("Hello World 2024");

var_dump($result);