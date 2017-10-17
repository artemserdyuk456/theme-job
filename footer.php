<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-jobtest
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-menu">
						<nav>
							<?php wp_nav_menu( array(
								'theme_location' => 'third-menu',
								'menu_id'        => 'primary-menu', ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="contacts">
						<div class="call-one">
							<div class="phone"></div>
							<span>+38 067 000 00 00</span>
						</div>

						<div class="call-two">
							<div class="phone"></div>
							<span>+3 8 050 000 00 00</span>
						</div>
						<div class="mail-content">
							<a class="mail"><span>Xxxxxxxxxxxx@yandex.ru</span></a>
						</div>


					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
