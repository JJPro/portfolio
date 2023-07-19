<?php

use JJPro\PortfolioTheme\Blocks;
use JJPro\PortfolioTheme\PostTypes;
use JJPro\PortfolioTheme\Scripts;
use JJPro\PortfolioTheme\ThemeSetup;
use Timber\Timber;

require_once(__DIR__ . '/vendor/autoload.php');

Timber::$dirname = 'timber-views'; // path to .twig files
Timber::$autoescape = true;
// add_action('timber/context', function($context) {
// 	$context['playBtn'] = get_stylesheet_uri() . '/assets/images/play-btn.svg';

// 	return $context;
// });

add_action('after_setup_theme', [ThemeSetup::class, 'init']);     // add theme support
add_action('wp_enqueue_scripts', [Scripts::class, 'init']);
add_action('init', [Blocks::class, 'init']);
add_action('init', [PostTypes::class, 'init']);
