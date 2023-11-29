<?php
// Echos out a nice card to display a blog post
// Pass in postId 


// eg:
// echo blog_post_card($postId);



function blog_post_card($postId)
{
    // Get Buttons
    // $arguments = func_get_args();
    // var_dump($arguments[0]);

    $title = get_the_title($postId);

    $link = get_the_permalink($postId);
    $imageId = get_post_thumbnail_id($postId) ? get_post_thumbnail_id($postId) : "331"; // If none, default to media item 331 (grey square)

    ob_start();
?>

    <article class="post">

        <div class="image-wrapper">
            <a href="<?php echo $link ?>">
                <?php
                $size = 'post-thumbs'; // (post-thumbs, thumbnail, medium, large, full .etc)
                // (full is good here as the function outputs a srcset)
                echo wp_get_attachment_image($imageId, $size, "", ["class" => ""]);
                ?>
            </a>
        </div>

        <div class="text-wrapper">
            <h2>
                <a href="<?php echo $link ?>">
                    <?php echo $title; ?>
                </a>
            </h2>

            <?php
            echo button("center", ["Read More", $link])
            ?>
        </div>
    </article>

<?php
    return ob_get_clean();
}
?>