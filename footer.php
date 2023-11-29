<?php
/*-----------------------------------------------------------------------------------*/
/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/


// Try fetch the footer logo
// If it doesn't exist, use the one in the header
$logo =  get_field("footer_logo", "options") ?  get_field("footer_logo", "options") : get_field("site_logo", "options")

?>

<footer>

    <div class="wrapper">
        <div class="column-left">
            <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
        </div>

        <div class="con-details">

            <div class="the-content">
                <ul>
                    <li>Email:
                        <a href="mailto:<?php the_field('email', 'options'); ?>">
                            <?php the_field('email', 'options'); ?>
                        </a>
                    </li>
                    <li>
                        Phone:
                        <a href="tel:<?php echo str_replace(' ', '', get_field('phone_number', 'options')); ?>">
                            <?php the_field('phone_number', 'options'); ?>
                        </a>
                    </li>
                    <li>
                        <?php the_field('address', 'options') ?>

                        <a href="<?php the_field('map_link', 'options'); ?>" target="_blank">
                            Locate Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="column-right">

            <?php
            if (isset($logo)) {
            ?>
            <div class="logo-container">
                <a href="/">
                    <?php
                        $imageId = $logo["id"];
                        $size = 'large'; // (thumbnail, medium, large, full .etc)
                        // (full is good here as the function outputs a srcset)
                        echo wp_get_attachment_image($imageId, $size, "", ["class" => ""]);
                        ?>
                </a>
            </div>
            <?php
            }
            ?>

            <?php get_template_part('content-parts/social_networks'); ?>
        </div>

        <div class="bottom">
            <div class="copyright">
                <p>
                    &copy; <?php
                            echo date("Y"); ?> <?php bloginfo('name'); ?></p>
            </div>

            <div class="sign-off">
                <p>
                    <a href="https://www.weareopen.ie/" target="_blank">Website by Open</a>
                </p>
            </div>
        </div>

    </div><?php /* /.wrapper */ ?>
</footer>


<?php get_template_part('content-parts/hamburger_menu'); ?>

<?php get_template_part('content-parts/modal_content'); ?>

<?php wp_footer();
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>


</body>

</html>