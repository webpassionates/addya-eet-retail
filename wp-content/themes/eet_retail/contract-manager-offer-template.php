<?php

/**
 * Template Name: Contract Manager Offer Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Elvaan
 * @since Elvaan 1.0
 */
$page_banner_section = get_field('page_banner_section');
$top_section = get_field('top_section');
$key_benefits = get_field('key_benefits');
$key_responsibilities = get_field('key_responsibilities');
?>
<?php get_header(); ?>
<main id="contractmanager-page">
	<!--banner start-->
	<section id="contract-manager-banner">
		<div class="home---baner dealerofferbanner pb-5" style="background: url(<?php echo $page_banner_section['banner_image'];?>); background-size: 100%; background-repeat: no-repeat;">
			<div class="container">
				<div class="row row-height">
					<div class="col-lg-12">
						<div class="banner-bg">
							<!-- <h2 class="text-white pb-2"> -->
								<h2 class="text-white pb-xxl-2 pb-sm-0">
								<?php echo $page_banner_section['banner_title'];?></h2>
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
	<section id="dealer-offer" class="pt-lg-5 pb-lg-5 mb-3">
		<div class="dealeroffer cont-m-offer px-xxl-5 px-sm-1">
			<div class="container-fluid px-3">
				<div class="justify-content-center px-xxl-5 px-sm-1 row">
					<div class="col-lg-12 p-0">
						<div class="Explore_Cusomer_Offer_firstDiv exp-dealer">
							<div class="Explore_Cusomer_Offer_SubParentDiv sub-border">
								<p class="text-uppercase"><?php echo $top_section['small_heading'];?></p>
								<div class="Explore_Cusomer_Offer_horizontal_line"></div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center px-lg-4 px-xl-0">
						<!-- <div class="col-lg-12 px-5"> -->
							<div class="col-lg-12 col-xl-12 px-lg-5 px-xl-1">
							<div class="row px-0">
								<div class="col-lg-6 col-xl- partner-col">
									<div class="dealer_Container_SecondDiv ms-lg-4  ms-xl-0 ms-xl-2 ps-lg-2 ps-xl-0 ps-xl-5">
										<h2 class="fs-60"><?php echo $top_section['heading'];?></h2>
									</div>
								</div>
								<div class="col-lg-6 col-xl-6">
									<div class="contract_Class_Width mt-xxl-5 mt-sm-0 pe-lg-4 text-justify">
									<?php echo $top_section['description'];?>
										<!-- <p class="pe-lg-4 text-justify ">As EET Fuels continues to extend its forecourt
											network across the UK, we
											are keenly searching for experienced business partners eager to manage
											our company-operated service stations. Under this business model, you
											can operate and grow your own business with EET Fuel’s support and take
											advantage of our competitive pricing and guaranteed income.</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End -->

	<!--key benefits start-->
	<section id="key-carousel">
		<div class="keycarousel mx-3 pb-xxl-5 pb-sm-0">
			<div class="container">
				<div class="row pt-xxl-5 px-4 px-lg-0 pt-sm-0">
					<div class="col-lg-1"></div>
					<div class="col-lg-11">
						<h2 class="ps-1"><?php echo $key_benefits['values_section_heading']?></h2>
					</div>
				</div>
				<div class="row pb-5">
					<div class="col-lg-1"></div>
					<div class="col-lg-5">
						<div class="key-resp-carousel owl-carousel owl-theme">
							<?php
								foreach($key_benefits['values_section_items'] as $key => $row){
							?>
							<div class="item px-lg-1"><img src="<?php echo $row['image']; ?>" class="img-fluid slide-img" alt="image"></div>
							<?php }?>
							
						</div>
					</div>
					<div class="col-lg-5">
						<div class="key-benefits-carousel owl-carousel owl-theme">
							<?php
								foreach($key_benefits['values_section_items'] as $key => $row){
							?>
							<div class="item">
								<img src="<?php echo $row['icon']; ?>" class="img-fluid key-icon"
									alt="icon">
								<h4 class="pt-4 text-white"><?php echo $row['title']; ?></h4>
								<p class="pt-3 text-white"><?php echo $row['description']; ?></p>
							</div>
							<?php }?>
						</div>
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
		</div>
	</section>
	<!--key benefits end-->

	<!--key responsibilities start-->
	<section id="key-responsibilities">
		<div class="keyresp pt-lg-5 mt-5">
			<div class="container ps-0">
				<div class="key_res_MB row align-items-center pe-xxl-5 pe-sm-0">
					<div class="col-lg-6 col-xl-7  ">
						<img src="<?php echo $key_responsibilities['image']?>" class="img-fluid key-img"
							alt="img-fluid">
					</div>
					<div class="NewClassKey col-lg-6 col-xl-5  pe-5 ">
						<h2 class="ps-2 fs-60 pt-0"><?php echo $key_responsibilities['section_heading']?></h2>
						<?php
							foreach($key_responsibilities['heading_text'] as $key => $row){
						?>
						<div class="d-flex ps-2 pe-lg-5 pe-xl-2 pt-4">
							<img src="<?php echo $key_responsibilities['icon_image']?>"
								class="img-fluid img-thumbnail ps-0" alt="icon">
							<h5 class="ps-3"><?php echo $row['text_line']?></h5>
						</div>
						<?php }?>
						<!-- <div class="d-flex ps-2 pe-lg-5 pe-xl-2 pt-4">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer-offer/check-icon.png"
								class="img-fluid img-thumbnail ps-0" alt="icon">
							<h5 class="ps-3">Recruit and manage staff to ensure efficient business operations.</h5>
						</div>
						<div class="d-flex ps-2 pe-lg-5 pe-xl-2 pt-4">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer-offer/check-icon.png"
								class="img-fluid img-thumbnail ps-0" alt="icon">
							<h5 class="ps-3">Uphold exceptional levels of customer service and adhere to brand
								standards.</h5>
						</div>
						<div class="d-flex ps-2 pe-lg-5 pe-xl-2 pt-4">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer-offer/check-icon.png"
								class="img-fluid img-thumbnail ps-0" alt="icon">
							<h5 class="ps-3">Engage in sales promotions and marketing campaigns established by our
								brand.</h5>
						</div>
						<div class="d-flex ps-2 pe-lg-5 pe-xl-2 pt-3">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer-offer/check-icon.png"
								class="img-fluid img-thumbnail ps-0" alt="icon">
							<h5 class="ps-3">Liaise with the Area Manager designated by EET Fuels to improve the
								day-to-day operations of the business.</h5>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="empty-div-contract-manager">&nbsp;</div>
	<!--key responsibilities end-->
</main>

<?php get_footer(); ?>