<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row text-center">
		<div class="col-lg-12 wow fadeInDown">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
		<div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
			<?php the_content(); ?>
			<a href="mailto:snoozeph.shop@gmail.com"><button type="button" class="btn btn-outline-secondary">*Please inquire for the exact measurements</button></a>
		</div>
		<div class="order-now col-lg-12 wow fadeIn">
			<a href="<?php echo site_url('/order-page'); ?>"><button type="button" class="btn btn-secondary">Order now</button></a>
		</div>
		<div class="care-guide col-lg-8 mx-auto">
			<p>*Hand wash in cold water. Do not bleach. Turn inside out and iron in low heat. When using a machine, turn to mild or delicate cycle. Using a laundry mesh is highly recommended. Without the mesh, avoid using the machine.</p>
		</div>
	</div>

</article><!-- #post-## -->
