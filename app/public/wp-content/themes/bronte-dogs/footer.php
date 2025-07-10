	</main>
	<footer>
		<div class="container">
			<div class="footer-top-wrapper">
				<div class="footer-brand">
					<?php
					$site_logo = function_exists('get_field') ? get_field('site_logo', 'option') : false;
					if ($site_logo && !empty($site_logo['url'])): ?>
						<span class="footer-logo">
							<img src="<?= esc_url($site_logo['url']); ?>" alt="<?= esc_attr($site_logo['alt'] ?: get_bloginfo('name')); ?>">
						</span>
					<?php endif; ?>
				</div>
				<div class="footer-buttons">
					<?php
					wp_nav_menu([
						'theme_location' => 'footer-menu',
						'container' => '',
						'menu_class' => 'menu menu-footer',
						'depth' => 1,
					]);
					?>
				</div>
			</div>
			<div class="footer-copyright">
				<?php
					if (function_exists('get_field')) :
						$footer_copyright = get_field('footer_copyright', 'option');
						if ($footer_copyright) :
							echo wp_kses_post($footer_copyright);
						endif;
					endif;
				?>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>