<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since TUI 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the TUI footer text for footer customization.
				 *
				 * @since TUI 1.0
				 */
				do_action( 'tui_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tui' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'tui' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
