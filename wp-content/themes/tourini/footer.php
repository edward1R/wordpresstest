<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tourini
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">
		<div id="static-area-footer-top" class="static-area footer-top"></div>
		<div id="static-area-footer-middle" class="static-area footer-middle">
			<div class="footer-logo image-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="http://ld-wp.template-help.com/wordpress_58593/wp-content/uploads/2016/03/logo_2_26459.png" alt="<?php bloginfo( 'name' ); ?>" />
				</a>
			</div>
			<aside id="footer_widget" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</aside><!-- #footer_widget -->
		</div>

		<div id="static-area-footer-bottom" class="static-area footer-bottom">
			<div class="site-info">
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'tourini' ), 'tourini', '<a href="https://github.com/0820/" rel="designer">0820</a>' ); ?>
			</div><!-- .site-info -->
			<div class="static-social">
				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'tourini' ); ?>">
						<?php 
							wp_nav_menu( array( 
								'theme_location' => 'social', 
								'menu_class' 	 => 'social_links_menu',
								'depth'			 => 1,
								'link_before'	 => '<span class="screen-reader-text">',
								'link_after'	 => '</span>', 
							) ); 
						?>
					</nav><!-- .social-navigation -->
				<?php endif; ?>
			</div><!-- .static-social -->
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
