<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ShUrRe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="row">
		<div class="col s12 ">

			<div class="card">
			<div class="titulo-card ">
						<?php
						if ( is_singular() ) :
							the_title( '<h5 class="entry-title">', '</h5>' );
						else :
							the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
						endif;?>
					</div>
				<div class="card-image">
					<?php echo get_the_post_thumbnail($post_id, 'thumbnail',array( 'class' => 'col m8 offset-m2' )); ?>
					
				</div>
				<div class="card-content">
					
					<div class="row col s12 tags-row">
						<?php $tags = get_the_tags();
						$html = '';
						foreach ( $tags as $tag ) {
							

							$html .= "<div class='chip red'><a href=". get_tag_link($tag).">{$tag->name}</a></div>";
						}
						
						echo $html; ?>
					</div>

					<div class="row">
						<div class="col s12 card">
							<div class="receta-descrip"><h5 >Descripción</h5></div>
							<div><p><?php echo the_excerpt(); ?></p></div>
						</div>
						
					</div>

					



				</div>
				<div class="card-action">
					<?php echo "<a href=". get_permalink().">ver receta</a>"; ?>

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
