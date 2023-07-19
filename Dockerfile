# Build Theme 
FROM composer AS php_builder 
WORKDIR /app/
COPY theme ./
RUN composer install && composer dump-autoload -o

# NO JS to build for now 


# Final Image 
FROM bitnami/wordpress-nginx

# Give wp-cli write access
WORKDIR /portfolio
COPY --from=php_builder /app/assets ./assets
COPY --from=php_builder /app/parts ./parts
COPY --from=php_builder /app/patterns ./patterns
COPY --from=php_builder /app/src ./src
COPY --from=php_builder /app/templates ./templates
COPY --from=php_builder /app/timber-views ./timber-views
COPY --from=php_builder /app/vendor ./vendor
COPY --from=php_builder /app/*.php ./
COPY --from=php_builder /app/style.css ./style.css
COPY --from=php_builder /app/theme.json ./theme.json
COPY post-install.sh /docker-entrypoint-init.d/post-install.sh
