<?php
$sectionTitle = get_sub_field('section_title');
$accordions = get_sub_field('accordions');

// echo '<pre>';
// var_dump($accordions);
// echo '</pre>';

////////
//
// Depending on whether we're using this Form Block Directly or through the Page Builder
//
////////



?>
<?php if ($accordions) { ?>

    <div class="accordions max-width">

        <?php if ($sectionTitle) { ?>
            <h2><?php echo $sectionTitle; ?></h2>
        <?php } ?>

        <div class="wrapper ">



            <?php
            $i = 1; // Count and have unqiue ID
            // Can be used to link directly to an FAQ
            // Won't work if multiple accordion blocks on page

            foreach ($accordions as $accordion) {
                $title = $accordion["accordion_accordion_title"];
                $content = $accordion["accordion_accordion_content"];
            ?>
                <?php if ($title && $content) {
                    // Only render if each accordion item has a title and content
                ?>
                    <div class="single_accordion" id="accordion-<?php echo $i; ?>">
                        <button class="accordion">
                            <?php echo $title; ?>
                        </button>
                        <div class="panel">
                            <?php echo $content; ?>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php } ?>
            <?php } ?>



        </div>
    </div>

<?php } ?>