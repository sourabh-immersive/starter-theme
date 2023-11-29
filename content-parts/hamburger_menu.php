<div class="full-menu hamburger-content hidden">
    <div class="wrapper">

        <?php 
        // get_template_part('content-parts/hamburger_toggle_button'); 
        /*
        <a href="/" class="logo">
            <?php the_field('site_logo', 'options'); ?>
        </a>
        */
        ?>

        <nav id="hamburger-nav">
            <?php wp_nav_menu(array('theme_location' => 'mobile')); ?>
        </nav>

    </div>
</div>