#!/bin/bash

if [ ! -f "/var/www/html/wp-content/post-install-complete" ]; then 
  # Install WP with defaults for dev environment 
  if [[ "${WORDPRESS_DEBUG}" == "true" ]]; then
    wp core install --url="localhost:8080" --title="Jason Ji" --admin_user=user --admin_password=bitnami --admin_email=test@example.com --skip-email
  fi

  # Install Recommended Plugins
  wp plugin install --activate theme-check disable-comments query-monitor jetpack video-popup
  wp disable-comments settings --types=all
  wp disable-comments delete --types=all

  # Remove Unwanted Plugins
  wp plugin uninstall hello

  wp theme activate jjpro-portfolio

  # Set Permalink Structure
  wp rewrite structure /%category%/%postname%/

  # Create Home Page and Projects Page
  post_id=$(wp post create --porcelain --post_type=page --page_template=frontpage --post_status=publish)
  wp post create --porcelain --post_type=page --post_title=Projects --page_template=projects --post_status=publish
  
  # Set homepage 
  wp option update page_on_front $post_id
  wp option update show_on_front page 

  touch /var/www/html/wp-content/post-install-complete
  echo "Post install successful!"
fi