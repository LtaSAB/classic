<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_classic
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer row" role="contentinfo">
	<div class="container-fluid">
		<nav id="site-navigation" class="main-navigation col-md-4" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
		</nav>
		<div class="social-icons col-md-4">
			<ul>
				<li><a class="fa fa-twitter" href="<?php echo get_theme_mod( 'social_icon_twitter', '' ); ?>"></a></li>
				<li><a class="fa fa-facebook" href="<?php echo get_theme_mod( 'social_icon_facebook', '' ); ?>"></a>
				</li>
				<li><a class="fa fa-pinterest" href="<?php echo get_theme_mod( 'social_icon_pinterest', '' ); ?>"></a>
				</li>
				<li><a class="fa fa-google-plus" href="<?php echo get_theme_mod( 'social_icon_google', '' ); ?>"></a>
				</li>
			</ul>
		</div>
		<div class="site-info col-md-4">
			<p>&copy; Copyright <?php echo date( 'Y' ); ?>
				<a href="<?php echo get_theme_mod( 'author_site_url', '' ); ?>">
					<?php echo get_theme_mod( 'author_site_domen', '' ); ?>
				</a>
			</p>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
