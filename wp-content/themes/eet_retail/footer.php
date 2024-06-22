<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$footer_content = get_field('footer_content');
$footer_content_2 = get_field('footer_content_2');
$footer_info = get_field('footer_content', 'options');
global $show_footerWidget;
?>
<?php 
if($show_footerWidget){
    if($footer_content_2['heading']) {
  
?>
  <!--join network start-->
  <section id="join-network">
    <div class="joinnetwork">
      <div class="container">
        <div class="row align-items-center justify-content-center d-flex">
          <div class="col-lg-1"></div>
          <div class="col-lg-5 mb-lg-0 mb-5">
            <div class="network-box mx-1">
              <div class="row align-items-center px-5 justify-content-center">
                <div class="col-lg-7">
                  <h4 class="pt-5 fw-semibold"><?php echo $footer_content['heading'];?></h4>
                  <p class="pb-lg-5"><?php echo $footer_content['description'];?></p>
                </div>
                <div class="col-lg-5 text-end">
                  <button class="anim-btn"> <a href="<?php echo $footer_content['action_button']['button_link'];?>" class="text-decoration-none text-white"><?php echo $footer_content['action_button']['button_label'];?>
                    <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.8657 11.8557C11.5942 11.8557 11.3478 11.7457 11.1696 11.5675C10.9914 11.3893 10.8814 11.1429 10.8814 10.8715L10.8814 3.50328L2.2106 12.1741C1.82639 12.5583 1.20344 12.559 0.818528 12.1741C0.433622 11.7892 0.434318 11.1663 0.818529 10.782L9.48936 2.11121L2.12119 2.11121C1.5769 2.11121 1.13696 1.67128 1.13696 1.12698C1.13696 0.582679 1.5769 0.142742 2.12119 0.142742L11.8643 0.142742C11.9938 0.142742 12.1211 0.168416 12.2422 0.218531C12.4824 0.318064 12.6746 0.51028 12.7741 0.750412C12.8242 0.871522 12.8499 0.998874 12.8499 1.12834L12.8499 10.8714C12.8499 11.4157 12.41 11.8557 11.8657 11.8557Z"
                        fill="#FFFFFF" />
                    </svg>
                  </a>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="network-box mx-1">
              <div class="row align-items-center px-5">
                <div class="col-lg-7">
                  <h4 class="pt-5 fw-semibold"><?php echo $footer_content_2['heading'];?></h4>
                  <p class="pb-lg-5"><?php echo $footer_content_2['description'];?></p>
                </div>
                <div class="col-lg-5 text-end">
                  <button class="anim-btn"> <a href="<?php echo $footer_content_2['action_button']['button_link']['url'];?>" target="<?php echo $footer_content_2['action_button']['button_link']['target']? $footer_content_2['action_button']['button_link']['target']:"";?>" class="text-decoration-none text-white"><?php echo $footer_content_2['action_button']['button_label'];?>
                    <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.8657 11.8557C11.5942 11.8557 11.3478 11.7457 11.1696 11.5675C10.9914 11.3893 10.8814 11.1429 10.8814 10.8715L10.8814 3.50328L2.2106 12.1741C1.82639 12.5583 1.20344 12.559 0.818528 12.1741C0.433622 11.7892 0.434318 11.1663 0.818529 10.782L9.48936 2.11121L2.12119 2.11121C1.5769 2.11121 1.13696 1.67128 1.13696 1.12698C1.13696 0.582679 1.5769 0.142742 2.12119 0.142742L11.8643 0.142742C11.9938 0.142742 12.1211 0.168416 12.2422 0.218531C12.4824 0.318064 12.6746 0.51028 12.7741 0.750412C12.8242 0.871522 12.8499 0.998874 12.8499 1.12834L12.8499 10.8714C12.8499 11.4157 12.41 11.8557 11.8657 11.8557Z"
                        fill="#FFFFFF" />
                    </svg>
                  </a>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
      </div>
    </div>
  </section>
  <!--join network end-->
<?php 
    }
}
?>
<footer>
<?php 
  if($show_footerWidget){
    if($footer_content['heading']){
      if(!$footer_content_2['heading']) {
        if(!$footer_content['image']){  
      ?>
        <section id="footer">
          <div class="InviteContinerr">
            <?php 
              if(!$footer_content['description']){
                $widthClass = "mb-lg-0 home-para";
                if(!$footer_content['action_button']['button_label']) {
                  $widthClass = "w-100 py-4";
                }
            ?>
            <p class="<?php echo $widthClass;?>"><?php echo $footer_content['heading'];?></p>
            <?php
              if($footer_content['action_button']['button_label']) {
            ?>
            <button class="anim-btn"> <a href="<?php echo $footer_content['action_button']['button_link'];?>" class="text-decoration-none text-white"><?php echo $footer_content['action_button']['button_label'];?>
              <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.8657 11.8557C11.5942 11.8557 11.3478 11.7457 11.1696 11.5675C10.9914 11.3893 10.8814 11.1429 10.8814 10.8715L10.8814 3.50328L2.2106 12.1741C1.82639 12.5583 1.20344 12.559 0.818528 12.1741C0.433622 11.7892 0.434318 11.1663 0.818529 10.782L9.48936 2.11121L2.12119 2.11121C1.5769 2.11121 1.13696 1.67128 1.13696 1.12698C1.13696 0.582679 1.5769 0.142742 2.12119 0.142742L11.8643 0.142742C11.9938 0.142742 12.1211 0.168416 12.2422 0.218531C12.4824 0.318064 12.6746 0.51028 12.7741 0.750412C12.8242 0.871522 12.8499 0.998874 12.8499 1.12834L12.8499 10.8714C12.8499 11.4157 12.41 11.8557 11.8657 11.8557Z"
                  fill="#FFFFFF" />
              </svg>
            </a>
            </button>
            <?php
              }
              }
              else
              {
            ?>
            <div class="row col-wrapper align-items-center pt-4">
                <div class="col-lg-8">
                    <p><?php echo $footer_content['heading'];?></p>
                    <h5><?php echo $footer_content['description'];?></h5>
                </div>
                <?php
                  if($footer_content['action_button']['button_label']) {
                ?>
                <div class="col-lg-4 text-end">
                    <button class="anim-btn"><a href="<?php echo $footer_content['action_button']['button_link'];?>" class="text-decoration-none text-white"><?php echo $footer_content['action_button']['button_label'];?>
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.8657 11.8557C11.5942 11.8557 11.3478 11.7457 11.1696 11.5675C10.9914 11.3893 10.8814 11.1429 10.8814 10.8715L10.8814 3.50328L2.2106 12.1741C1.82639 12.5583 1.20344 12.559 0.818528 12.1741C0.433622 11.7892 0.434318 11.1663 0.818529 10.782L9.48936 2.11121L2.12119 2.11121C1.5769 2.11121 1.13696 1.67128 1.13696 1.12698C1.13696 0.582679 1.5769 0.142742 2.12119 0.142742L11.8643 0.142742C11.9938 0.142742 12.1211 0.168416 12.2422 0.218531C12.4824 0.318064 12.6746 0.51028 12.7741 0.750412C12.8242 0.871522 12.8499 0.998874 12.8499 1.12834L12.8499 10.8714C12.8499 11.4157 12.41 11.8557 11.8657 11.8557Z"
                                fill="#FFFFFF" />
                        </svg>
                    </a>
                    </button>
                </div>
                <?php
                  }
                ?>
            </div>
            <?php    
              }
            ?>

          </div>
        </section>
      <?php 
        }
        else{
      ?>
      <section id="footer" class="visit-footer">
            <div id="visit-us-today-section">
                <div class="visit-us-today">
                    <div class="container-fluid">
                        <div class="row justify-content-center m-0 mb-4">
                            <div class="col-lg-10 position-relative">
                                <div class="background-color">
                                    <div class="row align-items-center py-4">
                                        <div class="col-lg-6">
                                            <div class="pt-4 pb-3">
                                                <img src="<?php echo $footer_content['image']?>" alt="map"
                                                    class="ImagFluid">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ps-lg-5 px-4 px-lg-0">
                                            <div class="px-lg-5">
                                                <h1 class="text-white">
                                                  <?php echo $footer_content['heading']?>
                                                </h1>
                                                <div class="text-white pe-lg-5">
                                                  <?php echo $footer_content['description']?>
                                                </div>
                                            </div>
                                            <div class="ps-lg-5 border-btn">
                                                <div class="anim-btn-border-2"> <a href="<?php echo $footer_content['action_button']['button_link']?>"
                                                        class="text-decoration-none text-white text-color"><?php echo $footer_content['action_button']['button_label']?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TestmonialNext.png" alt="icon">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-lg-block d-none row">
                                    <div class="col-lg-12 ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-offering/curve-img.png" style="position: absolute;"
                                            class="img-fluid curve-img" alt="image" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-offering/curve-two.png" alt=""
                                            style="position: absolute; bottom: 7.8%; right: 0.7%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </section>
      <?php    
        }
      }
    }
  }
  ?>
    <div class="footer_Continer pt-5">
      <div class="footer mt-5 mt-lg-0">
        <div class="column mobile-column">
          <div class="row_Logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/EET-Retail-Logo-white.svg" alt="Logo">
          </div>
          <div class="row pe-lg-5"><?php echo $footer_info['description']?>
          </div>
          <div class="NavigateTo_EarthGlobe mt-4 pt-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/earth_globe_fooer.png" alt="Logo">
            <p class="mb-0">
              <a href="<?php echo $footer_info['button_link']['button_link']['url']?>" target="<?php echo $footer_info['button_link']['button_link']['target']?$footer_info['button_link']['button_link']['target']:"";?>" class="text-white text-decoration-none visit-eet">
                <?php echo $footer_info['button_link']['button_text']?>
              </a>
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/earth_globe_arrow_footer.png" alt="Arrow_Logo">
          </div>
        </div>
        <div class="column d-lg-block d-none">
        <?php
          if (is_active_sidebar('footer-01')) {
            dynamic_sidebar('footer-01');
          }
				?>
        </div>
        <div class="column d-lg-block d-none">
          <?php
            if (is_active_sidebar('footer-02')) {
              dynamic_sidebar('footer-02');
            }
          ?>
        </div>
        
        <div class="column text-start d-none d-lg-block">
        <?php
            if (is_active_sidebar('footer-03')) {
              dynamic_sidebar('footer-03');
            }
          ?>
        </div>
        <div class="column text-start mobile-only w-100">
          
        <?php
            if (is_active_sidebar('footer-03-mobile')) {
              dynamic_sidebar('footer-03-mobile');
            }
          ?>

        </div>

      </div>
      <div class="row m-0">
        <div class="col-lg-12 text-center">
          <div class="pt-4 pb-3 footer-copyright"><?php
            if (is_active_sidebar('footer-copyright')) {
              dynamic_sidebar('footer-copyright');
            }
          ?></div>
        </div>
      </div>
    </div>
  </footer>
<?php
  /*
?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <?php
  */
?>
<?php wp_footer(); ?>
</body>

</html>