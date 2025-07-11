<?php
$heading = get_sub_field('heading');
$copy = get_sub_field('copy');
$buttons = get_sub_field('buttons');
$header_image = get_sub_field('header_image');
?>
<section class="header-text-image-section">
    <div class="container">
        <div class="col col-5 text-col">
            <?php if ($heading): ?>
                <h1><?= wp_kses_post($heading); ?></h1>
            <?php endif; ?>

            <?php if ($copy): ?>
                <div class="copy">
                    <?= wp_kses_post($copy); ?>
                </div>
            <?php endif; ?>

            <?php if ($buttons): ?>
                <div class="buttons">
                    <?php foreach ($buttons as $button): ?>
                        <?php if (!empty($button['button_link'])): ?>
                            <a href="<?= esc_url($button['button_link']); ?>" class="btn">
                                <?= esc_html($button['button_text']); ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($header_image): ?>
            <div class="col col-7 img-col">
                <div class="header-image-wrapper">
                    <img src="<?= esc_url($header_image['url']); ?>" alt="<?= esc_attr($header_image['alt'] ?? ''); ?>">
                </div>
            </div>
        <?php endif; ?>
    </div>
</section> 