<?php
// PB - Image Gallery Slider
// $normal_text_field = get_field('image_gallery_slider');


// If sub field exists ? use subfield :(else) empty string
$gallery = get_sub_field('image_gallery_slider') ? get_sub_field('image_gallery_slider') : "";

// echo '<pre>';
// // var_dump($gallery);
// echo '</pre>';

?>

<section
    class="image_gallery_slider"
    id="gallery"
>


    <div class="swiper-container">

        <div
            class="swiper-wrapper"
            aria-live="polite"
        >
            <?php
            foreach ($gallery as $image) {

                // echo '<pre>';
                // var_dump($image);
                // echo '</pre>';

                $imageId = $image["ID"];
            ?>
            <div
                class="swiper-slide"
                role="group"
            >
                <?php
                    $size = 'post-thumb'; // (thumbnail, medium, large, full, "post-thumb" .etc)
                    // (full is good here as the function outputs a srcset)
                    echo wp_get_attachment_image($imageId, $size);
                    ?>


            </div>
            <?php
            }
            ?>

        </div>

        <?php
        // Left and right arrows
        ?>

        <div
            class="swiper-button-next"
            tabindex="0"
            role="button"
            aria-label="Next slide"
            aria-controls="swiper-wrapper-9d3478d0b527846d"
            aria-disabled="false"
        ></div>

        <div
            class="swiper-button-prev"
            tabindex="0"
            role="button"
            aria-label="Previous slide"
            aria-controls="swiper-wrapper-9d3478d0b527846d"
            aria-disabled="false"
        ></div>

        <span
            class="swiper-notification"
            aria-live="assertive"
            aria-atomic="true"
        ></span>

    </div>



</section>

<?php
// Check rows exists.
?>