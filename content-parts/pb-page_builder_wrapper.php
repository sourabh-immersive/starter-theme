<?php
if (get_row_layout() == 'image_text_cta') {
    get_template_part('content-parts/pb-image_text_cta');
} elseif (get_row_layout() == 'image_gallery_slider') {
    get_template_part('content-parts/pb-image_gallery_slider');
} elseif (get_row_layout() == 'test') {
    get_template_part('content-parts/pb-test');
} elseif (get_row_layout() == 'default_text_field') {
    get_template_part('content-parts/pb-default_text_field');
} elseif (get_row_layout() == 'links_with_background_images') {
    get_template_part('content-parts/pb-links_with_background_images');
} elseif (get_row_layout() == 'testimonials') {
    get_template_part('content-parts/pb-testimonials');
} elseif (get_row_layout() == 'page_intro') {
    get_template_part('content-parts/pb-page_intro');
} elseif (get_row_layout() == 'timeline') {
    get_template_part('content-parts/pb-timeline');
} elseif (get_row_layout() == 'full_width_cta_bar') {
    get_template_part('content-parts/pb-full_width_cta_bar');
} elseif (get_row_layout() == 'on_page_nav_bar') {
    get_template_part('content-parts/pb-nav_bar');
} elseif (get_row_layout() == 'form_block') {
    get_template_part('content-parts/pb-form_block');
} elseif (get_row_layout() == 'accordion_items') {
    get_template_part('content-parts/pb-accordions');
} elseif (get_row_layout() == 'video_block') {
    get_template_part('content-parts/pb-video_block');
} elseif (get_row_layout() == 'latest_posts_block') {
    get_template_part('content-parts/pb-latest_posts_block');
}