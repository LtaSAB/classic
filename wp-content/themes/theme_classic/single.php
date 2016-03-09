<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme_classic
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php get_template_part( 'template-parts/category', 'template' ); ?>
		<main id="main" class="site-main" role="main">

			<div class="container-fluid">
				<?php
				while ( have_posts() ) :
				the_post(); ?>
				<article>
					<h2 class="title-centered"><?php the_title(); ?></h2>
					<span class="date title-centered">Posted on <?php echo get_the_date( 'j M, Y' ); ?></span>
					<?php the_content(); ?>
				</article>
				<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
				endif;

				endwhile; // End of the loop.
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
