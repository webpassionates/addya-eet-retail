<?php

/**
 * Template Name: Leasing Offer Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Elvaan
 * @since Elvaan 1.0
 */
$page_banner_section = get_field('page_banner_section');
$top_section = get_field('top_section');
$values_section = get_field('values_section');
?>
<?php get_header(); ?>
<main id="leasingoffer-page">
	<section id="leasing-offer-banner" class="">
		<div class="home---baner leasingofferbanner pb-5 " style="background: url(<?php echo $page_banner_section['banner_image'];?>); background-repeat: no-repeat;">
			<div class="container ">
				<div class="row row-height">
					<div class="col-lg-12">
						<div class="banner-bg">
							<h2 class="text-white pb-2"><?php echo $page_banner_section['banner_title'];?></h2>
							<p class="text-white"><?php echo $page_banner_section['banner_sub_title'];?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	 <!-- From refinery to forecourt section Start -->
	 <section class="my-5 py-5 refinery-forecourt--section">
		<div class="container container-custom py-lg-5">
			<div class="Explore_Cusomer_Offer_SubParentDiv content-heading-section">
				<div class="white-box">
					<h5 class="text-uppercase white-box"><?php echo $top_section['small_heading'];?></h5>
				</div>
				<div class="horizontal_line"></div>
			</div>

			<div class="row">
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
	<!--competetive receive start-->
	<section id="competetive-receive" class="mb-lg-5">
		<div class="competetivereceive">
			<div class="container ps-0">
				<div class="row row-p-b d-none d-lg-block align-items-center">
					<div class="col-lg-12 p-0">
						<div class="eighteen-div">

							<div class="content-feature-slider">
								<div class="d-flex content-feature-wrapper">
									<div class="slider-navtab">
										<div class="Explore_Cusomer_Offer_firstDiv">
											<div class="Explore_Cusomer_Offer_SubParentDiv">
												<p class="text-uppercase"><?php echo $values_section['values_section_heading']?></p>
												<div class="Explore_Cusomer_Offer_horizontal_line"></div>
											</div>
										</div>
										<div class="cust-slider-nav">
											<?php
												foreach($values_section['values_section_items'] as $key => $row){
											?>
											<div>
												<div class="slider-tab col-xl-5  py-4 ps-4 mt-4">
													<div class="d-flex">
														<h4><?php echo ( $key + 1 )?></h4>
														<h1 class="ps-4 title"><?php echo $row['title']?></h1>
													</div>
													<p class="inner-para">
														<?php echo $row['description']?>
													</p>
												</div>
											</div>
											<?php
												}
											?>
										</div>
									</div>
									<div class="slider-imgtab col-xl-5">
										<div class="cust-slider-img">
											<?php
												foreach($values_section['values_section_items'] as $key => $row){
											?>
											<div class="tab-image">
												<img src="<?php echo $row['image']; ?>"
													class="img-fluid w-100" alt="image">
											</div>
											<?php
												}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row row-p-b mobile-only align-items-center mb-5">
					<div class="col-lg-6 ps-0">
						<div class="eighteen-div ms-4 ps-2">
							<div class="Explore_Cusomer_Offer_firstDiv">
								<div class="Explore_Cusomer_Offer_SubParentDiv">
									<p class="text-uppercase"><?php echo $values_section['values_section_heading']?></p>
									<div class="Explore_Cusomer_Offer_horizontal_line"></div>
								</div>
							</div>
							<?php
								foreach($values_section['values_section_items'] as $key => $row){
									$mtClass = "";
									if($key == 0)
										$mtClass = " mt-4";
							?>
							<div class="tab py-4 active<?php echo $mtClass;?>" id="test<?php echo ( $key + 1 )?>Tab">
								<div id="test1Content" class="tabcontent active">
									<img src="<?php echo $row['image']; ?>" class="img-fluid w-100"
										alt="image">
								</div>

								<div class="d-flex">
									<h4>1</h4>
									<h1 class="ps-lg-4"><?php echo $row['title']?></h1>
								</div>
								<p class="inner-paraa"><?php echo $row['description']?></p>
							</div>
							<?php
								}
							?>
							<!-- <div class="tab py-4 active" id="test2Tab">
								<div id="test2Content" class="tabcontent active">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/leasing-offer/stability.png" class="img-fluid w-100"
										alt="image">
								</div>

								<div class="d-flex">
									<h4>2</h4>
									<h1 class="ps-lg-4">Financial stability</h1>
								</div>
								<p class="inner-paraa">Enjoy peace of mind with secure rental income, supported by
									the
									robust covenant strength of Stanlow, our energy transition hub, reinforcing
									confidence in the long-term success and security of your investment.</p>
							</div>
							<div class="tab py-4 active" id="test3Tab">
								<div id="test3Content" class="tabcontent active">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/leasing-offer/proposal.png" class="img-fluid w-100" alt="image">
								</div>

								<div class="d-flex">
									<h4>3</h4>
									<h1 class="ps-lg-4">Timely proposal</h1>
								</div>
								<p class="inner-paraa">Benefit from our tailor-made and rapid business setup,
									allowing you to establish and thrive in a short period of time. </p>
							</div> -->
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<div class="empty-div-leasing-offer">&nbsp;</div>
</main>
<?php get_footer(); ?>