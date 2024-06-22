<?php

/**
 * Template Name: Speak To Us Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Elvaan
 * @since Elvaan 1.0
 */
$page_banner_section = get_field('page_banner_section');
$top_section = get_field('top_section');
$contact_information = get_field('contact_information');
?>
<?php get_header(); ?>
<main id="speakus-page">
	<!--banner start-->
	<section id="speaktous-banner">
            <div class="speaktous pb-5" style="background: url(<?php echo $page_banner_section['banner_image'];?>); background-size: 100%; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row row-height">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner end-->
		<!-- From refinery to forecourt section Start -->
        <section id="lets-connect" class="pb-4">
            <div class="letsconnect px-lg-4 mb-lg-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 p-0 pt-xxl-5 pt-sm-0 mt-xxl-5 mt-sm-0">
                            <div class="lets_connect_firstDiv">
                                <div class="lets_connect_SubParentDiv ps-4">
                                    <p class="ps-xxl-4 ps-sm-0"><?php echo $top_section['small_heading'];?></p>
                                    <div class="lets_connect_horizontal_line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="justify-content-center px-xl-4 px-sm-0">
                            <div class="col-lg-12 px-xl-5 px-sm-0">
                                <div class="row mb-xxl-5">
                                    <div class="col-lg-6 ps-xl-5 ps-sm-0">
                                        <div class="lets_connect_SecondDiv pt-4 ps-2">
                                            <h2 class="ps-xxl-5 px-sm-0 fs-60"><?php echo $top_section['heading'];?></h2>
                                        </div>
                                        <div class="lets_connect_ThirdDiv ps-2 pt-4">
                                            <div class="ps-xxl-5 ps-sm-0 ms-1 ">
                                                <div class="d-flex">
                                                    <div class="iconcontainer text-center text-white">
                                                        <i class="fa-regular fa-envelope"></i>
                                                    </div>
                                                    <div class="iconinfo ms-3">
                                                        <div class="iconheading">
                                                            <p class="fw-semibold">EMAIL</p>
                                                        </div>
                                                        <div class="iconinformation">
                                                            <p class="pt-2"><?php echo $contact_information['email'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="iconcontainer text-center text-white">
                                                        <i class="fa-solid fa-phone"></i>
                                                    </div>
                                                    <div class="iconinfo ms-3">
                                                        <div class="iconheading">
                                                            <p>PHONE</p>
                                                        </div>
                                                        <div class="iconinformation">
                                                            <p class="pt-2"><?php echo $contact_information['phone'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="iconcontainer text-center text-white">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="iconinfo ms-3">
                                                        <div class="iconheading">
                                                            <p>ADDRESS</p>
                                                        </div>
                                                        <div class="iconinformation">
                                                            <p class="pt-2"><?php echo $contact_information['address'];?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="me-xl-4 mt-5">
                                            <form action="submit-contact.php" class="lets_connect_form p-5"
                                                id="contactForm" method="POST">
                                                <p class="sucess-message" style="display: none;">Thanks for submiting
                                                    you rdetails.</p>
                                                <p class="empty-message" style="display: none;">Please fill all the
                                                    fields.</p>
                                                <p class="error-message" style="display: none;">There is technical error
                                                    occured, Please try after sometime.</p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="fname" class="pb-2">First name</label>
                                                        <input type="text" id="fname" name="fname"
                                                            class="py-1 for-width" placeholder="First name" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="lname" class="pb-2">Last name</label>
                                                        <input type="text" id="lname" name="lname"
                                                            class="py-1 for-width" placeholder="Last name" required>
                                                    </div>
                                                </div>
                                                <div class="my-3">
                                                    <label for="email" class="pb-2">Email</label>
                                                    <div>
                                                        <input type="email" id="email" name="email"
                                                            placeholder="you@company.com" class="w-100 py-1 for-width"
                                                            required>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="lname" class="pb-2">Message</label>
                                                    <div>
                                                        <textarea id="message" name="message"
                                                            placeholder="Leave us a message..." required></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="bg-transparent w-100 py-1 mt-4">Submit
                                                    Message</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End -->
        <div class="empty-div-speak-to-us">&nbsp;</div>
</main>
<?php get_footer(); ?>
