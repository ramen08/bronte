<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav class="side-menu d-xl-none initial-opacity" style="transform: translateX(110%);">
        <div class="inner">
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
            <nav id="primary" class="row">
                <a href="<?= get_home_url(); ?>">
                    <img src="<?= get_stylesheet_directory_uri() ?>/images/logo.svg" alt="">
                </a>

                <?php wp_nav_menu(
                    [
                        'theme_location' => 'header-menu',
                        'container' => '',
                        'menu_class' => 'menu menu-header',
                        'depth' => 1,
                    ]
                ); ?>
            </nav>
        </div>
    </header>
    <main>