<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
global $show_footerWidget;
$show_footerWidget = false;
?>

<section id="error-page-banner">
	<div class="error-super">
		<div class="error-super-img">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/error/error.png" alt="error-image">
		</div>
		<div class="error-super-text">
			<h1>Page Not Found</h1>
			<p>Sorry, something went wrong!</p>
			<button class="anim-btn"> <a href="<?php echo site_url(); ?>" class="text-decoration-none text-white"><?php echo "Return Home"; ?>
			<svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
				d="M11.8657 11.8557C11.5942 11.8557 11.3478 11.7457 11.1696 11.5675C10.9914 11.3893 10.8814 11.1429 10.8814 10.8715L10.8814 3.50328L2.2106 12.1741C1.82639 12.5583 1.20344 12.559 0.818528 12.1741C0.433622 11.7892 0.434318 11.1663 0.818529 10.782L9.48936 2.11121L2.12119 2.11121C1.5769 2.11121 1.13696 1.67128 1.13696 1.12698C1.13696 0.582679 1.5769 0.142742 2.12119 0.142742L11.8643 0.142742C11.9938 0.142742 12.1211 0.168416 12.2422 0.218531C12.4824 0.318064 12.6746 0.51028 12.7741 0.750412C12.8242 0.871522 12.8499 0.998874 12.8499 1.12834L12.8499 10.8714C12.8499 11.4157 12.41 11.8557 11.8657 11.8557Z"
				fill="#FFFFFF" />
			</svg>
			</a>
			</button>
		</div>
	</div>
</section>
<div class="empty-div-speak-to-us">&nbsp;</div>
<?php
get_footer();
