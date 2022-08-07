</main>

<footer>
	<div class="tgf-container">
		<div class="flex-box footer-logo">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
					<?php if ( is_front_page() && ! is_paged() ) : ?>
						<?php bloginfo( 'name' ); ?>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
		</div>

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<ul class="footer-nav flex-box">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'items_wrap'     => '%3$s',
						'container'      => false,
						'depth'          => 1,
						'link_before'    => '',
						'link_after'     => '',
						'fallback_cb'    => false,
					)
				);
				?>
			</ul>
		<?php endif; ?>

		<div class="footer-logos">
			<?php dynamic_sidebar( 'footer_logos' ); ?>
		</div>

		<?php if ( has_nav_menu( 'footer_bottom' ) ) : ?>
			<ul class="footer-bootom-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer_bottom',
						'items_wrap'     => '%3$s',
						'container'      => false,
						'depth'          => 1,
						'link_before'    => '',
						'link_after'     => '',
						'fallback_cb'    => false,
					)
				);
				?>
			</ul>
		<?php endif; ?>

		<?php dynamic_sidebar( 'footer_text' ); ?>

	</div>
</footer>

<img id="to-top" src="<?php echo get_template_directory_uri(); ?>/images/top-arrow.png" alt="to top" title="To top">

<?php wp_footer(); ?>

</body>
</html>
