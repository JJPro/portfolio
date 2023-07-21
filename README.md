[![Docker Image CD](https://github.com/JJPro/portfolio/actions/workflows/docker-image.yml/badge.svg)](https://github.com/JJPro/portfolio/actions/workflows/docker-image.yml)

## Dockerfile
Contains portfolio theme files, this is a one go image, it spins, copies theme files to mount volume, then exits

Requires mounting the shared wordpress volume to `/var/www/html`
OR mounting the theme volume to `/var/www/html/wp-content/themes/jjpro-portfolio`

