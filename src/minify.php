<?php

require __DIR__ . "/../vendor/autoload.php";

use MatthiasMullie\Minify;

/**
 * JS: front
 */
$jsbase = __DIR__ . "/scripts";
$jsMinify = new Minify\JS();

$jsMinify->add($jsbase . "/cheader.js");
$jsMinify->add($jsbase . "/script.js");
$jsMinify->add(__DIR__ . "/../node_modules/bootstrap/dist/js/bootstrap.min.js");

$jsMinify->minify(__DIR__ . "/../assets/js/scripts.min.js");

/**
 * JS: dash
 */
$jsbase = __DIR__ . "/scripts";
$jsMinifyDash = new Minify\JS();

$jsMinifyDash->add($jsbase . "/cheader.js");
$jsMinifyDash->add($jsbase . "/appointment.js");
$jsMinifyDash->add($jsbase . "/dash.script.js");
$jsMinifyDash->add(__DIR__ . "/../node_modules/bootstrap/dist/js/bootstrap.min.js");

$jsMinifyDash->minify(__DIR__ . "/../assets/js/dash.scripts.min.js");

/**
 * CSS: front
 */
$cssbase = __DIR__ . "/styles";
$cssMinifyFront = new Minify\CSS();

$cssMinifyFront->add($cssbase . "/front.style.css");
$cssMinifyFront->add(__DIR__ . "/../node_modules/@splidejs/splide/dist/css/splide.min.css");

$cssMinifyFront->minify(__DIR__ . "/../assets/css/styles.min.css");

/**
 * CSS: dash
 */
$cssbase = __DIR__ . "/styles";
$cssMinifyDash = new Minify\CSS();

$cssMinifyDash->add($cssbase . "/dash.style.css");

$cssMinifyDash->minify(__DIR__ . "/../assets/css/dash.styles.min.css");

/**
 * SPLIDE
 */
$splideJs = new Minify\JS();
$splideJs->add(__DIR__ . "/../node_modules/@splidejs/splide/dist/js/splide.js");
$splideJs->add(__DIR__ . "/../node_modules/@splidejs/splide-extension-grid/dist/js/splide-extension-grid.js");
$splideJs->minify(__DIR__ . "/../assets/js/splide.min.js");

/**
 * Simple Parallax
 */
$simpleParallaxJs = new Minify\JS();
$simpleParallaxJs->add(__DIR__ . "/../node_modules/simple-parallax-js/dist/simpleParallax.js");
$simpleParallaxJs->minify(__DIR__ . "/../assets/js/simple-parallax.min.js");

/**
 * AOS
 */
$aosJs = new Minify\JS();
$aosJs->add(__DIR__ . "/../node_modules/aos/dist/aos.js");
$aosJs->minify(__DIR__ . "/../assets/js/aos.min.js");

/**
 * AOS CSS
 */
$aosCss = new Minify\CSS();
$aosCss->add(__DIR__ . "/../node_modules/aos/dist/aos.css");
$aosCss->minify(__DIR__ . "/../assets/css/aos.min.css");

/**
 * Boxicons CSS
 */
$boxiconsCss = new Minify\CSS();
$boxiconsCss->add(__DIR__ . "/../node_modules/boxicons/css/boxicons.css");
$boxiconsCss->minify(__DIR__ . "/../assets/css/boxicons.min.css");
