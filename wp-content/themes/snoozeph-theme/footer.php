<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="footer" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-9">
                <ul>
                    <li class="wow rotateIn">
                        <a href="mailto:snoozeph.shop@gmail.com"><i class="far fa-envelope"></i></a>
                    </li>    
                    <li class="wow rotateIn" data-wow-delay="1s">
                        <a href="https://www.instagram.com/snooze.ph/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="wow rotateIn" data-wow-delay="2s">
                        <a href="https://www.facebook.com/snoozeph-111325980588585" target="_blank"><i class="fab fa-facebook"></i></a>
                    </li>                                    
                </ul>
            </div>
        </div><!-- .row-->
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center">snooze.ph <?php echo date('Y'); ?> <span>| <a href="https://www.ivyswan.com/" target="_blank">website by Ivy Swan</a></span></p>
            </div>      
        </div>
    </div><!-- .container-->
</div><!-- .footer-->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>

