<?php
$logo =  get_field("site_logo", "options");


?>


<nav>
    <?php
    if (isset($logo)) {
    ?>
    <div class="logo-container">
        <a href="/">
            <?php
                $imageId = $logo["id"];
                $size = 'large'; // (thumbnail, medium, large, full .etc)
                // (full is good here as the function outputs a srcset)
                echo wp_get_attachment_image($imageId, $size, "", ["class" => "logo"]);
                ?>
        </a>
    </div>
    <?php
    }
    ?>

    <?php wp_nav_menu(array('theme_location' => 'main')); ?>


    <?php get_template_part('content-parts/hamburger_toggle_button'); ?>

</nav>