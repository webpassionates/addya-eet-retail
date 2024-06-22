<?php

/**
 * Template Name: Customer Offers Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Elvaan
 * @since Elvaan 1.0
 */

$page_banner_section = get_field('page_banner_section');
$top_section = get_field('top_section');
$enhancing_experience = get_field('enhancing_experience');

?>
<?php get_header(); ?>
	<!--banner start-->
    <section id="customer-offering-banner">
        <div class="home---baner dealerofferbanner pb-5" style="background: url(<?php echo $page_banner_section['banner_image'];?>); background-size: 100%; background-repeat: no-repeat;">
            <div class="container">
                <div class="row row-height">
                    <div class="col-lg-12">
                        <div class="banner-bg py-xxl-3 py-sm-0 px-3 px-lg-0">
                            <h2 class="text-white pb-xxl-2 pb-sm-0 pt-xxl-4 pt-sm-0"><?php echo $page_banner_section['banner_title'];?></h2>
                            <p class="text-white"><?php echo $page_banner_section['banner_sub_title'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner end-->

    <!-- Curve image  Start-->
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
    <!-- End -->

    <!-- Explore our customer offers section Start -->
    <section id="dealer-offer" class="customer-offering-page pt-lg-5 pb-5 mt-lg-5 mt-3 mb-lg-5">
        <div class="dealeroffer hr-dealeroffer pt-3 px-0">
            <div class="container-fluid">
                <div class="row justify-content-center m-0">
                    <div class="col-lg-11 ps-lg-0 ps-3">
                        <div class="Explore_Cusomer_Offer_firstDiv exp-offers ps-2">
                            <div class="Explore_Cusomer_Offer_SubParentDiv">
                                <p class="text-uppercase"><?php echo $top_section['small_heading'];?></p>
                                <div class="Explore_Cusomer_Offer_horizontal_line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center m-0">
                        <div class="col-lg-11 for-padding">
                            <div class="row">
                                <div class="col-lg-6 px-lg-5 pt-lg-4">
                                    <div class="dealer_Container_SecondDiv">
                                        <h2 class="ps-lg-4 fs-60 fresh-approach"><?php echo $top_section['heading'];?></h2>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-lg-5 pt-lg-0 pt-4 p-lg-5">
                                        <!-- <p class="p-lg-5">We are accelerating our transformation towards a better
                                            tomorrow
                                            through our Essar-branded service stations with a renewed purpose: ‘Driving
                                            Community Convenience’. This initiative focuses on meeting the needs of
                                            local communities, turning our sites into essential hubs for the people we
                                            serve. We are committed to delivering on this promise by making interactions
                                            effortless for customers and streamline operations for our staff.</p> -->
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
    <!--enhancing your experience section start-->
    <section id="enhancing-your-experience-section" class="pb-1">
        <div class="enhancing-your-experience mt-3">
            <div class="container">
                <div class="row justify-content-center px-4 pt-lg-4">
                    <div class="col-lg-10 pt-5">
                        <div class="row">
                            <div class="col-lg-6 pe-5 ps-2 ps-lg-0 pt-lg-4">
                                <div class="dealer_Container_SecondDiv">
                                    <h2 class="fs-60"><?php echo $enhancing_experience['heading']?></h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-5">
                                    <!-- <p class="p-lg-4">With a focus on convenience, quality, and customer satisfaction,
                                        we've tailored our services to meet your needs on the road. Whether you're
                                        dashing between meetings, embarking on a cross-country road trip, or simply
                                        running errands, our offers are designed to fuel your journey.</p> -->
                                        <?php echo $enhancing_experience['description']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-p-b d-none d-lg-block align-items-center">
                    <div class="col-lg-12 p-0">
                        <div class="eighteen-div">
                            <div class="content-feature-slider">
                                <div class="d-flex content-feature-wrapper">

                                    <div class="slider-imgtab col-xl-5">
                                        <div class="cust-slider-img">
                                            <?php
                                                foreach($enhancing_experience['slider_section'] as $key => $row) {
                                            ?>
                                            <div class="tab-image">
                                                <img src="<?php echo $row['image']; ?>" class="img-fluid w-100" alt="image">
                                            </div>
                                            <?php }?>
                                           
                                        </div>

                                    </div>
                                    <div class="slider-navtab">
                                        <div class="cust-slider-nav">
                                            <?php
                                                foreach($enhancing_experience['slider_section'] as $key => $row) {
                                            ?>
                                            <div>
                                                <div class="slider-tab">
                                                    <div class="d-flex">
                                                        <h1 class="title"><?php echo $row['title']; ?></h1>
                                                    </div>
                                                    <p class="inner-para ps-lg-2"><?php echo $row['description']; ?></p>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-p-b mobile-only align-items-center">
                    <!-- <div class="col-lg-6 pe-0 ps-0">
                        
                        <div id="test1Content" class="tabcontent active">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-offering/img-1.png" class="img-fluid w-100" alt="image">
                        </div>
                        <div id="test2Content" class="tabcontent">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-offering/img-2.png" class="img-fluid w-100" alt="image">
                        </div>
                        <div id="test3Content" class="tabcontent">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-offering/img-3.png" class="img-fluid w-100" alt="image">
                        </div>
                    </div> -->
                    <div class="col-lg-6">
                        <div>
                            <!--  -->
                            <?php
                                foreach($enhancing_experience['slider_section'] as $key => $row) {
                            ?>
                            <div class="tab active mt-4 mb-4 for-border" id="test1Tab">
                                <div id="test1Content" class="tabcontent active">
                                    <img src="<?php echo $row['image']; ?>" class="img-fluid rounded-5 w-100" alt="image">
                                </div>
                                <div class="d-flex">
                                    <!-- <h4>1</h4> -->
                                    <h1 class=""><?php echo $row['title']; ?></h1>
                                </div>
                                <p class="inner-para"><?php echo $row['description']; ?></p>
                            </div>
                            <?php }?>
                            
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--enhancing your experience section end-->

<?php get_footer(); ?>