<?php

/**
 * Template Name: Single Page Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Elvaan
 * @since Elvaan 1.0
 */

 $read_time = get_field( 'read_time' );
 $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
 if(!$image_url)
 {
	 $image_url = get_template_directory_uri()."/src/images/blog-02.jpg";
 }

 $categories = wp_get_post_terms( $post->ID, 'category' );

?>
<?php get_header(); ?>

<!-- begin content -->
<main id="content-wrap" class="primary--background">
    <div class="category--banner-section p-0">
        <h1 class="category--banner-headtext"><?php echo $categories[0]->name?></h1>
    </div>

    <section class="media--content-section">
        <div class="container container-custom">
            <div class="media--content-wrapper">
                <h2 class="post--title"><?php the_title()?></h2>
                <ul class="post--datetime d-flex align-items-center">
                    <li class="d-flex align-items-center"><span class="calender-icon me-2"><img src="<?php echo get_template_directory_uri(); ?>/src/images/calender-icon.svg"></span> <?php echo get_the_date('d/m/yy')?></li>
                    <li class="d-flex align-items-center"><span class="calender-icon me-2"><img src="<?php echo get_template_directory_uri(); ?>/src/images/clock-icon.svg"></span> <?php echo $read_time?> read</li>
                </ul>

                <div class="post--image">
                    <img src="<?php echo $image_url; ?>" alt="blog-details">
                </div>

                <div class="post--block-content">
                   <?php the_content();?>
                </div>


                <?php include("partials/social-share.php"); ?>
            </div>
        </div>
    </section>



    <?php get_footer(); ?>