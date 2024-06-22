<?php

/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div class="container">
	<div class="search--article-wrap">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php //get_template_part('template-parts/header/excerpt-header', get_post_format()); ?>
				<?php
					$post_format = get_post_format();
					if ( 'aside' === $post_format || 'status' === $post_format ) {
						return;
					}
					?>
					<header class="entry-header">
						<div class="content-text">
							<div style="float: left; margin: 20px 20px 20px 0;">
						<?php 
							twenty_twenty_one_post_thumbnail();
						?>
							</div>
							<div>
						<?php
							get_template_part('template-parts/excerpt/excerpt', get_post_format()); 
							the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
						?>
							</div>
						</div>
						<?php
							
						?>
					</header><!-- .entry-header -->
			
				
			</div><!-- .entry-content -->

			<!-- <footer class="entry-footer default-max-width">
<?php twenty_twenty_one_entry_meta_footer(); ?>
</footer> -->
			<!-- .entry-footer -->
		</article><!-- #post-${ID} -->
	</div>
</div>