<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme_classic
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="page-content">
				<div class="container-fluid">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					wp_reset_postdata();
					?>
				</div>
			</div>
			<section class="our-team">
				<div class="container-fluid">
					<h2 class="title-centered"><?php echo __('Meet Our Team!');?></h2>
					<?php
					$args      = array(
						'post_type' => 'members',
						'posts_per_page' => 6
					);
					$the_query = new WP_Query( $args );

					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<article class="col-xs-12 col-sm-6 col-md-4 preview-work ">
								<div class="thumbnail-wrapper">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="short-description">
									<h3>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<span class="kind-of-activity"><?php echo get_post_meta( get_the_id(), 'kind_of_activity', true );?></span>
									<p><?php the_excerpt(); ?></p>
								</div>
							</article>
						<?php endwhile;
						wp_reset_postdata();
					endif; ?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
