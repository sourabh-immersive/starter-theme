<?php
////////
//
//
// Not intended to be used directly - used within other ACF fields
// Sample Usage - pb-latest_posts_block.php;
//
//
////////



$buttons = get_sub_field('ctas');
$buttonAlignment = get_sub_field('button_alignment');


// Make a new array for the buttons to sit in
$buttonsModified = [];
if ($buttons) {
    foreach ($buttons as &$button) {
        $button = [$button["button"]["title"], $button["button"]["url"], $button['button_style'] ? "alt" : "", "a", $button["button"]["target"]];

        array_push($buttonsModified, $button);
    }
}
?>


<?php
// Only output buttons if there are any to show
if ($buttons) {
?>
<?php
    echo button($buttonAlignment, ...$buttonsModified)
?>
<?php
}
?>