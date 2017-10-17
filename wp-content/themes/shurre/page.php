<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ShUrRe
 */
?>

	




<div class="row">
	<div class="col m2 side-bar">
		<?php get_sidebar();?>
	</div>
	<div class="col m10 entradas">
	<?php get_header();?>
		<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="row">
			<?php
			while ( have_posts() ) : the_post();
				echo "<div class='col m4'>";
				get_template_part( 'template-parts/content', 'page' );
				echo "</div>";

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->
	
	</div>
</div>


<?php

get_footer();
