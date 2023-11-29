<?php

/**
 * Template Name: Contact
 *
 */

get_header(); ?>



<main>
    <?php get_template_part('content-parts/hero'); ?>

    <div class="row contact">
        <!-- Address -->
        <div class="max-width pad-content">

            <div class="title-container">
                <h2>Contact</h2>
            </div>

            <div class="small-12 medium-4 columns b-1 no-pad">
                <div class="the-content">
                    <?php the_field('address'); ?>
                </div>
            </div>
            <!-- Block One -->

            <!-- Block Two -->
            <div class="small-12 medium-7 columns b-2 no-pad">
                <div class="con-details">
                    <ul>
                        <li><a
                                href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
                        </li>
                        <li><a
                                href="tel:<?php echo str_replace(' ', '', get_field('phone_number', 'options')); ?>"><?php the_field('phone_number', 'options'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- ./Close Container -->

    </div>
</main>




<?php get_footer(); ?>