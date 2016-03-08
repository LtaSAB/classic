<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme_classic
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php get_template_part( 'template-parts/category', 'template' );?>
		<main id="main" class="site-main" role="main">
			<section class="main-posts clearfix">
				<div class="container-fluid">
					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post(); ?>
							<article>
								<h2 class="title-centered"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<span
									class="date title-centered">Posted on <?php echo get_the_date( 'j M, Y' ); ?></span>
								<div class="thumbnail-wrapper">
									<a href="#"><?php the_post_thumbnail(); ?></a>
								</div>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
							</article>

						<?php endwhile;
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
			</section>
			<?php the_posts_pagination( $args ); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
