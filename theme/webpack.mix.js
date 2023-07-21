let mix = require('laravel-mix');
mix.browserSync({
	proxy: 'localhost:8080',
	files: [
		'functions.php', 'style.css', 'theme.json',
		'templates/', 'assets/', 'parts/', 'patterns/', 'src/', 'timber-views',
		'build/'
	],
	open: false,
	ghostMode: true,
	notify: false,
})
	.sass('assets/styles/style.scss', 'build/css/')
	.options({
		processCssUrls: false,
	})
	.sourceMaps(false, 'eval-source-map')
	.disableSuccessNotifications();
