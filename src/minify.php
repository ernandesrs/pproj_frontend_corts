<?php

require __DIR__ . "/../vendor/autoload.php";

use MatthiasMullie\Minify;

/**
 * JS
 */
$jsbase = __DIR__ . "/scripts";
$jsMinify = new Minify\JS();
$jsMinify->add($jsbase . "/script.js");
$jsMinify->minify(__DIR__ . "/../assets/js/scripts.min.js");

/**
 * CSS
 */
$cssbase = __DIR__ . "/styles";
$cssMinify = new Minify\CSS();

$cssMinify->add($cssbase . "/style.css");

$cssMinify->minify(__DIR__ . "/../assets/css/styles.min.css");