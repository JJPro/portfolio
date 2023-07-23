#!/bin/sh -e

rm -rf /var/www/html/wp-content/themes/jjpro-portfolio
cp -Rf /app /var/www/html/wp-content/themes/jjpro-portfolio
chown -R 33:33 /var/www/html/wp-content/themes/jjpro-portfolio

exec $@