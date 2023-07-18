<?php

namespace JJPro\PortfolioTheme;

class Scripts
{
  public static function init()
  {
    self::frontendStyle();
  }

  private static function frontendStyle()
  {
    $furl = get_stylesheet_directory_uri() . '/style.css';
    $fpath = get_stylesheet_directory() . '/style.css';
    $version = filemtime($fpath);
    wp_enqueue_style('jjpro-portfolio-style', $furl, [], $version);
  }
}
