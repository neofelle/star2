<section class="banner-2 clear" style="padding-top:60px;padding-bottom:30px;background-color: #fbfbfb;">
   <div class="row banner inner-banner" style="padding: 0px !important;background: url('<?php echo get_template_directory_uri() . "/assets/images/homepage/service-area.png"; ?>') no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <div class="row banner-content" style="padding-top: 45px;padding-bottom: 50px;">
            <div class="container content center">
                <h1 class="uppercase center color-white">Service Areas</h1>
                <hr style="border-top: 7px solid #ffd602; margin-bottom: 45px !important;" />
                <div class="col-md-12 no-space">
                    <ul class="service-area">
                    <?php    
                        $args = array(
                        'post_type' => 'services_areas',
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                        );
                         
                        $the_query = new WP_Query( $args );
                         
                        if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                        $the_query->the_post();                        
                    ?>

                        <?php 
                            $image = "";
                            if (has_post_thumbnail( $post->ID ) ){
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                            }
                        ?>
                        <li><a href="<?php echo $post->guid; ?>"><?php echo get_the_title(); ?></a></li>
                    <?php
                        }
                        } else {
                        // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();         
                    ?>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
</section>
<section class="footer">
    <div class="container footer-container" style="padding-top: 45px;padding-bottom: 45px;">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-1') ) : ?>
        <?php endif; ?>
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
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-2') ) : ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="logo-footer" style="background-color: black;">
    <div class="container bottom-footer" style="padding-top: 45px;padding-bottom: 45px;"> 
        <div class="col-sm-6 left footer logo-footer" style="border-right: 2px solid white;">
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