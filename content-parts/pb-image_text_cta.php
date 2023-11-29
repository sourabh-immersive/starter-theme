<?php

$title = get_sub_field('gen_title');
$byline = get_sub_field('gen_text');
$imageId = get_sub_field('gen_image')["id"];
$CTA_text = get_sub_field('gen_CTA')["title"];
$CTA_link = get_sub_field('gen_CTA')["url"];


$buttons = get_sub_field("ctas_group");

// If alternate_layout, change variable to "flipped, otherwise empty string
$alternate_layout = get_sub_field('alternate_layout') ? "flipped" : "";

?>


<div class="image_text_cta <?php echo $alternate_layout; ?>">

    <a class="image-wrapper" href="<?php echo $CTA_link; ?>">
        <?php
        $size = 'medium'; // (thumbnail, medium, large, full .etc)
        // (full is good here as the function outputs a srcset)
        echo wp_get_attachment_image($imageId, $size);
        ?>
    </a>

    <div class="text-content">
        <h2>
            <a href="<?php echo $CTA_link; ?>">
                <?php echo $title; ?>
            </a>
        </h2>

        <p><?php echo $byline; ?></p>



        <?php
        if ($buttons) {
        ?>

            <?php
            echo buttons($buttons);
            ?>

        <?php
        }
        ?>

    </div>
</div>