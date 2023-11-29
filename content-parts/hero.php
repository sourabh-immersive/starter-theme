<?php

// if there's an ACF title, use that. Else Use normal page title
$title = get_field('hero_title') ? get_field('hero_title') : get_the_title();
$byline = get_field('hero_byline');

$buttons = get_field("main_buttons");

$background_images = get_field('hero_images');

$image_focus_point = get_field('focus_point') ? get_field('focus_point') : null;

// Default to 50% 50% if no focus point set
$image_focus_point_string = 'style="--focus-point: 50% 50%"';

if ($image_focus_point['choose_focus_point'] == true) {
    $image_focus_point_x =  $image_focus_point["coords"]["x_value_horizontal"] ? $image_focus_point["coords"]["x_value_horizontal"]  . "%" : "50%";
    $image_focus_point_y =  $image_focus_point["coords"]["y_value_vertical"] ? $image_focus_point["coords"]["y_value_vertical"] . "%" : "50%";
    $image_focus_point_string = 'style="--focus-point: ' . $image_focus_point_x . " " . $image_focus_point_y . '"';
}


// Sizing - if we'd like a shorter version
$hero_short = get_field('hero_short');
if ($hero_short) {
    $hero_short = "short";
}

?>

<div class="hero <?php echo $hero_short ?>">
    <div class="text-content">
        <h1>
            <?php echo $title ?>
        </h1>

        <?php
        if ($byline) {
        ?>
            <div class="byline">
                <?php echo $byline; ?>
            </div>
        <?php
        }
        ?>


        <?php
        // If buttons exists, output them, otherwise do nothing
        echo (isset($buttons) && $buttons != null ? buttons($buttons) : null);
        ?>


    </div>


    <?php

    // If array exists & 
    // If there are multiple images, render out a slider
    if ($background_images && count($background_images) > 1) {
    ?>

        <?php // Swiper | Start
        ?>
        <div class="swiper-container mySwiper swiper-container-horizontal swiper-container-pointer-events" <?php echo $image_focus_point_string; ?>>
            <div class="swiper-wrapper" aria-live="polite">
                <?php
                foreach ($background_images as $background_image) {
                    $imageId = $background_image['id'];
                    $size = "large";
                ?>
                    <div class="swiper-slide" role="group">
                        <?php
                        echo wp_get_attachment_image($imageId, $size, "", ["class" => "", "loading" => "eager", "fetchpriority" => "high"]);

                        ?>
                    </div>
                <?php
                }
                ?>

            </div>
            <?php // End Wrapper  
            ?>

            <?php // Swiper Controls / Nav 
            ?>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-9d3478d0b527846d" aria-disabled="false"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-9d3478d0b527846d" aria-disabled="false"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>


            <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-bullets-dynamic"> </div>

        </div>



        <?php } else {
        // If array exists & 
        // If there is a single images
        if ($background_images && count($background_images) == 1) {
        ?>
            <div class="background-image" <?php echo $image_focus_point_string; ?>>
                <?php
                $imageId = $background_images[0]['id'];
                $size = "large";


                echo wp_get_attachment_image($imageId, $size, "", ["class" => "", "loading" => "eager", "fetchpriority" => "high"]);
                ?>
            </div>
        <?php
        }
        ?>
    <?php
    }
    ?>


</div>