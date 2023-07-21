# Build Theme 
FROM composer AS php_builder 
WORKDIR /app/
COPY theme ./
RUN composer install && composer dump-autoload -o

## Build assets (JS, CSS)
FROM node:19 AS assets_builder
WORKDIR /app/
COPY theme ./
RUN npm i && npm run build

# Final Image 
FROM alpine
WORKDIR /app/
COPY --from=assets_builder /app/assets/images ./assets/images
COPY --from=assets_builder /app/build ./build
COPY --from=php_builder /app/parts ./parts
COPY --from=php_builder /app/patterns ./patterns
COPY --from=php_builder /app/src ./src
COPY --from=php_builder /app/templates ./templates
COPY --from=php_builder /app/timber-views ./timber-views
COPY --from=php_builder /app/vendor ./vendor
COPY --from=php_builder /app/*.php ./
COPY --from=php_builder /app/style.css ./style.css
COPY --from=php_builder /app/theme.json ./theme.json
COPY scripts/update-portfolio.sh /docker-entrypoint.sh
WORKDIR /var/www/html/wp-content/themes/jjpro-portfolio
ENTRYPOINT [ "/docker-entrypoint.sh" ]