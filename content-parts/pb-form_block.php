<?php
$test = get_sub_field('form_block_form_title');

// echo '<pre>';
// var_dump($test);
// echo '</pre>';


////////
//
// Depending on whether we're using this Form Block Directly or through the Page Builder
//
////////

// If data in get_field ? Use get_field data ? Otherwise, let's assume it's using page builder content
$title = get_field('form_title') ? get_field('form_title') : get_sub_field('form_block_form_title');
$shortcode = get_field('form_shortcode') ? get_field('form_shortcode') : get_sub_field('form_block_form_shortcode');
?>

<div class="form_block">

    <div class="wrapper">

        <?php if ($title) { ?>
            <h2>
                <?php echo $title; ?>
            </h2>
        <?php } ?>

        <?php if ($shortcode) { ?>
            <?php // The form might have it's own title that you'll need to remove in the Ninja form settings 
            ?>
            <?php echo do_shortcode($shortcode); ?>
        <?php } ?>

    </div>
</div>