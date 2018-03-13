<?php

require 'PlainText.php';
require 'Header.php';
require 'BoldText.php';
require 'ItalicsText.php';
require 'UnderScoreText.php';
require 'StrikeTroughText.php';
require 'CompositeText.php';

//echo $document1->toMarkdown(). "\n" . $document->toMarkdown();

$proba = new CompositeText();
$proba->add(new Header("Main Title"));
$proba->add(new PlainText("hello world"));


echo $proba->toMarkdown() . "\n";
echo $proba->toHtml();
