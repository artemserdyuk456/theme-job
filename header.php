<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-jobtest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>Consulting</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theme-jobtest' ); ?></a>

	<header>
		<div class="wrapper">
			<nav role="navigation">
				<?php wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .site-branding -->


		<div class="res-menu">
			<ul class="resp-menu-btn">
				<li>
					<button class="cmn-toggle-switch cmn-toggle-switch__htx" id="menu_button">
						<span>toggle menu</span>
					</button>
				</li>
			</ul>
			<ul class="menu-nav-container">
				<li><a href="http://theme-jobtest/">Главная</a></li>
				<li><a href="http://theme-jobtest/%d0%ba%d0%be%d0%bd%d1%81%d0%b0%d0%bb%d1%82%d0%b8%d0%bd%d0%b3/">Консалтинг</a></li>
				<li><a href="http://theme-jobtest/%d1%82%d1%80%d0%b5%d0%bd%d0%b8%d0%bd%d0%b3/">тренинг</a></li>
				<li><a href="http://theme-jobtest/%d0%b1%d0%bb%d0%be%d0%b3/">блог</a></li>
				<li><a href="http://theme-jobtest/%d0%be-%d0%bd%d0%b0%d1%81/">о_нас</a></li>
				<li><a href="http://theme-jobtest/%d0%be%d1%82%d0%b7%d1%8b%d0%b2%d1%8b/">отзывы</a></li>
				<li><a href="http://theme-jobtest/%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b/">контакты</a></li>
			</ul>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
