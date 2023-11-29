<?php

/**
 * Template Name: Page Builder
 *
 */

get_header(); ?>

<main>
    <?php get_template_part('content-parts/hero'); ?>
    <div class="page_builder">




        <?php if (have_rows('page_builder')) {
            while (have_rows('page_builder')) {
                the_row();
                // For each row of the Flexible content layout, load the page builder
                get_template_part('content-parts/pb-page_builder_wrapper');
            }
        } ?>

    </div>
</main>

<?php get_footer(); ?>