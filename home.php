<?php

/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it 


global $wp_query;
$all_posts = $wp_query->posts;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts(array(
    'post_type' => 'post',
    'posts_per_page' => '12',
    'paged' => $paged
));

?>


<div>
    <h1>Blog</h1>
</div>



<main>
    <div class="max-width wrapper">

        <?php if (have_posts()) {
            // Do we have any posts in the databse that match our query?
            // In the case of the home page, this will call for the most recent posts 
        ?>
            <ol class="posts-listing">
                <?php while (have_posts()) : the_post();
                    // If we have some posts to show, start a loop that will display each one the same way
                ?>
                    <li>
                        <?php echo blog_post_card(get_the_ID()); ?>
                    </li>
                <?php endwhile; ?>


                <!-- pagintation -->
                <div id="pagination" class="clearfix blog-posts pg-<?php echo get_the_ID(); ?>">
                    <div class="newer">
                        <?php previous_posts_link('Next', 0); ?>
                    </div>
                    <div class="numbered">
                        <?php wplift_pagination(); ?>
                    </div>
                    <div class="older">
                        <?php next_posts_link('Previous', 0); ?>
                    </div>
                </div>
                <!-- ./pagination -->

            </ol>
        <?php } ?>


        <?php wp_reset_query(); ?>
    </div>
</main>

<?php get_footer(); // This fxn gets the footer.php file and renders it 
?>