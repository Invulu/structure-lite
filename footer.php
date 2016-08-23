<?php
/**
 * The footer for our theme.
 * This template is used to generate the footer for the theme.
 *
 * @package Structure Lite
 * @since Structure Lite 1.0
 */

?>

<!-- END .container -->
</div>

<!-- BEGIN .footer -->
<div class="footer">

	<?php if ( is_active_sidebar( 'footer' ) ) { ?>

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .content -->
		<div class="content">

			<!-- BEGIN .footer-widgets -->
			<div class="footer-widgets <?php echo structure_lite_count_widgets( 'footer' ); ?>">

				<?php dynamic_sidebar( 'footer' ); ?>

			<!-- END .footer-widgets -->
			</div>

		<!-- END .content -->
		</div>

	<!-- END .row -->
	</div>

	<?php } ?>

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .content -->
		<div class="content">

			<!-- BEGIN .footer-information -->
			<div class="footer-information">

				<div class="align-left">

					<p><?php esc_html_e( 'Copyright', 'structure-lite' ); ?> &copy; <?php echo date( esc_html__( 'Y', 'structure-lite' ) ); ?> &middot; <?php esc_html_e( 'All Rights Reserved', 'structure-lite' ); ?> &middot; <?php bloginfo( 'name' ); ?></p>

					<?php if ( '' != get_theme_mod( 'structure_lite_footer_text' ) ) { ?>

						<p><span class="footer-site-info"><?php echo get_theme_mod( 'structure_lite_footer_text' ); ?></span> &middot; <a href="<?php bloginfo( 'rss2_url' ); ?>"><?php esc_html_e( 'RSS Feed', 'structure-lite' ); ?></a> &middot; <?php wp_loginout(); ?></p>

					<?php } else { ?>

						<p><?php printf( esc_html__( '%1$s by %2$s', 'structure-lite' ), 'Structure', '<a href="http://organicthemes.com/">Organic Themes</a>' ); ?> &middot; <a href="<?php bloginfo( 'rss2_url' ); ?>"><?php esc_html_e( 'RSS Feed', 'structure-lite' ); ?></a> &middot; <?php wp_loginout(); ?></p>

					<?php } ?>

				</div>

				<?php if ( has_nav_menu( 'social-menu' ) ) { ?>

				<div class="align-right">

					<?php wp_nav_menu( array(
						'theme_location' => 'social-menu',
						'title_li' => '',
						'depth' => 1,
						'container_class' => 'social-menu',
						'menu_class'      => 'social-icons',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
						)
					); ?>

				</div>

				<?php } ?>

			<!-- END .footer-information -->
			</div>

		<!-- END .content -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .footer -->
</div>

<!-- END #wrapper -->
</div>

<?php wp_footer(); ?>

</body>
</html>
