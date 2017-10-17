<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ShUrRe
 */

get_header(); ?>

<div class="row">
	<div class="col m2 side-bar">
		<?php get_sidebar();?>
	</div>
	<div class="col m10 entradas">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				
				<div class="row">
					<?php
					if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
						the_archive_title( '<h4 class="page-title">', '</h4>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				echo "<div class='col m4'>";
				//get_template_part( 'template-parts/content', get_post_format() );
				get_template_part( 'template-parts/content', 'list');
				echo "</div>";

				endwhile;

			//the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
