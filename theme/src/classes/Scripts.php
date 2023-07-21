<?php

namespace JJPro\PortfolioTheme;

class Scripts
{
  public static function init()
  {
    self::frontendStyle();
    self::customFonts();
		if (WP_DEBUG) self::browserSync();
  }

  private static function frontendStyle()
  {
    $furl = get_stylesheet_directory_uri() . '/build/css/style.css';
    $fpath = get_stylesheet_directory() . '/build/css/style.css';
    $version = filemtime($fpath);
    wp_enqueue_style('jjpro-portfolio-style', $furl, [], $version);
  }
	private static function browserSync()
	{
		add_action('wp_print_scripts', function () {
			echo '<script async="" src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>';
		});
	}
	private static function customFonts() {
		$furl = get_stylesheet_directory_uri() . '/build/css/fonts.css';
		$fpath = get_stylesheet_directory() . '/build/css/fonts.css';
		$version = filemtime($fpath);
		wp_enqueue_style('jjpro-portfolio-fonts', $furl, [], $version);

	}
}
