<?php get_header(); ?>

<?php if (have_rows('sections')): ?>
    <?php while (have_rows('sections')): the_row(); ?>
        <?php
        $layout = get_row_layout();
        
        $template_name = str_replace('_', '-', $layout);
        get_template_part('template-parts/sections/' . $template_name);
        ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
