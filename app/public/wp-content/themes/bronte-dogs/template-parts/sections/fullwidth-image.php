<?php
$image = get_sub_field('image');
?>
<?php if ($image): ?>
<section class="fullwidth-image-section">
    <img 
        src="<?= esc_url($image['url']); ?>" 
        alt="<?= esc_attr($image['alt'] ?? ''); ?>" 
        class="fullwidth-image"
    />
</section>
<?php endif; ?> 