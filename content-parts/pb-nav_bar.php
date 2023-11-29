<?php
// Just to see what data is coming from ACF
$nav_links = get_sub_field('on_page_nav_bar');
// echo '<pre>';
// var_dump($nav_links);
// echo '</pre>';

// Get the permalink of the current page to compare with any of the links on the nav
// We'll show the "current" class if so
$page_link = get_permalink();
?>

<section class="nav_bar full-bleed">

    <ul>
        <?php
        foreach ($nav_links as $nav_link) {

            if (is_array($nav_link["link"])) {
                // Check if it's an array
                // Only try output if there's actual content in the CTA item

                $title = $nav_link["link"]["title"] ? $nav_link["link"]["title"] : "";
                $link = $nav_link["link"]["url"] ? $nav_link["link"]["url"] : "";

                // Add "current" class if the current page = the nav item
                // Blank otherwise
                $isCurrent = $page_link == $link ? "current" : "";
        ?>

        <li class="<?php echo $isCurrent; ?>">

            <a href="<?php echo $link; ?>">
                <?php echo $title; ?>
            </a>

        </li>

        <?php
            } // if
        } // foreach
        ?>
    </ul>

</section>