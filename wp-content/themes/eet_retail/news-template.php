<?php

/**
 * Template Name: News Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Elvaan
 * @since Elvaan 1.0
 */
$page_banner_section = get_field('page_banner_section');
$top_section = get_field('top_section');


$term_args = array(
    'taxonomy' => 'category',
    'hide_empty' => true,
    'parent' => 0,  
);
$news_articles_category = get_categories($term_args);


?>
<?php get_header(); ?>
<main id="newsroom-page">
	<!--banner start-->
	<section id="essar-banner">
            <div class="essarbanner" style="background: url(<?php echo $page_banner_section['banner_image'];?>); background-size: 100%; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row row-height">
                        <div class="col-lg-12 col-xl-0">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner end-->
		 <!-- Newsroom Section Start -->
		 <section id="newsroom-section" class="pb-4 pt-lg-5">
            <div class="newsroom px-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 p-0">
                            <div class="Explore_Cusomer_Offer_firstDiv ms-xl-3 ms-xxl-0 ps-xl-5 ps-xxl-0">
                                <div class="Explore_Cusomer_Offer_SubParentDiv ps-4 ps-lg-0">
                                    <p class=""><?php echo $top_section['small_heading'];?></p>
                                    <div class="Explore_Cusomer_Offer_horizontal_line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="row for-padding">
                                    <div class="col-lg-12 p-0">
                                        <div class="newsroom_Container_SecondDiv">
                                            <h2 class="ps-lg-5 fs-60"><?php echo $top_section['heading'];?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--Newsroom  End -->
    <?php

        $term_args = array(
            'taxonomy' => 'category',
            'hide_empty' => true,
            'parent' => 3,  
        );
        $news_articles_categories = get_categories($term_args);
    ?>
        <!-- News Articles and Press Releases Start -->
        <section id="newsroom">
            <div class="ExploreNews_Continer p-0">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-lg-12">
                            <div class="tab mb-5 tabclass-mobile">
                                <?php
                                    foreach($news_articles_categories as $key => $category){
                                        $tabClass = "";
                                        if($key == 0)
                                            $tabClass = " active";
                                ?>
                                <button class="tablinks<?php echo $tabClass;?>" onclick="openCity(event, '<?php echo $category->slug;?>')"><strong><?php echo $category->name;?></strong></button>
                                <?php
                                    }
                                ?>
                                <!-- <button class="tablinks" onclick="openCity(event, 'Press')"><strong>Press
                                        Releases</strong></button> -->
                            </div>
                            <?php
                                foreach($news_articles_categories as $key => $category){
                                    $tabClass = "";
                                    if($key == 0)
                                        $tabClass = " active";

                                        $args = array(
                                            
                                            'posts_per_page' => -1,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'category',
                                                    'field'    => 'term_id',
                                                    'terms'    => $category->term_id,
                                                ),
                                            ),
                                            /* 'meta_query' => array(
                                                'key' => 'whats_popular', // Replace 'your_custom_field' with the meta key of your custom field
                                                'value' => $whats_popular_value,
                                                'compare' => '='
                                            ) */
                                        );
                                        $news_articles_query = new WP_Query($args);
                            ?>
                            <div id="<?php echo $category->slug;?>" class="tabcontent<?php echo $tabClass;?>">
                                <div class="p-0 ExploreNews_NewsSection container">
                                    <div class="p-0 d-flex row ExploreNews_NewsSection container">
                                        <?php
                                            if ($news_articles_query->have_posts()) :
                                                while ($news_articles_query->have_posts()) :
                                                    $news_articles_query->the_post();

                                                    $article_link = get_field('news_press_release');
                                                    $image_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                                                    if (!$image_url) {
                                                        $image_url = get_template_directory_uri() . "/assets/images/newsroom/newsArticle-1.png";
                                                    }
                                                    
                                        ?>
                                        <div class="ExploreNews_BoxOne col-lg-4 ps-1 pt-lg-4">
                                            <a href="<?php echo $article_link['article_link'] ?>" target="_blank">
                                                <div class="overlay-hover">
                                                    <img src="<?php echo $image_url; ?>" alt="fuel">
                                                    <div class="overlay">
                                                            <div class="fadeIn_bottom">
                                                                <div class="icon-container">
                                                                    <i class="fa-solid fa-arrow-right"></i>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div>
                                                <p><?php the_title();?>
                                                <?php 
                                                    if($article_link['date']) {
                                                ?>
                                                <div><span><b><?php echo $article_link['date'];?></b></span></div>
                                                <?php }?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php
                                            endwhile;
                                            wp_reset_postdata();
                                        endif;
                                        ?>
                                        <!-- <div class="ExploreNews_BoxOne col-lg-4 ps-1">
                                            <a href="https://www.linkedin.com/posts/retailsbest_retailtogether-retail-fuel-activity-7150388251348856832-BDXH?utm_source=share&utm_medium=member_desktop" target="_blank">
                                                <div class="overlay-hover">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsroom/newsArticle-2.png" alt="fuel">
                                                    <div class="overlay">
                                                        <div class="fadeIn_bottom">
                                                            <div class="icon-container">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div>
                                                <p>Essar will be the exclusive Motor Fuel Partner at Retail's BestForecourt & Convenience event on 16 May, 2024. See you there!</p>
                                            </div>
                                        </div>
                                        <div class="ExploreNews_BoxOne col-lg-4 ps-1">
                                            <a href="https://www.linkedin.com/posts/eet-fuels_essar-transformingfortomorrow-careers-activity-7174337552244441088-p1mA?utm_source=share&utm_medium=member_desktop" target="_blank">
                                                <div class="overlay-hover">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsroom/newsArticle-3.png" alt="fuel">
                                                    <div class="overlay">
                                                        <div class="fadeIn_bottom">
                                                            <div class="icon-container">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div><p>We are hiring!</p></div>
                                        </div>
                                        <div class="ExploreNews_BoxOne col-lg-4 ps-1 mt-lg-4">
                                            <a href="https://forecourttrader.co.uk/news/essar-tempts-retailers-with-lease-options-to-achieve-ambitious-network-plans/688177.article" target="_blank">
                                                <div class="overlay-hover">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsroom/newsArticle-4.png" alt="fuel">
                                                    <div class="overlay">
                                                        <div class="fadeIn_bottom">
                                                            <div class="icon-container">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div>
                                                <p>Essar tempts retailers with lease options to achieve ambitious network plans</p>
                                            </div>
                                        </div>
                                        <div class="ExploreNews_BoxOne col-lg-4 ps-1 mt-lg-4">
                                            <a href="https://forecourttrader.co.uk/latest-news/essar-re-opens-forecourt-in-south-wales/685675.article" target="_blank">
                                                <div class="overlay-hover">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsroom/newsArticle-5.png" alt="fuel">
                                                    <div class="overlay">
                                                        <div class="fadeIn_bottom">
                                                            <div class="icon-container">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div>
                                                <p>Essar re-opens forecourt in South Wales</p>
                                            </div>
                                        </div>
                                        <div class="ExploreNews_BoxOne col-lg-4 ps-1 mt-lg-4">
                                            <a href="https://forecourttrader.co.uk/latest-news/essar-opens-flagship-forecourt-with-morrisons-store-in-preston/680510.article" target="_blank">
                                                <div class="overlay-hover">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsroom/newsArticle-6.png" alt="fuel">
                                                    <div class="overlay">
                                                        <div class="fadeIn_bottom">
                                                            <div class="icon-container">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div>
                                                <p>Essar opens flagship forecourt with Morrisons store in Preston</p>
                                            </div>
                                        </div>
                                        <div class="ExploreNews_BoxOne col-lg-4 ps-1  mt-lg-4">
                                            <a href="https://forecourttrader.co.uk/latest-news/essar-reveals-new-motorsport-sponsorship-deal-to-highlight-its-performance-fuels/678566.article" target="_blank">
                                                <div class="overlay-hover">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsroom/newsArticle-7.png" alt="fuel">
                                                    <div class="overlay">
                                                        <div class="fadeIn_bottom">
                                                            <div class="icon-container">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div><p>Essar reveals new motorsport sponsorship deal to highlight its performance fuels</p></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                            <!-- <div id="Press" class="tabcontent">
                                <div class="row ExploreNews_NewsSection container">
                                    <div class="row ExploreNews_NewsSection container">
                                        <div class="ExploreNews_BoxOne col-lg-4 ps-1">
                                            <div class="overlay-hover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsroom/press-1.png" alt="fuel">
                                                <div class="overlay">
                                                    <div class="fadeIn_bottom">
                                                        <div class="icon-container">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    Press Release title
                                                <div><span><b>12 MAR, 2024</b></span></div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ExploreNews_BoxOne col-lg-4 ps-1">
                                            <div class="overlay-hover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsroom/press-2.png" alt="fuel">
                                                <div class="overlay">
                                                    <div class="fadeIn_bottom">
                                                        <div class="icon-container">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    Press Release title
                                                <div><span><b>12 MAR, 2024</b></span></div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ExploreNews_BoxOne col-lg-4 ps-1">
                                            <div class="overlay-hover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsroom/press-3.png" alt="fuel">
                                                <div class="overlay">
                                                    <div class="fadeIn_bottom">
                                                        <div class="icon-container">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    Press Release title
                                                <div><span><b>12 MAR, 2024</b></span></div>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Articles and Press Releases Start -->
        <div style="height:170px;">&nbsp;</div>
</main>
<?php get_footer(); ?>