<?php
$image = get_sub_field('image');
$heading = get_sub_field('heading');
$description = get_sub_field('description');
$form_shortcode = get_sub_field('form_shortcode');
?>
<section class="contact-form-section">
  <div class="container">
    <div class="inner-wrapper">
        <div class="contact-form-info">
            <?php if ($image): ?>
                <div class="contact-form-image">
                    <img src="<?php echo function_exists('esc_url') ? esc_url($image['url']) : $image['url']; ?>" alt="<?php echo function_exists('esc_attr') ? esc_attr($image['alt']) : $image['alt']; ?>" />
                </div>
            <?php endif; ?>
            <?php if ($heading): ?>
                <h2 class="contact-form-heading"><?php echo function_exists('esc_html') ? esc_html($heading) : $heading; ?></h2>
            <?php endif; ?>
            <?php if ($description): ?>
                <div class="contact-form-description"><?php echo function_exists('esc_html') ? esc_html($description) : $description; ?></div>
            <?php endif; ?>
        </div>
        <div class="contact-form-fields">
            <?php if ($form_shortcode): ?>
                <?php echo function_exists('do_shortcode') ? do_shortcode($form_shortcode) : $form_shortcode; ?>
            <?php endif; ?>
        </div>
    </div>
  </div>
</section>