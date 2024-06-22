<?php

/**
 * Template Name: Who We Are Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Elvaan
 * @since Elvaan 1.0
 */
$page_banner_section = get_field('page_banner_section');
$top_section = get_field('top_section');
$page_content_section_2 = get_field('page_content_section_2');

?>
<?php get_header(); ?>
	<section id="banner-section">
		<div class="banner">
		<div class="container-fluid">
			<div class="background-banner-img position-relative d-flex align-items-center">
			<div class="MobileView_WhoWeAre">
				<div class="MobileView_WhoWeAre_Img">
				<img src="<?php echo $page_banner_section['banner_image'];?>" alt="ceo image">
				</div>
			</div>
			<div class="content position-absolute">
				<div class="fs-3 text-white">
					<?php echo $page_banner_section['description'];?>
				<!-- <div class="animated-text">"At EET Fuels, we are crafting a promising</div>
				<div class="animated-text">future for our commercial partners and the</div>
				<div class="animated-text">communities we serve through our Retail</div>
				<div class="animated-text">business. As we expand and evolve, our</div>
				<div class="animated-text">goal is not only to fuel journeys, but to do</div>
				<div class="animated-text">so in a way that is sustainable and</div>
				<div class="animated-text">innovative, ensuring the company remains</div>
				<div class="animated-text">a key player in the UK's energy transition."</div> -->
				</div>
				<h5 class="mt-4 mt-lg-5 mt-xl-4"><?php echo $page_banner_section['banner_sub_title'];?></h5>
				<h6><?php echo $page_banner_section['banner_title'];?></h6>
			</div>
			</div>
		</div>
		</div>
	</section>


	<!-- End -->

	<!-- From refinery to forecourt section Start -->

	<section class="refinery-forecourt--section mt-xxl-5 pt-xxl-5">
		<div class="container container-custom">
		<div class="Explore_Cusomer_Offer_SubParentDiv content-heading-section">
			<div class="white-box">
			<h5 class="text-uppercase white-box"><?php echo $top_section['small_heading'];?></h5>
			</div>
			<div class="horizontal_line"></div>
		</div>

		<div class="row WhoWeAre_Refinery">
			<div class="col-xl-4">
			<div class="Refinery_Container_SecondDiv content-left-section">
				<h2><?php echo $top_section['heading'];?></h2>
			</div>
			</div>
			<div class="col-xl-8 content-right-section">
			<div class="content-text">
				<?php echo $top_section['description'];?>
			</div>
			</div>
		</div>
		</div>
	</section>
	<!-- End -->
<?php
	foreach($page_content_section_2 as $key => $page_content) {
		//print_r($page_content);
		if($page_content['image_position'] == "Left"){
?>
	<!-- Quality fuels and security Section Start -->
	<section class="quality-fuels-and-security-section">
		<div class="quality-fuels-and-security pe-xl-5 pe-sm-0">
			<div class="">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<img src="<?php echo $page_content['image']?>" alt="image" class="content-image">
					</div>
					<div class="col-lg-6">
						<div class="ps-xl-5 ps-xxl-5  ps-sm-0">
						<div class="Explore_Cusomer_Offer_firstDiv">
							<div class="Explore_Cusomer_Offer_SubParentDiv">
							<div class="circle d-flex justify-content-center align-items-center">
								<strong class="text-white"><?php echo ($key +1)?></strong>
							</div>
							<div class="Explore_Cusomer_Offer_horizontal_line"></div>
							</div>
						</div>
						<div class="content">
							<h2><?php echo $page_content['heading']?></h2>
							<div class="ps-xxl-2 ps-sm-0 ms-xxl-5 ms-sm-0">
								<?php echo $page_content['description']?>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End -->
<?php 
	}
	if($page_content['image_position'] == "No Image"){
?>
	<!-- Added value across Start -->
	<section class="TestMoinals_Container-2" id="added-value-across-section">
		<div class="container container-custom">
			<div class="Explore_Cusomer_Offer_SubParentDiv">
				<div class="circle d-flex justify-content-center align-items-center">
					<strong class="text-white"><?php echo ($key +1)?></strong>
				</div>
				<div class="Explore_Cusomer_Offer_horizontal_line"></div>
			</div>
			<div class="row">
				<div class="col-xl-6">
					<h2 class="supply-chain"><?php echo $page_content['heading']?></h2>
					</div>
					<div class="col-xl-6">
					<div class="mt-lg-5 ps-0">
					<?php echo $page_content['description']?>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End -->
<?php		
	}
	if($page_content['image_position'] == "Right"){
?>
	<!-- Quality fuels and security Section Start -->
	<section class="quality-fuels-and-security-section">
		<div class="quality-fuels-and-security ps-xxl-5 ps-sm-0">
			<div class="">
				<div class="row m-0 align-items-center desk-row-quality">
					<div class="col-lg-6 left-div">
						<div class="pe-xxl-5 ps-xxl-4 pe-sm-0 ps-sm-0">
							<div class="Explore_Cusomer_Offer_firstDiv ps-xxl-5 ps-sm-0">
								<div class="Explore_Cusomer_Offer_SubParentDiv ps-xxl-5 ps-sm-0">
								<div class="circle d-flex justify-content-center align-items-center">
									<strong class="text-white"><?php echo ($key +1)?></strong>
								</div>
								<div class="Explore_Cusomer_Offer_horizontal_line"></div>
								</div>
							</div>
							<div class="content ps-xxl-5 ps-sm-0">
								<h2 class="ps-xxl-5 ps-sm-0 ms-xxl-4 ms-sm-0"><?php echo $page_content['heading']?></h2>
								<div class="content-p-wrapper">
								
								<?php echo $page_content['description']?>
								
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 text-end p-0">
						<img src="<?php echo $page_content['image']?>" alt="image" class="content-image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End -->
<?php
	}
}
?>
<div class="who-we-are-empty-div">&nbsp;</div>
	
	<!-- As We advance towards section start -->
	<!-- <section id="as-we-advance-section" hidden>
		<div class="as-we-advance mt-5">
		<div class="position-relative">
			<div class="InviteContiner">
			<p>We invite you to join our growing network and benefit from our secure supply of quality fuels, value driven
				partnerships, and innovative retail solutions. </p>
			<button>Speak to us
				<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M11.8657 11.8557C11.5942 11.8557 11.3478 11.7457 11.1696 11.5675C10.9914 11.3893 10.8814 11.1429 10.8814 10.8715L10.8814 3.50328L2.2106 12.1741C1.82639 12.5583 1.20344 12.559 0.818528 12.1741C0.433622 11.7892 0.434318 11.1663 0.818529 10.782L9.48936 2.11121L2.12119 2.11121C1.5769 2.11121 1.13696 1.67128 1.13696 1.12698C1.13696 0.582679 1.5769 0.142742 2.12119 0.142742L11.8643 0.142742C11.9938 0.142742 12.1211 0.168416 12.2422 0.218531C12.4824 0.318064 12.6746 0.51028 12.7741 0.750412C12.8242 0.871522 12.8499 0.998874 12.8499 1.12834L12.8499 10.8714C12.8499 11.4157 12.41 11.8557 11.8657 11.8557Z"
					fill="#ffffff" />
				</svg>
			</button>
			</div>
		</div>
		</div>
	</section> -->
	<!-- End -->


<?php get_footer(); ?>