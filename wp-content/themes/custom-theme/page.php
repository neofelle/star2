<?php get_header('inner'); ?>
<br class="clear" /><br/> 
<section class="services-section" style="background: url('<?php echo get_template_directory_uri() . "/assets/images/inner/background-inner.png"; ?>') no-repeat;background-size: cover;padding-bottom: 50px;">
    <div class="row">
        <div class="container">
            <h1><?php the_title();?></h1>
            <br>
            <div class="col-xs-12 col-md-12 form-container left inner" style="padding-left: 0px !important">
                <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/page/content', 'page' );
                        the_content();
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                ?>
            </div>
        
        </div>
    </div>
 </section>
<?php get_footer('inner'); ?>