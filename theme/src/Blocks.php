<?php

namespace JJPro\PortfolioTheme;

class Blocks
{
  /**
   * Registers the block using the metadata loaded from the `block.json` file.
   * Behind the scenes, it registers also all assets so they can be enqueued
   * through the block editor in the corresponding context.
   *
   * @see https://developer.wordpress.org/reference/functions/register_block_type/
   */
  public static function init()
  {
    register_block_type(get_stylesheet_directory() . '/build/project/');
  }
}
