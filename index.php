<?php


require 'vendor/autoload.php';


use CowSay\Cow;

$bessie = new Cow("j'utilise composer");


$output = $bessie->say();
echo $output;

