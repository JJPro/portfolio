<?php

namespace JJPro\PortfolioTheme;

class PostTypes
{
	public static function init()
	{
		self::projectPostType();
	}

	private static function projectPostType()
	{
		register_post_type('project', [
			'label' => 'Project',
			'description' => 'A project',
			'public' => true,
			'has_archive' => false,
			'rewrite' => true,
			'show_in_rest' => true,
			// 'menu_icon' => 'none', // there is a bug in wp core that <img /> still shows when `menu_icon` is set to `'none'`
			'supports' => ['title', 'editor', 'revisions', 'trackbacks', 'custom-fields', 'excerpt', 'thumbnail'],
			'taxonomies' => ['category'],
			'delete_with_user' => false,
		]);
	}
}
