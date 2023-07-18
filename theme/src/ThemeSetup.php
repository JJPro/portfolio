<?php

namespace JJPro\PortfolioTheme;

class ThemeSetup
{
  public static function init()
  {
    self::postFormats();
    self::editorStyle();
  }

  private static function postFormats()
  {
    add_theme_support('post-formats',  array('aside', 'gallery', 'quote', 'image', 'video'));
  }
  private static function editorStyle()
  {
    add_theme_support('wp-block-styles');
    // add_editor_style('editor-style.css'); // Enqueue editor styles.
  }
}
