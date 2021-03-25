<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner wow fadeInDownBig" data-wow-duration="2s">	
    <div class="container">
        <div class="row">
            <div class="home-banner-heading col-lg-12">
                <h1 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">snooze.ph</h1>
                <p>Sleep in style</p>
            </div>
            <div class="col-lg-12">
                <a href="#products"><button type="button" class="btn btn-secondary">Shop now</button></a>
            </div>
        </div><!-- .row-->
    </div><!-- .container-->
</div><!-- .home-banner in header.php-->

<div class="our-story" id="about">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-5 col-12 wow fadeIn" data-wow-delay="1s">
                <?php echo do_shortcode("[do_widget id=text-5]"); ?>
            </div>
            <div class="col-lg-3 d-lg-block d-none wow fadeIn" id="story1"></div>
            <div class="col-lg-3 d-lg-block d-none wow fadeIn" data-wow-delay="1s" id="story2"></div>
        </div><!-- .row-->
    </div><!-- .container-->
</div><!-- .our-story-->

<div class="products" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="wow fadeInDown" data-wow-duration="2s">Products</h2>
            </div>
        </div><!-- .row-->
        <div class="row">                              
                <?php
                // wp-query to get all published posts without pagination
                $allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                <?php if ( $allPostsWPQuery->have_posts() ) : ?>                       
                    <?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
                    <div class="product-item col-lg-4 col-6 text-center wow fadeInUp" data-wow-delay="1s"> 
                        <div class="product-image-holder">
                            <a href="<?php the_permalink(); ?>">        
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>               
                                <img src="<?php echo $url ?>" />
                            </a>                        
                        </div>
                        <p><?php the_title(); ?></p>
                        <p class="product-price"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></p>                       
                    </div><!-- .col-->
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'There are no posts to display.' ); ?></p>
                <?php endif; ?>                    
        </div><!-- .row-->
    </div><!-- .container-->
</div><!-- .products-->

<div class="feedback" id="feedback">
    <div class="container">
        <div class="row justify-content-center">     
            <div class="col-lg-10 col-sm-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <?php echo do_shortcode('[do_widget id=text-6]'); ?>
            </div>            
        </div><!-- .row-->
    </div><!-- .container-->
</div><!-- .feedback-->

<div class="faqs" id="faqs">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Tracking and Shipping Details
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php echo do_shortcode("[do_widget id=text-2]"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Return and Exchange Policy
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php echo do_shortcode("[do_widget id=text-4]"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Size Guide
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                                <?php echo do_shortcode("[do_widget id=text-3]"); ?>
                            </div>
                        </div>
                    </div>
                </div><!-- .accordion-->
            </div><!-- .col-->
        </div><!-- .row-->
    </div><!-- .container-->
</div><!-- .faqs-->

<?php
get_footer();
