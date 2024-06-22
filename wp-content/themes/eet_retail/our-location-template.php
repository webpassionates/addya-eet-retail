<?php

/**
 * Template Name: Our Locations Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Elvaan
 * @since Elvaan 1.0
 */
$page_banner_section = get_field('page_banner_section');
$top_section = get_field('top_section');

?>
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26901167.24956571!2d13.466037070218283!3d34.608361616608455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4865a44fb35e08c9%3A0x20f594d215c16208!2sDolydd%20Garage!5e0!3m2!1sen!2sin!4v1717219183658!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
<?php get_header(); ?>
<main id="location-page">
    
        <section id="location-banner">
            <div class="locationbanner" style="background: url(<?php echo $page_banner_section['banner_image'];?>); background-size: 100%; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row row-height">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="location-section" class="pt-xl-5">
            <div class="location pt-xl-3 px-lg-5">
                <div class="container-fluid">
                    <div class="row justify-content-center pt-5 px-lg-4">
                        <div class="col-lg-11 p-0">
                            <div class="Explore_Cusomer_Offer_firstDiv pt-0 ps-2">
                                <div class="Explore_Cusomer_Offer_SubParentDiv">
                                    <p><?php echo $top_section['small_heading'];?></p>
                                    <div class="Explore_Cusomer_Offer_horizontal_line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row px-2"> -->
                    <div class="px-lg-2">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="row pt-lg-5">
                                    <div class="col-lg-6">
                                        <div class="newsroom_Container_SecondDiv">
                                            <h2 class="pt-0 fs-60 ps-4"><?php echo $top_section['heading'];?></h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="newsroom_Container_SecondDiv">
                                            <div class="ps-4 fs-60 pt-2 pe-lg-5"><?php echo $top_section['description'];?></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row site-locator justify-content-center py-2 mx-lg-5 mt-lg-5">
                                    <div class="col-lg-11">
                                        <div class="row align-items-center pt-2">
                                            <div class="col-lg-2">
                                                <h5 class="m-0">Site Locator</h5>
                                            </div>
                                            <div class="position-relative col-lg-8 d-flex justify-content-center">
                                                <input type="text" name="post_code" id="post_code" placeholder="Search by Post Code" class="w-100 py-1 px-3">
                                                <i class="fa-solid fa-magnifying-glass position-absolute pt-2"></i>
                                            </div>
                                            <div class="col-lg-2 text-center">
                                                <button type="button" id="SearchLocation" class="btn btn-primary">
                                                    <h6 class="m-0">Search</h6>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
		<?php
			$args = array(
                'post_type' => 'wpsl_stores',                 
				'posts_per_page' => -1,
				/* 'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'term_id',
						'terms'    => $category->term_id,
					),
				), */
				/* 'meta_query' => array(
					'key' => 'whats_popular', // Replace 'your_custom_field' with the meta key of your custom field
					'value' => $whats_popular_value,
					'compare' => '='
				) */
			);
			$store_locations = new WP_Query($args);
		?>
        <section id="maps-section">
            <div class="mapssection  pt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <div class="col-lg-12">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="pumps-location ">
                                                <div class="ms-lg-3  for-scroll">
                                                    <h6 class="pb-4">Showing <span id="post-cnt" style="-webkit-text-fill-color:unset"><?php echo $store_locations->found_posts; ?></span> Matches</h6>
													<div class="post-data">
														<?php
															if ($store_locations->have_posts()) :
																while ($store_locations->have_posts()) :
																	$store_locations->the_post();
																	$post_id = get_the_ID();
																	$custom_fields = get_post_custom( $post_id );
																	//print_r($custom_fields);
																	//$address = $custom_fields['wpsl_address'][0].", ".$custom_fields['wpsl_city'][0].", ".$custom_fields['wpsl_country'][0];
																	$address = $custom_fields['wpsl_country'][0];
																	$latittude = $custom_fields['wpsl_lat'][0];
																	$longitude = $custom_fields['wpsl_lng'][0];
																	//$mapurl = $custom_fields['wpsl_map_link'][0];

																	$mapurl = get_the_excerpt($post_id);

														?>
														<div class="row align-items-center Loaction-info-div py-5" data-mapurl="<?php echo $mapurl;?>">
															<div class="col-2 text-center">
																<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin-marker.png" alt="">
															</div>
															<div class="col-8">
																<h5 class="m-0"><?php the_title()?></h5>
																<p class="m-0 mt-2"><?php echo $address;?> <br><?php echo $custom_fields['wpsl_zip'][0];?></p>
															</div>
															<div class="col-2 text-center hideArrowButton">
																<img class="prev-btn" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-up.png" alt="prev">
															</div>
														</div>
														<?php
															// content goes here
																endwhile;
																wp_reset_postdata();
															else :
																echo "There are no locations found.";
															endif;
														?>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="our-loction-Map col-lg-7 px-lg-0">
                                            <iframe class="iframe_location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d308003.7502027629!2d-4.450880075435985!3d52.90739936988496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486434b66c1c0fed%3A0xecce1b0314ace6fc!2sGwynedd%2C%20UK!5e0!3m2!1sen!2sin!4v1717045043622!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<div style="height:170px;">&nbsp;</div>
    </main>
<?php get_footer(); ?>