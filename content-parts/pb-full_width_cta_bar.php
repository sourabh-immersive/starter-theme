<?php

$linkTitle = get_sub_field('full_width_cta_bar')["title"];
$linkURL = get_sub_field('full_width_cta_bar')["url"];



?>


<div class="full_width_cta_bar full-bleed">

    <a href="<?php echo $linkURL ?>">
        <?php echo $linkTitle; ?>
        <span></span>
    </a>
</div>