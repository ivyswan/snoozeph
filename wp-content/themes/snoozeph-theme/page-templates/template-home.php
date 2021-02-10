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

<div class="home-banner animate__animated animate__fadeInDown animate__slow">	
    <div class="container">
        <div class="row">
        
        </div><!-- .row-->
    </div><!-- .container-->
</div><!-- .home-banner in header.php-->

<div class="products" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center animate__animated animate__fadeInDown animate__slow animate__delay-2s">Products</h2>
            </div>
        </div><!-- .row-->
        <div class="row">                                  
                <?php 
                // wp-query to get all published posts without pagination
                $allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                <?php if ( $allPostsWPQuery->have_posts() ) : ?>                       

                    <?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
                    <div class="product-item col-lg-4 col-sm-6 text-center animate__animated animate__fadeInUp animate__slow animate__delay-2s"> 
                        <a href="<?php the_permalink(); ?>">
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<img src="<?php echo $url ?>" />
                        </a>
                        <p><?php the_title(); ?></p>
                        <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
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
            <div class="col-lg-10 col-sm-12 animate__animated animate__fadeInLeft animate__slow animate__delay-5s">
                <?php echo do_shortcode('[testimonials_cycle theme="light_grey-classic_style" count="-1" order_by="date" order="ASC" show_title="0" use_excerpt="0" show_thumbs="1" show_date="1" show_other="1" hide_view_more="0" output_schema_markup="1" show_rating="stars" testimonials_per_slide="1" transition="fade" timer="5000" pause_on_hover="true" auto_height="container" show_pager_icons="1" prev_next="1" display_pagers_above="0" paused="0"]'); ?>
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
                            Payment and Shipping Details
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>BPI</li>
                                <li>BDO</li>
                                <li>Metrobank</li>
                                <li>GCash</li>
                                <li>PayMaya</li>
                            </ul>
                            <p><span>Same day delivery:</span><br>via Grab / Lalamove / Mr. Speedy</p>
                            <p><span>Provincial:</span><br>via J&T</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Size Guide
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p><span>Free Size</span></p>
                            <p>(best fit med to semi large frame)</p>
                            <p>small up to semi-large frame</p>
                            <ul>
                                <li>Bust: up to 38"</li>
                                <li>Waist: up to 35"</li>
                                <li>Hips: up to 38"</li>
                            </ul>
                            <p><span>Plus Size</span></p>
                            <p>(best fit XXL frame)</p>
                            <p>up to 3XL</p>
                            <ul>
                                <li>Bust: up to 47"</li>
                                <li>Waist: up to 45"</li>
                                <li>Hips: up to 49"</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Care Guide
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Hand wash in cold water.</p>
                            <p>Do not bleach.</p>
                            <p>Turn inside out and iron in low heat.</p>
                            <p>When using a machine, turn to mild or delicate cycle. Using a laundry mesh is highly recommended. Without the mesh, avoid using the machine.</p>
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
