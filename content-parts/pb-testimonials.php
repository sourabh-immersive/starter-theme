<?php
// Use inside a repeater field called "testimonials"

$testimonials = get_sub_field('testimonials');
// Used for debugging
// echo '<pre>';
// var_dump($testimonials);
// echo '</pre>';
$testimonialHeading = count($testimonials) > 1 ? "Testimonials" : "Testimonial";
?>

<section class="testimonials">

    <h2>
        <?php echo $testimonialHeading; ?>
    </h2>


    <?php
    if (count($testimonials) > 1) {
        // More than One Testimonial
    ?>

        <div class="swiper-container">

            <div class="swiper-wrapper" aria-live="polite">
                <?php
                foreach ($testimonials as $testimonial) {
                    $quote = $testimonial["testimonial_quote"];
                    $author = $testimonial["testimonial_quote_author"];
                    $imageId = $testimonial["testimonial_image"]["ID"];
                ?>
                    <div class="swiper-slide" role="group">
                        <?php
                        $size = 'medium'; // (thumbnail, medium, large, full .etc)
                        // (full is good here as the function outputs a srcset)
                        echo wp_get_attachment_image($imageId, $size);
                        ?>

                        <blockquote>
                            <?php echo $quote; ?>

                            <p class="author">
                                <?php echo $author; ?>
                            </p>
                        </blockquote>
                    </div>
                <?php
                }
                ?>

            </div>

            <?php
            // Left and right arrows

            // <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-9d3478d0b527846d" aria-disabled="false"></div>
            // <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-9d3478d0b527846d" aria-disabled="false"></div>
            // <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            ?>

            <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-bullets-dynamic">
            </div>
        </div>

    <?php
    } elseif (count($testimonials) == 1) {
        // One Testimonial

        foreach ($testimonials as $testimonial) {
            $quote = $testimonial["testimonial_quote"];
            $author = $testimonial["testimonial_quote_author"];
            $imageId = $testimonial["testimonial_image"]["ID"];
        }
    ?>

        <div class="swiper-slide" role="group">
            <?php
            $size = 'medium'; // (thumbnail, medium, large, full .etc)
            // (full is good here as the function outputs a srcset)
            echo wp_get_attachment_image($imageId, $size);
            ?>

            <blockquote>
                <?php echo $quote; ?>

                <p class="author">
                    <?php echo $author; ?>
                </p>
            </blockquote>
        </div>

    <?php
    }
    ?>

</section>