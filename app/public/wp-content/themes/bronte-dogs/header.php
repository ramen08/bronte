<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav class="side-menu d-xl-none initial-opacity" style="transform: translateX(110%);">
        <div class="inner">
            <div class="mobile-menu-header">
                <button class="menu-close" aria-label="Close menu">
                    <span></span>
                    <span></span>
                </button>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'mobile-menu',
                'menu_class' => 'menu menu-mobile',
                'container' => '',
                'depth' => 2,
            ]); ?>
        </div>
    </nav>


    <header>
        <div class="container">
            <nav id="primary" class="row align-items-center">
                <div class="logo-wrapper col-md-3 col-6 m-y-auto">
                    <a href="<?= get_home_url(); ?>">
                        <?php 
                        $site_logo = function_exists('get_field') ? get_field('site_logo', 'option') : false;
                        if ($site_logo && !empty($site_logo['url'])): ?>
                            <img src="<?= esc_url($site_logo['url']); ?>" alt="<?= esc_attr($site_logo['alt'] ?: get_bloginfo('name')); ?>">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="menu-wrapper col col-md-9 m-y-auto">
                    <?php wp_nav_menu(
                        [
                            'theme_location' => 'header-menu',
                            'container' => '',
                            'menu_class' => 'menu menu-header',
                            'depth' => 2,
                        ]
                    ); ?>
                    <div class="menu-opener d-xl-none"></div>
                </div>
            </nav>
        </div>
    </header>
    <main>