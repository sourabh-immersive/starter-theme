<?php
$section_heading = get_sub_field('section_heading');
$how_many_posts_to_show = get_sub_field('how_many_posts_to_show');
$which_post_type_to_show = get_sub_field('which_post_type_to_show');

// NEED to do a query for the correct posts and feed in whatever stuff get's passed in from the ACF fields

$arguments = array(
    'numberposts' => $how_many_posts_to_show,
    'post_type' => $which_post_type_to_show,
    'order' => "DESC",
    'post__not_in' => array(get_the_id()), // exclude the current page
    'meta_query'    => array(
        array(
            // 'key'          => 'featured_project',
            // 'value'          => '1',
            // 'compare'     => '=',
        ),
    ),
);
$taggedLatestPosts = get_posts($arguments);

?>

<div class="latest_posts_block">
    <div class="wrapper">
        <?php
        if ($section_heading) {
        ?>
            <h1><?php echo $section_heading; ?></h1>
        <?php
        }
        ?>


        <ol class="posts-listing">
            <?php

            foreach ($taggedLatestPosts as $taggedPost) {
            ?>
                <li>
                    <?php
                    $taggedPostId = $taggedPost->ID;

                    // echo $postId;
                    // Prob output the card here
                    echo blog_post_card($taggedPostId);
                    ?>

                </li>
            <?php
            }

            ?>
        </ol>

        <?php
        // If there are CTAs here, display them
        // This will pull in any available ctas automagically!
        get_template_part('content-parts/ctas_block');
        ?>


    </div>
</div>


<?php
/*
<div class="latest_posts_block">
    <div class="wrapper">
        <?php
        if ($section_heading) {
        ?>
            <h1><?php echo $section_heading; ?></h1>
        <?php
        }
        ?>


        <ol class="posts-listing">
            <?php
            foreach ($taggedLatestPosts as $post) {
            ?>
                <li>
                    <?php
                    $postId = $post->ID;

                    // echo $postId;
                    // Prob output the card here
                    // echo blog_post_card($postId);
                    ?>

                </li>
            <?php
            }
            ?>
        </ol>

        <?php
        // If there are CTAs here, display them
        // This will pull in any available ctas automagically!
        // get_template_part('content-parts/ctas_block');
        ?>


    </div>
</div>
*/
?>