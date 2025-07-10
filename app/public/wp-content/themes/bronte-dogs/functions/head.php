<?php

/**
 * Google Tag Manager
 */
add_action('wp_head', function () {
	// uncomment when needed to prevent conenction timeout
?>

	<!-- Google Tag Manager -->
	<!-- <script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-000000');
	</script> -->

<?php

}, 99);

add_action('wp_body_open', function () {
	// uncomment when needed to prevent conenction timeout
?>

	<!-- Google Tag Manager (noscript) -->
	<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-000000" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->

<?php
});

/**
 * Misc Head code to add
 */
add_action('wp_head', function () { ?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<?php
}, 1);

/**
 * Add Favicons
 * @link realfavicongenerator.net
 */
add_action('wp_head', function () {

	$theme_directory = get_template_directory_uri();
?>

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $theme_directory; ?>/images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $theme_directory; ?>/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $theme_directory; ?>/images/favicons/favicon-16x16.png">
	<link rel="mask-icon" href="<?= $theme_directory; ?>/images/favicons/safari-pinned-tab.svg" color="#52c1e9">
	<link rel="shortcut icon" href="<?= $theme_directory; ?>/images/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#52c1e9">
	<meta name="msapplication-config" content="<?= $theme_directory; ?>/images/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

<?php
}, 11);

/**
 * Simplify WordPress code
 */
add_action('init', function () {

	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wp_shortlink_wp_head');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'rest_output_link_wp_head', 10);
	remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
	add_filter('the_generator', '__return_empty_string');
	add_filter('gform_display_add_form_button', '__return_false');
}, 2);
