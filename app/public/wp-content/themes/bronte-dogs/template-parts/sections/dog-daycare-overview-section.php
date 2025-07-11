<?php
$heading = get_sub_field('heading');
$description = get_sub_field('description');
$full_day_price = get_sub_field('full_day_price');
$half_day_price = get_sub_field('half_day_price');
$cta_button_text = get_sub_field('cta_button_text');
$cta_button_link = get_sub_field('cta_button_link');
$features = get_sub_field('features');
?>
<section class="dog-daycare-overview-section">
    <div class="container">
        <div class="col price-col">
            <?php if ($heading): ?>
                <h2><?= wp_kses_post($heading); ?></h2>
            <?php endif; ?>
            <?php if ($description): ?>
                <p><?= wp_kses_post($description); ?></p>
            <?php endif; ?>

            <div class="pricing-container">
                <div class="pricing">
                    <?php if ($full_day_price): ?>
                        Full Day: <span class="text-green"><?= wp_kses_post($full_day_price); ?></span>
                    <?php endif; ?>
                    |
                    <?php if ($half_day_price): ?>
                        Half Day: <span class="text-green"><?= wp_kses_post($half_day_price); ?></span>
                    <?php endif; ?>
                </div>

                <?php if ($cta_button_text && $cta_button_link): ?>
                    <a href="<?= esc_url($cta_button_link); ?>" class="btn"><?= esc_html($cta_button_text); ?></a>
                <?php endif; ?>

                <div class="arrow-and-box">
                    <div class="arrow">
                        <svg width="16" height="75" viewBox="0 0 16 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.29288 74.7071C7.6834 75.0976 8.31657 75.0976 8.70709 74.7071L15.0711 68.3431C15.4616 67.9526 15.4616 67.3195 15.0711 66.9289C14.6805 66.5384 14.0474 66.5384 13.6568 66.9289L7.99999 72.5858L2.34313 66.9289C1.95261 66.5384 1.31944 66.5384 0.928919 66.9289C0.538395 67.3195 0.538394 67.9526 0.928919 68.3431L7.29288 74.7071ZM8 0L7 -9.68291e-09L6.99999 74L7.99999 74L8.99999 74L9 9.68291e-09L8 0Z" fill="#A4A4A4"/>
                        </svg>
                    </div>
                    <div class="info-box"></div>
                </div>
            </div>
        </div>

        <div class="col features-col">
            <?php if ($features): ?>
                <div class="features-wrapper">
                    <?php foreach ($features as $feature): ?>
                        <div class="feature-item">
                            <?php if (!empty($feature['icon'])): ?>
                                <div class="img-wrapper">
                                    <img src="<?= esc_url($feature['icon']['url']); ?>" alt="">
                                </div>
                            <?php endif; ?>
                            <div class="content-wrapper">
                                <?php if (!empty($feature['title'])): ?>
                                    <h3><?= esc_html($feature['title']); ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($feature['description'])): ?>
                                    <p><?= esc_html($feature['description']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section> 