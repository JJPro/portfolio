<?php

namespace JJPro\PortfolioTheme\Projects;

/**
 * Title: Portfolio Projects
 * Slug: portfolio/projects
 */

use Timber\Timber;

define('PROJECT_DIR_URI', get_stylesheet_directory_uri() . '/assets/images/projects/');

/**
 * @param $attrs [] {
 * 		@type string $title
 * 		@type string $titleStyle (optional)
 * 		@type string $summary
 * 		@type string $thumbnail (optional)
 * 		@type string $thumbnailBG (optional)
 * 		@type string $thumbnailScale (optional)
 * 		@type string $tint (optional)
 * 		@type bool   $isVideo (optional)
 * 		@type string $href
 * 		@type string[] $repos (optional)
 * 		@type string[] $tags  (optional)
 * 		@type string $tooltip (optional)
 * }
 */
function renderWithStyle1($attrs)
{
	if (array_key_exists('thumbnail', $attrs)) $attrs['thumbnail'] = PROJECT_DIR_URI . $attrs['thumbnail'];
	Timber::render('project-card-style-1.twig', $attrs);
}

/**
 * @param $attrs [] {
 * 		@type string $title
 * 		@type string $summary
 * 		@type string $thumbnail
 * 		@type string $href
 * }
 */
function renderWithStyle2($attrs)
{
	if ($attrs['thumbnail']) $attrs['thumbnail'] = PROJECT_DIR_URI . $attrs['thumbnail'];
	Timber::render('project-card-style-2.twig', $attrs);
}
$ossProjects = [
	[
		'title' => 'Zigbee2MQTT',
		'summary' => 'Added driver support for Aqara Magic Cube Pro',
		'thumbnail' => 'z2m.webp',
		'tint' => '#FBB51F',
		'href' => 'https://www.zigbee2mqtt.io/',
		'repos' => ['https://github.com/JJPro/CTP-R01-converter'],
		'tags' => ['Zigbee', 'Typescript', 'Node', 'ESLint'],
	],
	[
		'title' => 'Magic Racket',
		'summary' => 'Added code intellisense feature to the extension, enabling symbol lookup and jump-to-definitions',
		'thumbnail' => 'racket.webp',
		'tint' => 'rgba(62, 91, 169, 0.90)',
		'href' => 'https://marketplace.visualstudio.com/items?itemName=evzen-wybitul.magic-racket',
		'repos' => [
			'https://github.com/JJPro/magic-racket/tree/racket-lsp-integration',
			'https://github.com/JJPro/racket-langserver/tree/jj-fix-documentSymbol'
		],
		'tags' => ['VSCode Extension', 'Racket', 'Typescript', 'Node', 'ESLint'],
	],
];
$personalProjects = [
	[
		'title' => 'This Website',
		'summary' => 'My online portfolio',
		'thumbnail' => 'my-avatar.webp',
		'tint' => '#6B9DD9',
		'href' => 'https://jjpro.me/',
		'repos' => ['https://github.com/JJPro/portfolio'],
		'tags' => ['ES6', 'React', 'PHP', 'Webpack', 'Babel', 'SASS', 'Docker', 'Github Actions/CICD'],
	],
	[
		'title' => 'Loving Heart',
		'summary' => 'Loving Heart Retreats Glamping',
		'thumbnail' => 'lhr.webp',
		'tint' => 'rgba(79, 136, 130, 0.90)',
		'href' => 'https://www.lovingheartretreats.com/',
		'tags' => ['ES6', 'React', 'PHP', 'Webpack', 'Babel', 'ESLint', 'Styled Components', 'SASS', 'Tailwind', 'Docker'],
	],
	[
		'title' => 'Linux<br/>inode File System',
		'titleStyle' => 'font-size: 1.3rem;',
		'summary' => 'Lightweight implementation of the Linux inode file system in user space',
		'thumbnail' => 'linux.webp',
		'thumbnailBG' => 'hsl(320 62% 25% / 1)',
		'thumbnailScale' => '70%',
		'tint' => '#400F30',
		'repos' => [
			'https://github.com/JJPro/inode-file-system',
		],
		'tags' => ['C', 'CMake'],
	],
	[
		'title' => 'NUCSSA',
		'summary' => 'Website, org wiki, mail service, LDAP server, airport pickup app ...',
		'thumbnail' => 'nucssa.webp',
		'thumbnailBG' => '#31120D',
		'thumbnailScale' => '90%',
		'isVideo' => true,
		'tint' => '#C73724',
		'href' => PROJECT_DIR_URI . '/intro to IT.mp4',
		// 'href' => 'https://youtu.be/1bIdEREqas4',
		'repos' => [
			'https://github.com/NUCSSA/nucssa-core/tree/master',
			'https://github.com/NUCSSA/nucssa-portal-theme',
			'https://github.com/NUCSSA/nucssa-pickup',
		],
		'tags' => ['ES6', 'React', 'PHP', 'Node', 'Webpack', 'Babel', 'ESLint', 'SASS', 'Tailwind', 'Docker'],
	],
	[
		'title' => 'Particle Simulation',
		'summary' => '2 million particles @ 60FPS Transform Feedback buffer ',
		'isVideo' => true,
		'tint' => 'rgba(57, 111, 35, 0.90)',
		'href' => PROJECT_DIR_URI . '/cg particle simulation.mp4',
		// 'href' => 'https://www.youtube.com/watch?v=nFGZ6Hcqzc8',
		'repos' => [
			'https://github.com/JJPro/OpenGL--Particle-Simulation-with-TransformFeedback-Buffer',
		],
		'tags' => ['C++', 'OpenGL'],
	],
	[
		'title' => 'Tanks',
		'summary' => 'Multiplayer web game',
		'thumbnail' => 'tanks.webp',
		'thumbnailScale' => '73%;',
		'tint' => 'rgba(35, 81, 121, 0.90)',
		'href' => 'https://tanks.jjpro.me',
		'repos' => [
			'https://github.com/JJPro/tanks',
		],
		'tags' => ['Elixir', 'WebSocket', 'PubSub', 'ES6', 'React', 'Webpack', 'Babel', 'ESLint', 'SASS', 'Tailwind', 'Github Actions/CICD', 'Docker'],
	],
	[
		'title' => 'Ride Ordering<br/>(Airport Pickup)',
		'titleStyle' => 'font-size: 1.3rem;',
		'summary' => 'Project@NUCSSA, provides airport pickup rides for new students',
		'thumbnail' => 'flight.webp',
		'tint' => 'rgba(54, 150, 216, 0.90)',
		'href' => 'https://www.nucssa.org/pickup/',
		'repos' => [
			'https://github.com/NUCSSA/nucssa-pickup',
		],
		'tags' => ['PHP', 'ES6', 'React', 'Webpack', 'Babel', 'ESLint', 'SASS', 'Tailwind', 'Github Actions/CICD'],
	],
	[
		'title' => 'WP LDAP Auth',
		'summary' => 'Enables WordPress to authenticate with LDAP server, and manage user permissions by groups',
		'thumbnail' => 'wordpress.webp',
		'tint' => 'rgba(50, 55, 60, 0.90)',
		'tooltip' => "This is part of a big project. Contact me on LinkedIn if you want to use commercially and I'd love to customize it for your organization.",
		'tags' => ['PHP', 'LDAP', 'React', 'Webpack', 'Babel', 'ESLint', 'SASS', 'Github Actions/CICD'],
	],
	[
		'title' => 'MVC Web Framework',
		'summary' => 'My self-built MVC web framework, containing regex routers, controllers, models, and views',
		'thumbnail' => 'MVC-webframework.webp',
		'tint' => '#0d192e',
		'repos' => [
			'https://github.com/JJPro/PHP-Web-Framework',
		],
		'tags' => ['PHP'],
	],
	[
		'title' => 'Paper Trades<br/>(Archived)',
		'titleStyle' => 'font-size: 1.3rem;',
		'summary' => 'Practice your trading skills with virtual money',
		'thumbnail' => 'bitcoin.webp',
		'tint' => 'rgba(247, 147, 26, 0.90)',
		'repos' => [
			'https://github.com/JJPro/paper-trading-system',
		],
		'tags' => ['Elixir', 'WebSocket', 'PubSub', 'ES6', 'React', 'Webpack', 'Babel', 'SASS', 'OAuth'],
	],
	[
		'title' => 'Blue Bikes Analysis<br/>(Archived)',
		'titleStyle' => 'font-size: 1.3rem;',
		'summary' => 'Cross Factor Analysis for Blue Bikes in greater Boston',
		'href' => 'https://bikes.jjpro.me',
		'tooltip' => 'The weather API provider used in the project has been closed, so data won\'t load, the project is kept alive to demo React & UI design',
		'thumbnail' => 'bluebikes.webp',
		'tint' => '#3D88C9',
		'repos' => [
			'https://github.com/JJPro/bikes-docker',
			'https://github.com/JJPro/bike-sharing-theme',
		],
		'tags' => ['Weather API', 'ES6', 'React', 'Webpack', 'Babel', 'SASS', 'Github Actions/CICD', 'Docker'],
	],
];
$designProjects = [
	[
		'title' => 'This Website',
		'summary' => 'My online portfolio',
		'thumbnail' => 'design-portfolio.webp',
		'href' => 'https://www.figma.com/file/Jjjo1SWM2RieUDVhH7Eytd/Personal-Portfolio?type=design&node-id=0%3A1&mode=design&t=cx37q8ZWzRkN3gVI-1',
	],
	[
		'title' => 'NUCSSA Portal & Admin Dash',
		'summary' => 'Home page design for mobile and desktop; admin dashboard for user permission management',
		'thumbnail' => 'design-nucssa.webp',
		'href' => 'https://www.figma.com/file/uZsZMTuAqx5kttXw7orNE8/NUCSSA-Portal?type=design&t=LljkkWUC686HvPBe-6',
	],
	[
		'title' => 'Loving Heart Retreats',
		'summary' => 'Loving Heart Retreats glamping site initial design',
		'thumbnail' => 'design-lhr.webp',
		'href' => 'https://www.figma.com/file/Ab6zO9mdcX2faiSVgTn6hj/Loving-Heart?type=design&t=LljkkWUC686HvPBe-6',
	],
];
?>
<div class="projects is-layout-constrained has-global-padding">
	<section id="oss">
		<h2 class="section-title">Open Source Contributions</h2>

		<div class="cards">
			<?php foreach ($ossProjects as $project) {
				renderWithStyle1($project);
			} ?>
		</div>
	</section>
	<section id="personal-work">
		<h2 class="section-title">Personal Work</h2>
		<div class="cards">
			<?php foreach ($personalProjects as $project) {
				renderWithStyle1($project);
			} ?>
		</div>
	</section>
	<section id="design" class="wp-block-group alignwide is-layout-contrained has-global-padding">
		<h2 class="section-title" style="text-align: center;">Design Work</h2>
		<div class="cards">
			<?php foreach ($designProjects as $project) {
				renderWithStyle2($project);
			} ?>
		</div>
	</section>
	<section id="DIY">
		<h2 class="section-title">DIY Builder</h2>
	</section>
</div>
