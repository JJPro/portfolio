#!/bin/bash
set -ex

# Plugins 
wp plugin uninstall akismet all-in-one-seo-pack all-in-one-wp-migration amp hello google-analytics-for-wordpress simple-tags 
wp plugin install --activate disable-comments jetpack video-popup
wp disable-comments settings --types=all
wp disable-comments delete --types=all

# Themes
ln -s /portfolio /bitnami/wordpress/wp-content/themes/jjpro-portfolio
wp theme activate jjpro-portfolio

# Permalink
wp rewrite structure /%category%/%postname%/