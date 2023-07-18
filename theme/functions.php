<?php

use JJPro\PortfolioTheme\Scripts;
use JJPro\PortfolioTheme\ThemeSetup;

require_once(__DIR__ . '/vendor/autoload.php');

// $timber = new Timber\Timber();
add_action('after_setup_theme', [ThemeSetup::class, 'init']);     // add theme support
add_action('wp_enqueue_scripts', [Scripts::class, 'init']);    