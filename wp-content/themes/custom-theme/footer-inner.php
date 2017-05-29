<section class="banner-2 clear" style="padding-top:60px;padding-bottom:30px;background-color: white;">
   <div class="row banner inner-banner" style="padding: 0px !important;background: url('<?php echo get_template_directory_uri() . "/assets/images/homepage/service-area.png"; ?>') no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <div class="row banner-content" style="padding-top: 45px;padding-bottom: 50px;">
            <div class="container content center">
                <h1 class="uppercase center color-white">Service Areas</h1>
                <hr style="border-top: 7px solid #ffd602; margin-bottom: 45px !important;" />
                <div class="col-md-12 no-space">
                    <ul class="service-area">
                        <li><a href="#">NYC</a></li>
                        <li><a href="#">Brooklyn</a></li>
                        <li><a href="#">Bronx</a></li>
                        <li><a href="#">Queens</a></li>
                        <li><a href="#">Staten Island</a></li>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
</section>
<section class="footer">
    <div class="container footer-container" style="padding-top: 45px;padding-bottom: 45px;">
        <div class="col-sm-4 no-space left">
            <h4 class="color-black bold uppercase title">Flat Fee Movers</h4>
            <h4 class="color-gray uppercase">2080 Rose st,</h4>
            <h4 class="color-gray uppercase">Sarasota, FL 34239</h4>
            <h4 class="color-gray uppercase">941-229-1138</h4>
            <h4 class="color-gray uppercase"><a href="#" class="color-gray">http://flatfeemovers.net/</a></h4>
        </div>
        <div class="col-sm-4 no-space left">
            <h4 class="color-black bold uppercase title">Services</h4>
            <?php 
                $menuargs = array(
                    "theme_location" => "primary",
                    "menu_class" => "s-menu",
                    "menu_id" => "service-menu",
                );
                $footer_items = wp_get_nav_menu_items( 'service-menu', $menuargs); 
            ?>
            <?php foreach( $footer_items as $i ){ ?>
                <h4 class="color-gray uppercase"><a href="<?php echo $i->url; ?>" class="color-gray"><?php echo $i->title; ?></a></h4>
            <?php } ?>  
          
        </div>
        <div class="col-sm-4 no-space left">
            <h4 class="color-black bold uppercase title">Follow us</h4>
            <div class="col-md-12 no-space icons">
              <div class="col-xs-3 col-sm-2 col-md-2 left no-space social-icons">
                <a href="#"><img style="width: 100%;height: 100%;max-height: 45px;max-width: 45px;" src="<?php echo get_template_directory_uri() . "/assets/images/footer/facebook.png"; ?>""></a> 
              </div>
              <div class="col-xs-5 col-sm-2 col-md-2 left no-space social-icons">
                <a href="#"><img style="width: 100%;height: 100%;max-height: 45px;max-width: 45px;" src="<?php echo get_template_directory_uri() . "/assets/images/footer/twitter.png"; ?>"></a>  
              </div>
              <div class="col-xs-3 col-sm-2 col-md-2 left no-space social-icons">
                <a href="#"><img style="width: 100%;height: 100%;max-height: 45px;max-width: 45px;" src="<?php echo get_template_directory_uri() . "/assets/images/footer/linked-in.png"; ?>"></a>  
              </div>
              <div class="col-xs-3 col-sm-2 col-md-2 left no-space social-icons">
                <a href="#"><img style="width: 100%;height: 100%;max-height: 45px;max-width: 45px;" src="<?php echo get_template_directory_uri() . "/assets/images/footer/google-plus.png"; ?>"></a>  
              </div>
            </div>
        </div>
    </div>
</section>
<section class="logo-footer" style="background-color: black;">
    <div class="container bottom-footer" style="padding-top: 45px;padding-bottom: 45px;"> 
        <div class="col-sm-6 left footer" style="border-right: 2px solid white;">
            <a href="<?php echo get_option('home'); ?>" style="width: 100%; display: block;text-align: right;">
                <?php the_custom_logo(); ?>
            </a>
        </div>
        <div class="col-sm-6 left contact-footer" style="padding-left: 30px;padding-top: 20px;">
            <?php                   
                $header_number    = $GLOBALS['cgv']['default-contact-number'];
                $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
                if( $cf_header_number != "" ){
                    $header_number = $cf_header_number;
                }
            ?>
            <i style="margin-top: 4px;margin-right: 10px;font-size: 29px;" class="fa fa-phone color-white left contact-icon" aria-hidden="true"></i>
            <p class="left" style="font-size: 32px;color: white;font-weight: bold;margin-top: 6px;"><a style="color:white;" class="contact" href="tel:+<?php echo str_replace("-", "", $header_number); ?>" style="font-size: 16px;color:white;"><?php echo $header_number; ?></a></p>
                    
        </div>

    </div>
</section>
<?php wp_footer();?>
<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>