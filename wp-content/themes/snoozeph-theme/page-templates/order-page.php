<?php
/**
 * Template Name: Order Form Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="order-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12">
                <h1 class="text-center">Order Form</h1>
                <button type="button" class="btn btn-outline-secondary" id="generate">Click to get order number</button>
                <span id="ranNum"></span>
                <?php echo do_shortcode('[wpforms id="148"]'); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
