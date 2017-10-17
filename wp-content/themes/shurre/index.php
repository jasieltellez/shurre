<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ShUrRe
 */

 ?>


<div class="row">
	<div class="col m2 side-bar ">

		<?php get_sidebar();?>
	</div>
	<div class="col m10 entradas">
		<?php get_header();?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="col s12 ">
			<h4 class="page-title">Recetas más recientes</h4>
		</div>
		
		<div class="row">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				echo "<div class='col m4'>";
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
</div>

<?php

get_footer();?>


