<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

				<?php
				if ( have_posts() ) : ?>

				<header class="page-header">
					<h4 class="page-title"><?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Resultados de búsqueda para: %s', 'shurre' ), '<span>' . get_search_query() . '</span>' );
						?></h4>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				if (get_post_type()=='post') {
					echo "<div class='col m4'>";

					get_template_part( 'template-parts/content', 'list');
					echo "</div>";
				}
				

				endwhile;

			//the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php

get_footer();
