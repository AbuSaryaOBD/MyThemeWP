<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>
		<?php if ( have_posts() ) : ?>
			<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
				<!-- <h1 class="page-title"> -->
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">','</div>' );
				?>
				<!-- </h1> -->
			</section>

			<div class="container">
				<div class="row" id="primary">
            		<main id="content" class="col-sm-8" role="main">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();?>
					</main>
					<aside class="col-sm-4"> 
						<div class="widget">
							<?php get_sidebar(); ?>
						</div>
					</aside>
				</div>
			</div>	
		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>




<?php
get_footer();
