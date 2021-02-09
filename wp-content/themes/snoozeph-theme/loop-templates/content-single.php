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

	<div class="row">
		<div class="col-lg-12 text-center animate__animated animate__fadeInDown">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
		<div class="col-lg-12 text-center animate__animated animate__fadeInUp animate__slower">
			<?php the_content(); ?>
			<a href="mailto:snooze.ph@gmail.com"><button type="button" class="btn btn-outline-secondary">*Please inquire for the exact measurements</button></a>
		</div>
	</div>

</article><!-- #post-## -->
