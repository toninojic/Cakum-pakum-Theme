<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cakum_Pakum
 */

?>

	<footer id="colophon" class="site-footer">

		<nav>
			<?php 
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'secondary-menu',
					)
				);
			?>
		</nav>

		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5804.5072228323215!2d21.92879178351709!3d43.329881837324336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b112946abd13%3A0x395795f9bc8cda9!2sTepih%20servis%20i%20dubinsko%20pranje%20namestaja%20%2C%2CCakum%20pakum&#39;&#39;!5e0!3m2!1ssr!2srs!4v1666721074264!5m2!1ssr!2srs" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cakum-pakum' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'cakum-pakum' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cakum-pakum' ), 'cakum-pakum', '<a href="http://example.com/">PAdev</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
