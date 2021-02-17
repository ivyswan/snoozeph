<?php
/**
 * Template Name: Order Confirmation Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="order-confirmation">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12 text-center">
                <h1>Order Confirmation</h1>
                <p>Thanks for your order!</p>
                <p>We will be in touch with you shortly.</p>
                <p>Please review your purchase on your email confirmation.</p>
                <a href="<?php echo site_url('/'); ?>"><button type="button" class="btn btn-outline-secondary">Back to Homepage</button></a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
