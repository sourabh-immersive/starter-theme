<?php
$page_intros = get_sub_field('page_intro');

// echo '<pre>';
// // var_dump($page_intro);
// echo '</pre>';
?>



<section class="pb-page_intro">

    <?php
    $swiper = "";
    if (count($page_intros) > 1) {
        // If there's more than one, add this class to the wrapper
        // If only a single item, don't make it a slider
        $swiper = "page-intro-swiper";
    } ?>

    <div class="swiper-container <?php echo $swiper; ?> swiper-container-horizontal swiper-container-pointer-events">
        <div class="swiper-wrapper" aria-live="polite">

            <?php
            foreach ($page_intros as $page_intro) {

                $title = $page_intro['title'] ? $page_intro['title'] : "";
                $text = $page_intro['text'];

                $CTA_text = $page_intro['link'] ? $page_intro['link']["title"] : "";
                $CTA_link = $page_intro['link'] ? $page_intro['link']["url"] : "";
            ?>
                <div class="swiper-slide" role="group">
                    <?php
                    if ($title) {
                    ?>
                        <h2><?php echo $title; ?></h2>
                    <?php
                    }
                    ?>

                    <?php
                    if ($text) {
                    ?>
                        <p><?php echo $text; ?></p>
                    <?php
                    }
                    ?>

                    <?php
                    if ($CTA_link) {
                    ?>
                        <?php
                        echo button("left", [$CTA_text, $CTA_link]);
                        ?>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>

        </div>
        <?php // End Wrapper  
        ?>


        <?php if (count($page_intros) > 1) {
            // Only render controls and arrows if it's an actual slider
        ?>

            <?php // Swiper Controls / Nav 
            ?>

            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-9d3478d0b527846d" aria-disabled="false"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-9d3478d0b527846d" aria-disabled="false"></div>

            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        <?php
        } ?>

    </div>



</section>