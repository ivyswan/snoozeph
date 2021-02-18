<?php
/**
 * Template Name: Privacy Policy Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="privacy-policy">
    <div class="container">
        <div class="row">
            <div class="privacy col-lg-12 col-10 mx-auto">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts())  : the_post(); ?>
                        <h1 class="text-center"><?php the_title(); ?></h1>                        
                        <?php the_content(); ?>          
                        <?php comments_template( '', true ); ?> 
                        <?php endwhile; ?>                   
                        <?php else : ?>                       
                        <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
                    <?php endif; 
                ?>  
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
