<div class="client_carousel">
    <h1>Client Carousel</h1>


    <?php
    $client_carousel = get_sub_field('client_carousel');
    ?>
    <div class="swiper-container">

        <div class="swiper-wrapper" aria-live="polite">
            <?php
            foreach ($client_carousel as $client) {
                $imageId = $client["ID"];

                $size = 'full'; // (thumbnail, medium, large, full .etc)
            ?>
                <div class="swiper-slide" role="group">
                    <?php
                    // (full is good here as the function outputs a srcset)
                    echo wp_get_attachment_image($imageId, $size);
                    ?>
                </div>
            <?php
            }
            ?>

        </div>


        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>


        <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-bullets-dynamic">
        </div>
    </div>




</div>