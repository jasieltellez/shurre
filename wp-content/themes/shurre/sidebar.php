<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShUrRe
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}?>
<div class="center">
<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<?php the_custom_logo();

$description = get_bloginfo( 'description', 'display' );
if ( $description || is_customize_preview() ) : ?>
<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
<?php
endif; ?>
</div>
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
