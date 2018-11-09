<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="footer-wrapper" id="footer-wrapper">
		
		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<h4>Explore Ellawish</h4>					
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

