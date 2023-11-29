<?php

/**
 * 404 page
 *
 */

get_header(); ?>

<main>
    <div class="page_builder">

        <div class="max-width the-content">


            <h1>404 - Page could not be found</h1>

            <p><?php _e('The post, page or whatever it was you were looking for might not be here. It could have been moved, deleted or maybe the URL you typed or the link you clicked was incorrect in some way.'); ?>
            </p>

            <p><?php _e('To go back to the homepage please click the button below,'); ?></p>

            <p><?php _e('<a class="back-to-home" href="/">Homepage</a>'); ?></p>


            <h2><?php _e('Contact Us'); ?></h2>
            <p><?php _e('If you are certain it was supposed to be here and just can&rsquo;t seem to find it,'); ?> <a
                    href="/contact"><?php _e('please let us know.'); ?></a>
                <?php _e('We would be more than happy to look into the matter for you and let you know what happened.'); ?>
            </p>


            <p><?php _e('<a class="back-to-home" href="/contact/">Contact</a>'); ?></p>




        </div>

    </div>

    </div>
</main>

<?php get_footer(); ?>