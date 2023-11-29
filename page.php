<?php

/**
 * The template for displaying any single page.
 *
 */

get_header(); // This fxn gets the header.php file and renders it 
?>



<div class="row">
    <div class="max-width pad-content">

        <div class="small-12 medium-10 columns single-p">

            <?php if (have_posts()) :
				// Do we have any posts in the databse that match our query?


				/* Start the Loop */
				while (have_posts()) :
					the_post();
			?>

            <article
                id="post-<?php the_ID(); ?>"
                <?php post_class(); ?>
            >

                <div class="entry-content the-content">
                    <?php
							the_content();
							?>
                </div>
                <?php /*  .entry-content  */ ?>


            </article>

            <?php

				endwhile; // End of the loop.
			endif;
			?>

        </div>

    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); // This fxn gets the footer.php file and renders it 
?>