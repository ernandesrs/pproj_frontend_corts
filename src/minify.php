<?php

require __DIR__ . "/../vendor/autoload.php";

use MatthiasMullie\Minify;

/**
 * JS
 */
$jsbase = __DIR__ . "/scripts";
$jsMinify = new Minify\JS();

$jsMinify->add($jsbase . "/cheader.js");
$jsMinify->add($jsbase . "/script.js");

$jsMinify->minify(__DIR__ . "/../assets/js/scripts.min.js");
$jsMinify->minify(__DIR__ . "/../assets/js/scripts.min.js");

/**
 * CSS
 */
$cssbase = __DIR__ . "/styles";
$cssMinify = new Minify\CSS();

$cssMinify->add($cssbase . "/style.css");
$cssMinify->add(__DIR__ . "/../node_modules/@splidejs/splide/dist/css/splide.min.css");

$cssMinify->minify(__DIR__ . "/../assets/css/styles.min.css");

/**
 * SPLIDE
 */
$splideJs = new Minify\JS();
$splideJs->add(__DIR__ . "/../node_modules/@splidejs/splide/dist/js/splide.js");
$splideJs->add(__DIR__ . "/../node_modules/@splidejs/splide-extension-grid/dist/js/splide-extension-grid.js");
$splideJs->minify(__DIR__ . "/../assets/js/splide.min.js");