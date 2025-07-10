	</main>
	<footer>
		<div class="container">
			<?php wp_nav_menu(
				[
					'theme_location' => 'footer-menu',
					'container' => '',
					'menu_class' => 'menu menu-footer',
					'depth' => 1,
				]
			); ?>

			<p>&copy; <?php bloginfo('name'); ?> &bull; <?= date('Y'); ?> All Rights Reserved</p>

		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>