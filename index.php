<?php

/**
 * WebP Test
 *
 * @package 7th Street Web
 * @subpackage Web P test
 * @since 7th Street Web 1.0
 */

/** @var resource $resource */
$resource = imagecreatefrompng(__DIR__ . '/images/hero-fleet.png');

header('Content-type: image/webp');
imagewebp($resource, NULL, 80);
imagedestroy($resource);
