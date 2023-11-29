<?php
// Use inside a repeater field called "links_with_background_images"
?>

<?php

$field_prepend = "";

// Check if used inside the page Builder or just "Above the Footer";
if (get_sub_field('links_with_background_images')) {
    // Component used inside the Page Builder
    // Need to Add Parent field name to the foreach Array Below;
    $field_prepend = "link_with_background_images_";
    $links = get_sub_field('links_with_background_images');
} else {
    // Component used outside of a Page Builder
    $links = get_field('links_with_background_images');
}

if ($links) {
?>

    <div class="links_with_background_images">
        <ul>

            <?php
            foreach ($links as $link) {
                $imageId = $link[$field_prepend . "background_image"]["ID"];
                $title = $link[$field_prepend . "title"];

                // If no link passed in, then use "#"
                $linkURL = $link[$field_prepend . "link"] ? $link[$field_prepend . "link"]["url"] : "#";
            ?>
                <li class="link_wrapper">

                    <a class="img_wrapper" href="<?php echo $linkURL; ?>">
                        <?php
                        $size = 'large'; // (thumbnail, medium, large, full .etc)
                        // (full is good here as the function outputs a srcset)
                        echo wp_get_attachment_image($imageId, $size);
                        ?>
                    </a>
                    <h3>
                        <a href="<?php echo $linkURL; ?>">
                            <?php echo $title; ?>
                        </a>
                    </h3>

                </li>

            <?php
            }
            ?>

        </ul>
    </div>
<?php
}
?>