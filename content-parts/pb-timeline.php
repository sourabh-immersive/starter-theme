<section class="timeline">

    <ol>
        <?php
        $timeline_items = get_sub_field('timeline');

        // echo '<pre>';
        // var_dump($timeline_items);
        // echo '</pre>';
        $fieldNamePrefix = "timeline_item_";

        foreach ($timeline_items as $timeline_item) {


            // If sub field exists ? use subfield :(else) empty string
            $title = $timeline_item['timeline_item_gen_title'] ? $timeline_item['timeline_item_gen_title'] : "";

            $byline = $timeline_item['timeline_item_gen_text'] ? $timeline_item['timeline_item_gen_text'] : "";
            $imageId = $timeline_item['timeline_item_gen_image']["id"] ? $timeline_item['timeline_item_gen_image']["id"] : "";



            $CTA_link = ""; // blank by default

            // if ($timeline_item['timeline_item_gen_CTA']) {
            //     $CTA_text = $timeline_item['timeline_item_gen_CTA']["title"] ? $timeline_item['timeline_item_gen_CTA']["title"] : "";
            //     $CTA_link = $timeline_item['timeline_item_gen_CTA']["url"] ? $timeline_item['timeline_item_gen_CTA']["url"] : "";
            // }


            $buttons["ctas"] = $timeline_item["timeline_item_ctas"] ? $timeline_item["timeline_item_ctas"] : null;

            // $force_no_crop_on_image = $timeline_item["timeline_item_force_no_crop_on_image"] ? "no-crop" : "";
        ?>
        <li>

            <?php
                if ($imageId) {
                ?>
            <div class="image-wrapper">
                <?php
                        $size = 'medium'; // (thumbnail, medium, large, full .etc)
                        // (full is good here as the function outputs a srcset)
                        echo wp_get_attachment_image($imageId, $size);
                        ?>
            </div>
            <?php
                }
                ?>

            <div class="text-content">
                <?php
                    if ($title) {
                    ?>
                <h2>
                    <?php echo $title; ?>
                </h2>
                <?php
                    }
                    ?>

                <?php
                    if ($byline) {
                    ?>
                <?php echo $byline; ?>
                <?php
                    }
                    ?>



                <?php
                    if ($buttons) {
                    ?>

                <?php
                        echo buttons($buttons);
                        ?>

                <?php
                    }
                    ?>


        </li>

        <?php
        } // end For each
        ?>
    </ol>
</section>