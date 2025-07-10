<?php get_header(); ?>

<?php if (have_rows('sections')): ?>
    <?php while (have_rows('sections')): the_row(); ?>

        <?php if (get_row_layout() === 'header_text_image'): ?>
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
        <?php endif; ?>

        <?php if (get_row_layout() === 'review_slider'): ?>
            <?php
                $heading = get_sub_field('heading');
                $copy = get_sub_field('copy');
                $show_slider = get_sub_field('show_review_slider');
            ?>
            <?php if ($show_slider): ?>
                <section class="review-slider-section">
                    <div class="container">
                        <?php if ($heading): ?>
                            <h2 class="review-slider-heading"><?= wp_kses_post($heading); ?></h2>
                        <?php endif; ?>
                        <?php if ($copy): ?>
                            <p class="review-slider-copy"><?= wp_kses_post($copy); ?></p>
                        <?php endif; ?>
                        <div class="swiper review-swiper">
                            <div class="swiper-wrapper">
                                <?php
                                $review_query = new WP_Query([
                                    'post_type'      => 'review',
                                    'posts_per_page' => 10, 
                                    'orderby'        => 'date',
                                    'order'          => 'DESC',
                                ]);
                                if ($review_query->have_posts()):
                                    while ($review_query->have_posts()): $review_query->the_post();
                                        $review_text = get_field('review'); // Use 'review' ACF field for review text
                                        $author = get_the_title(); // Use post title as author
                                ?>
                                    <div class="swiper-slide review-card">
                                        <div class="top-wrapper">
                                            <div class="review-stars">
                                                <?php
                                                // Always show 5 filled SVG stars
                                                for ($i = 1; $i <= 5; $i++) {
                                                    echo '<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 0L13.4697 7.60081H21.4616L14.996 12.2984L17.4656 19.8992L11 15.2016L4.53436 19.8992L7.00402 12.2984L0.538379 7.60081H8.53035L11 0Z" fill="#27AE60"/></svg>';
                                                }
                                                ?>
                                            </div>
                                            <img src="https://www.gstatic.com/images/branding/product/1x/googleg_32dp.png" alt="Google" style="height:20px;vertical-align:middle;" />
                                            
                                        </div>
                                        <div class="bottom-wrapper">
                                            <div class="review-text"><?= wp_kses_post($review_text); ?></div>
                                            <div class="review-author">- <strong><?= esc_html($author); ?></strong></div>
                                        </div>
                                    </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else:
                                ?>
                                    <div class="swiper-slide review-card">
                                        <div class="review-text">No reviews found.</div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
                
        
            <?php endif; ?>
        <?php endif; ?>

        <?php if (get_row_layout() === 'dog_daycare_overview_section'): ?>
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
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
