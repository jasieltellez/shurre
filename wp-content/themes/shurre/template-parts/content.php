<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ShUrRe
 */

?>
<h1>Fichero content.php</h1>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header ">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php shurre_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="row">
		<div class="col s12 m8 offset-m2">
			<div class="card">
				<div class="card-image">
					<?php echo get_the_post_thumbnail($post_id, 'thumbnail',array( 'class' => 'col m8 offset-m2' )); ?>
					
				</div>
				<div class="card-content">
					<div class="row col s12">
						<?php $tags = get_tags();
						$html = '';
						foreach ( $tags as $tag ) {
							

							$html .= "<div class='chip'><a href=''>{$tag->name}</a></div>";
						}
						
						echo $html; ?>
					</div>

					<div class="row">
						<div class="col s6 card">
							<div class="receta-descrip"><h5 >Descripción de la receta</h5></div>
							<div><p><?php echo get_post_field( 'Descripción'); ?></p></div>
						</div>
						<div class="col s6 card">
							<div class="receta-ingredientes"><h5 >Ingredientes</h5></div>
							<div><p><?php echo get_post_field( 'Ingredientes'); ?></p></div>
						</div>
					</div>

					<div class="card">
							<div class="receta-preparacion"><h5 >Preparación</h5></div>
							<div><p><?php echo get_post_field( 'Preparación'); ?></p></div>
					</div>



				</div>
				
			</div>
		</div>
	</div>


	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shurre' ),
				array(
					'span' => array(
						'class' => array(),
						),
					)
				),
			get_the_title()
			) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shurre' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		
	</article><!-- #post-<?php the_ID(); ?> -->
