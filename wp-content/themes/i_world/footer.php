<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package i-world
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'i_world' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'i_world' ), 'WordPress' );
				?>
			</a>
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'i_world' ), 'i_world', '<a href="http://underscores.me/">Basil Okache</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<footer class="footer-section" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/footer-design-empty.png')">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
		<div class="site-wrapper">
			<div class="footer-container">
				<div class="first">
					<div class="footer-menu">
						<h5>I - net World</h5>
						<?php 
						wp_nav_menu(
							array(
								'theme_location'		=>	'footer-menu-1',
								'container'				=>	'',
								'before'				=>	'<p>',
								'after'					=>	'</p>',
								'items_wrap'			=>	'<ul class="list-menu"%3$s</ul>'
							)
						);
					?>
					</div>
					<div class="hotlines">
						<h5>Sales Hotles</h5>
						<p><?php echo get_theme_mod('sales_hotles_1'); ?></p>
						<p><?php echo get_theme_mod('sales_hotles_2'); ?></p>
						<p><?php echo get_theme_mod('sales_hotles_3'); ?></p>
						<p><?php echo get_theme_mod('sales_hotles_4'); ?></p>
						<p><?php echo get_theme_mod('sales_hotles_5'); ?></p>
					</div>
					<div class="plans">
						<h5>Our Plans</h5>
						<?php
						wp_nav_menu(
							array(
								'theme_location'	=>	'footer-menu-2',
								'container'			=>	'',
								'before'			=>	'<p>',
								'after'				=>	'</p>',
								'items_wrap'		=>	'<ul class="list-menu-2"%3$s</ul>'
							)
						);
						?>
					</div>
				</div>
				<div class="second">
					<div class="address">
						<h5>Office Address</h5>
						<p><?php echo get_theme_mod('footer_address_1'); ?></p>
						<p><?php echo get_theme_mod('footer_address_2'); ?></p>
					</div>
					<div class="socials">
						<h5>Social Media</h5>
						<span>
							<?php if(!empty(get_theme_mod('facebook'))){ ?>
								<a href="<?php echo get_theme_mod('facebook') ?>">`<img src="<?php echo get_template_directory_uri(); ?> /assets/icons/facebook.png" alt="facebook-icon"></a>
							<?php } ?>

							<?php if(!empty(get_theme_mod('twitter'))){ ?>
								<a href="<?php echo get_theme_mod('twitter') ?>"><img src="<?php echo get_template_directory_uri() ?> /assets/icons/twitter.png" alt="twitter-icon"> 
							<?php } ?>

							<?php if(!empty(get_theme_mod('linkedin'))){ ?>
								<a href="<?php echo get_theme_mod('linkedin') ?>"><img src="<?php echo get_template_directory_uri() ?> /assets/icons/linkedin.png" alt="linkedin-icon"> 
							<?php } ?>
						</span>
					</div>
				</div>
				<div class="third">
					<h6>Copyright all right reserved. I - Net world companies</h6>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
