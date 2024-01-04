# htmlchars
The HtmlChars class converts letters and numbers into their respective HTML entities

## Install
'''
composer require crocciari/htmlchars
'''

## This basic example 
'''
<?php

require_once("vendor/autoload.php");

use Crocciari\HtmlChars;

$html = new HtmlChars;

$result = $html->getString("Hello World 2024");

var_dump($result);
'''