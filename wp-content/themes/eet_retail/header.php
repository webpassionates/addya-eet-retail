<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
ob_start();
show_admin_bar(0);
global $show_footerWidget;
$show_footerWidget = true;

?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="key, words" />
	<meta name="description" content="Website description" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<title>EET - Retail</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" /> -->
	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/scss/style.css" type="text/css" /> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css"> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" /> -->


	<?php wp_head(); ?>
	
</head>
<?php 
	$postnameClass = ($post)?$post->post_name:"";
?>

<body <?php ((!is_front_page()) ? body_class('other--page ' . $postnameClass) : body_class('is-frontpage home-inviteContiner')) ?>>
	<!-- begin header -->
	<?php if (!is_front_page()) { ?>
		<div class="dummy-header"></div>
	<?php } ?>
	
		<section id="top-header">
		<div class="topheader">
			<div class="container">
			<nav class="navbar main-menu navbar-expand-lg pt-4">
				<div class="container-fluid header-width">
				<a class="navbar-brand" href="<?php echo get_the_permalink(7) ?>"><img class="logo-white" src="<?php echo get_template_directory_uri(); ?>/assets/images/EET-Retail-Logo-white.svg"> <img class="logo-color" src="<?php echo get_template_directory_uri(); ?>/assets/images/EET_Retail_Logo_color.svg"></a>
				<button class="navbar-toggler mobile-menu" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
					<li class="nav-item">
						<a class="nav-link active text-white fw-semibold" aria-current="page" href="<?php echo get_the_permalink(2) ?>">Who We Are</a>
					</li>
					<li class="nav-item dropdown" onmouseover="openDropdown()" onmouseout="closeDropdown()">
						<a class="nav-link text-white fw-semibold dropdown-toggle" href="#" role="button"
						aria-expanded="false">
						Business Offers <i class="fa-solid fa-chevron-down"></i>
						</a>
						<ul class="dropdown-menu px-2" id="dropdownMenu">
							<li><a class="dropdown-item pt-4 fw-bold" href="<?php echo get_the_permalink(3) ?>">Leasing Offer</a></li>
							<li><a class="dropdown-item pt-3 fw-bold" href="<?php echo get_the_permalink(13) ?>">Contract Manager Offer</a></li>
							<li><a class="dropdown-item pt-3 pb-4 fw-bold" href="<?php echo get_the_permalink(15) ?>">Dealer Offer</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white fw-semibold active" aria-current="page"href="<?php echo get_the_permalink(17) ?>">Customer Offers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white fw-semibold active" aria-current="page" href="<?php echo get_the_permalink(19) ?>">Our Locations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white fw-semibold active" aria-current="page" href="<?php echo get_the_permalink(21) ?>">News</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo get_the_permalink(23) ?>" class="nav-link text-decoration-none speak-hover-btn header-menu" id="speakToUsBtn">
						<span class="text-color fw-semibold">Speak To Us</span> 
						<svg class="ms-5 d-lg-none" width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
							d="M11.8657 11.8557C11.5942 11.8557 11.3478 11.7457 11.1696 11.5675C10.9914 11.3893 10.8814 11.1429 10.8814 10.8715L10.8814 3.50328L2.2106 12.1741C1.82639 12.5583 1.20344 12.559 0.818528 12.1741C0.433622 11.7892 0.434318 11.1663 0.818529 10.782L9.48936 2.11121L2.12119 2.11121C1.5769 2.11121 1.13696 1.67128 1.13696 1.12698C1.13696 0.582679 1.5769 0.142742 2.12119 0.142742L11.8643 0.142742C11.9938 0.142742 12.1211 0.168416 12.2422 0.218531C12.4824 0.318064 12.6746 0.51028 12.7741 0.750412C12.8242 0.871522 12.8499 0.998874 12.8499 1.12834L12.8499 10.8714C12.8499 11.4157 12.41 11.8557 11.8657 11.8557Z"
							fill="#FFFFFF" />
						</svg>
						</a>
					</li>
					<li class="nav-item position-relative d-none d-lg-block">
						<div class="icon-input">
						<form action="<?php echo site_url(); ?>">
							<!-- <input type="text" name="s" class="search-input" placeholder="Start typing to search"> -->
							<input id="searchInput" name="s" class="icon-input__text-field border-0" type="text" placeholder="Search ">
						</form>
						
						<i id="searchIcon" class="icon-input__icon material-icons text-white"><i
							class="fa-solid fa-magnifying-glass fs-4" id="glass"></i></i>
						</div>
					</li>
					</ul>
				</div>
				</div>
			</nav>
			</div>
		</div>
		</section>