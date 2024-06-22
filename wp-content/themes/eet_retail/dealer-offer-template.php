<?php

/**
 * Template Name: Dealer Offer Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Elvaan
 * @since Elvaan 1.0
 */
$page_banner_section = get_field('page_banner_section');
$top_section = get_field('top_section');
$dealer_offers = get_field('dealer_offers');
?>
<?php get_header(); ?>
	<!--banner start-->
	<section id="dealeroffer-banner">
    <div class="home---baner dealerofferbanner pb-5" style="background: url(<?php echo $page_banner_section['banner_image'];?>); background-size: 100%; background-repeat: no-repeat;">
      <div class="container">
        <div class="row row-height">
          <div class="col-lg-12">
            <div class="banner-bg py-xxl-4 py-sm-0">
              <h2 class="text-white pb-2"><?php echo $page_banner_section['banner_title'];?></h2>
              <p class="text-white"><?php echo $page_banner_section['banner_sub_title'];?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--banner end-->

  <!-- <section id="dealer-offer-curve">
    <div class="dealeroffercurve d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.png" class="img-fluid curve-img" alt="image" />
          </div>
        </div>
        <div class="position-absolute for-radius-leasing">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/border.png" alt="">
        </div>
      </div>
    </div>
  </section> -->

  <!-- From refinery to forecourt section Start -->
  <section id="dealer-offer" class="pt-lg-5 mt-5 pb-lg-5">
    <div class="dealeroffer px-lg-5">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-12 px-4">
            <div class="Explore_Cusomer_Offer_firstDiv exp-deal-col">
              <div class="Explore_Cusomer_Offer_SubParentDiv sub-parent-div">
                <p><?php echo $top_section['small_heading'];?></p>
                <div class="Explore_Cusomer_Offer_horizontal_line"></div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center px-lg-4 px-xl-1">
            <div class="col-lg-11 col-xl-11 pb-4">
              <div class="row">
                <div class="col-lg-5 fuels-col">
                  <div class="dealer_Container_SecondDiv ms-lg-4 ps-lg-2">
                    <h2 class="fs-60"><?php echo $top_section['heading'];?></h2>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="mt-3 pt-3">
                    <!-- <p class="pt-3">Partnering with EET Fuels means you will be directly supplied from our own refinery
                      in the UK and
                      sell under our retail brand: Essar. This means increase in flexibility, competitive pricing and
                      guaranteed supply, with no hidden costs or complex agreements. We provide unparalleled value to
                      retailers by simplifying processes and cutting out intermediaries, offering a seamless journey
                      from refinery to forecourt.</p> -->
                      <?php echo $top_section['description'];?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- End -->

  <!--dealer offer includes start-->
  <section id="dealer-offer-includes" class="px-3 pb-4">
    <div class="offer-includes">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="Explore_Cusomer_Offer_firstDiv pb-4 mt-lg-5 mt-3">
              <div class="Explore_Cusomer_Offer_SubParentDiv">
                <p class="text-uppercase"><?php echo $dealer_offers['section_heading']?></p>
                <div class="Explore_Cusomer_Offer_horizontal_line"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center pt-4">
          <div class="col-lg-10 p-0 pb-3 px-3">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <?php
                foreach($dealer_offers['section_repete_content'] as $key => $row) {
                  $showClass = "";
                  if($key == 0)
                    $showClass = " show";

                  if($row['image_position'] == "Right"){
              ?>
              <div class="accordion-item">
                <h4 class="accordion-header">
                  <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo ( $key + 1 )?>" aria-expanded="false" aria-controls="flush-collapse<?php echo ( $key + 1 )?>">
                    <div class="a-acc-num text-center"><?php echo ( $key + 1 )?></div>
                    <div class="a-acc-heading px-lg-4 px-2"><?php echo $row['title']?></div>
                    <div class="dealer-icon text-center">
                      <div class="curve-icon"><i class="fa-solid fa-arrow-left"></i></div>
                    </div>
                  </button>
                </h4>
                <div id="flush-collapse<?php echo ( $key + 1 )?>" class="accordion-collapse collapse<?php echo $showClass;?>" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">

                    <div class="accordion__content left-content">
                      <div class="row px-lg-5 pt-lg-3">
                        <div class="col-lg-8">
                          <?php echo $row['description']?>
                        </div>
                        <div class="col-lg-4">
                          <img src="<?php echo $row['image']?>" class="img-fluid accordian-img"
                            alt="image">
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <?php
                  }
                  else
                  {
              ?>
                <div class="accordion-item">
                  <h4 class="accordion-header">
                    <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo ( $key + 1 )?>" aria-expanded="false" aria-controls="flush-collapse<?php echo ( $key + 1 )?>">
                      <div class="a-acc-num text-center"><?php echo ( $key + 1 )?></div>
                      <div class="a-acc-heading px-lg-4 px-2"><?php echo $row['title']?></div>
                      <div class="dealer-icon text-center">
                        <div class="curve-icon"><i class="fa-solid fa-arrow-left"></i></div>
                      </div>
                    </button>
                  </h4>
                  <div id="flush-collapse<?php echo ( $key + 1 )?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="accordion__content">
                        <div class="row px-lg-5 pt-lg-3">
                          <div class="col-lg-4">
                            <img src="<?php echo $row['image']?>" class="img-fluid accordian-img"
                              alt="image">
                          </div>
                          <div class="col-lg-8">
                          <?php echo $row['description']?>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              <?php
                  }
                }
              ?>
              

              <!-- <div class="accordion-item">
                <h4 class="accordion-header">
                  <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <div class="a-acc-num text-center">3</div>
                    <div class="a-acc-heading px-lg-4 px-2">Guaranteed supply</div>
                    <div class="dealer-icon text-center">
                      <div class="curve-icon"><i class="fa-solid fa-arrow-left"></i></div>
                    </div>
                  </button>
                </h4>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion__content left-content">
                      <div class="row px-lg-5 pt-lg-3">
                        <div class="col-lg-8">
                          <p>For over 60 years, the Stanlow Refinery has been a cornerstone of our national
                            infrastructure,
                            fulfilling 16% of the UK's road transport fuel needs. We ensure secure supply through
                            Stanlow,
                            and our Northampton and Kingsbury Terminals, coupled with a 24-hour delivery network and
                            next-day delivery for orders placed before noon, 363 days a year.</p>
                        </div>
                        <div class="col-lg-4">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer-offer/supply.png" class="img-fluid accordian-img" alt="image">
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h4 class="accordion-header">
                  <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    <div class="a-acc-num text-center">4</div>
                    <div class="a-acc-heading px-lg-4 px-2">Branding and servicing</div>
                    <div class="dealer-icon text-center">
                      <div class="curve-icon"><i class="fa-solid fa-arrow-left"></i></div>
                    </div>
                  </button>
                </h4>
                <div id="flush-collapseFour" class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">

                    <div class="accordion__content">
                      <div class="row px-lg-5 pt-lg-3">
                        <div class="col-lg-4">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer-offer/branding.png" class="img-fluid accordian-img"
                            alt="image">
                        </div>
                        <div class="col-lg-8">
                          <p>Essar’s distinctive and clean branding ensures maximum visibility and customer recognition
                            from
                            the roadside. We work closely with branding and manufacturing partners to provide the best
                            installation and servicing solutions for each of our dealer sites.</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="accordion-item">
                <h4 class="accordion-header">
                  <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    <div class="a-acc-num text-center">5</div>
                    <div class="a-acc-heading px-lg-4 px-2">Payment solutions</div>
                    <div class="dealer-icon text-center">
                      <div class="curve-icon"><i class="fa-solid fa-arrow-left"></i></div>
                    </div>
                  </button>
                </h4>
                <div id="flush-collapseFive" class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">

                    <div class="accordion__content left-content">
                      <div class="row px-lg-5 pt-lg-3">
                        <div class="col-lg-8">
                          <p>In collaboration with Aspen, we offer comprehensive card payment services, including a wide
                            range of equipment, low-cost fees, simple setup process, and specialised support, ensuring a
                            seamless operational experience.</p>
                        </div>
                        <div class="col-lg-4">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer-offer/payment.png" class="img-fluid accordian-img" alt="image">
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="accordion-item">
                <h4 class="accordion-header">
                  <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    <div class="a-acc-num text-center">6</div>
                    <div class="a-acc-heading px-lg-4 px-2">Comprehensive support</div>
                    <div class="dealer-icon text-center">
                      <div class="curve-icon"><i class="fa-solid fa-arrow-left"></i></div>
                    </div>
                  </button>
                </h4>
                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">

                    <div class="accordion__content">
                      <div class="row px-lg-5 pt-lg-3">
                        <div class="col-lg-4">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer-offer/support.png" class="img-fluid accordian-img" alt="image">
                        </div>
                        <div class="col-lg-8">
                          <p>Our UK-based support team, highly experienced in both retail and commercial sectors,
                            provides
                            the assistance you need in your day-to-day operations. </p>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--dealer offer includes end-->

  <!-- TestMoinals Section -->
  <section class="mt-0 mt-lg-5 pt-lg-4 pt-5">
    <div class="TestMoinals_Container_dealer mb-0 TestMoinals_Container1">
      <div class="TestMoinals_firstDiv">
        <div class="TestMoinals_SubParent_div">
          <p class="mt-3 text-white">testimonials</p>
          <div class="TestMoinals_horizontal_line"></div>
        </div>
      </div>

      <div class="NexTAndPrev_Button pb-5">
        <h1 class="text-white">What our customers say</h1>
        <div class="NextAndPrevBtns">
          <div class="PrevBtn prev-btn">
            <img class="prev-btn" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-up.png" alt="prev">
          </div>
          <div class="PrevBtn next-btn">
            <img class="next-btn" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.png" alt="next">
          </div>
        </div>
      </div>
      <?php
       $args = array(
        'post_type' => 'wpm-testimonial',                            
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
        $testimonials_query = new WP_Query($args);
      ?>
      <div class="carousel d-none d-lg-block pb-5">
		<?php
          if ($testimonials_query->have_posts()) :
            while ($testimonials_query->have_posts()) :
                $testimonials_query->the_post();
                //setup_postdata();
                $post_id = get_the_ID();
                $customFields = get_post_custom( $post_id );
                
        ?>
		<div class="slide">
			<div>
				<div class="px-4 pt-3"><?php the_content();?></div>
				<div class="TestMoinals_Slide_Headig px-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Testmonials_Logo.png" alt="Sign Logo">
				<h3 class="fw-semibold"><?php echo $customFields['client_name'][0]?></h3>
				</div>
			</div>
		</div>
		<?php
            endwhile;
            wp_reset_postdata();
        endif;
        
        ?>
		
	</div>
      <!-- <div class="owl-carousel events-carousel">
        <?php
          if ($testimonials_query->have_posts()) :
            while ($testimonials_query->have_posts()) :
                $testimonials_query->the_post();
                //setup_postdata();
                $post_id = get_the_ID();
                $customFields = get_post_custom( $post_id );
                
        ?>
        <div class="px-2">
          <div class="card px-lg-5 py-5 pt-5">
              <div class="pt-2"><?php the_content();?></div>
              <div class="Dealear_Testomials row pt-lg-3 pt-xl-0">
                <div class="col-lg-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Testmonials_Logo.png" class="img-fluid testimonial-logo" alt="logo">
                </div>
                <div class="col-lg-10">
                  <h5 class="Dealear_Testomials_Name float-end fs-20"><?php echo $customFields['client_name'][0]?></h5>
                </div>
              </div>
          </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        
        ?>
      </div> -->

  </section>

  
<?php get_footer(); ?>