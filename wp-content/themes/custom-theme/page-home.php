<?php
/**
Template Name: Homepage
 */
?>
<?php get_header(); ?>
<br class="clear" />
<section class="slider clear" style="position: relative;bottom: 0px;">
    <div class="large-12 columns">
        <?php 
            $slider_data = $wpdb->get_results("SELECT  meta_value FROM wp_postmeta WHERE post_id =28 AND meta_key ='nivo_settings' LIMIT 1"); 
            $slider_settings   = unserialize($slider_data[0]->meta_value);
            $slider_images_ids = $slider_settings['manual_image_ids'];
            $slider_images     = $wpdb->get_results("SELECT  guid, post_excerpt FROM wp_posts WHERE id IN(" . $slider_images_ids . ")");                
        ?>
        <div class="owl-carousel owl-1 owl-theme">
            <?php foreach( $slider_images as $i ){ ?>
               <div class="item slider-bg" style="height:615px;display: block;background-size:cover;background-image: url('<?php echo $i->guid; ?>')">   
                    <div class="container owl-slider owl-content">
                       <div class="col-xs-6 left">
                            <div class="col-xs-12 center banner">
                                <img class="cover" style="max-width: 220px;margin: 0 auto;margin-bottom: 20px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/banner-icon.png"; ?>">
                                <h2 class="b-2">Get a Free Moving Estimate</h2>
                                <a class="color-white" href="#">CLICK HERE</a>
                            </div>
                       </div>
                       <div class="col-xs-6 left">
                            <div class="col-xs-12 center banner">
                                <img class="cover" style="max-width: 220px;margin: 0 auto;margin-bottom: 20px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/banner-icon-2.png"; ?>">
                                <h2>Setup an In-House Home Estimate</h2>
                                <a class="color-white" href="#">CLICK HERE</a>
                            </div>
                       </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>  
<section class="partners clear" style="background-color: #fbfbfb;position: relative;bottom: 0px;border-bottom: 2px solid #e5e5e5;">
    <div class="container partners" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="col-xs-12 col-sm-6 col-md-3 center left">
             <img class="cover padding-img" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/yelp-icon.png"; ?>">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 center left">
             <img style="margin-top: 20px;" class="cover padding-img" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/yellow-pages-icon.png"; ?>">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 center left" style="text-align: center;"> 
             <img style="margin: 0 auto;text-align: center; margin-top: 16px;" class="cover padding-img" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/google-icon.png"; ?>">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 center left">
             <img style="margin-top: 23px;" class="cover padding-img" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/angies-list.png"; ?>">
        </div>
    </div>
</section>
<section class="services clear" style="padding-top:60px;padding-bottom:60px;background-color: #fbfbfb;">
    <div class="container content service-container">
       <h1 class="uppercase center">Moving Services</h1>
       <hr/>
       <div class="col-xs-12 col-sm-5 col-md-4 center service-block left">
             <img class="cover-service" style="margin-bottom:30px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/service-1.png"; ?>">
             <h2>Packing Service</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        </div>
       <div class="col-xs-12 col-sm-5 col-md-4 center service-block left">
             <img class="cover-service" style="margin-bottom:30px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/service-2.png"; ?>">
             <h2>Moving Helpers</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        </div>
       <div class="col-xs-12 col-sm-5 col-md-4 center service-block left">
             <img class="cover-service" style="margin-bottom:30px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/service-3.png"; ?>">
             <h2>Local Movers</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        </div>
       <div class="col-xs-12 col-sm-5 col-md-4 center service-block left">
             <img class="cover-service" style="margin-bottom:30px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/service-4.png"; ?>">
             <h2>Long Distance Movers</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        </div>
       <div class="col-xs-12 col-sm-5 col-md-4 center service-block left">
             <img class="cover-service" style="margin-bottom:30px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/service-5.png"; ?>">
             <h2>Commercial Movers</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        </div>
       <div class="col-xs-12 col-sm-5 col-md-4 center service-block left">
             <img class="cover-service" style="margin-bottom:30px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/service-6.png"; ?>">
             <h2>Piano Movers</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        </div>
    </div>
</section>
<section class="testimonial clear" style="padding-top:60px;padding-bottom:30px;background-color: #fbfbfb;">
    <div class="container content">
       <h1 class="uppercase center">Our happy customers</h1>
       <hr/>
        <div class="row" style="margin-top:80px !important;padding-bottom:60px;">
            <div class="owl-carousel owl-2 owl-theme">
                <div class="item testimonial-container">
                    <img class="circular" style="margin: 0px auto;margin-bottom:30px;max-width: 180px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/testimonial-pic.png"; ?>">
                    <br/>
                    <i class="fa fa-quote-left" style="color:#c42026;text-align: center;font-size: 28px;width: 100%;" aria-hidden="true"></i>
                    <p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    <h3 class="uppercase">John Doe</h3>
                </div>

            </div>
         </div>
         <a class="view-more" href="#">View more user reviews >></a>
    </div>
</section>
<section class="banner-2 clear" style="padding-top:60px;padding-bottom:30px;background-color: #fbfbfb;">
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
<?php get_footer(); ?>