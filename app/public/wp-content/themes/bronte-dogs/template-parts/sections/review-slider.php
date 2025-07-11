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
                        $review_text = get_field('review');
                        $author = get_the_title();
                ?>
                    <div class="swiper-slide review-card">
                        <div class="top-wrapper">
                            <div class="review-stars">
                                <?php
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
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<?php endif; ?> 