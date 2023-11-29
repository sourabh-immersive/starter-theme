<?php
////////
//
//
// Used to display multiple buttons
// Generally an output from the "CTAs (single)" ACF Group 
// Handles Alignment and multiple buttons
// When using the CTAs (single) field as a cloned field in another group, wrap it in a "group" field so it unique
// Pass this "group" array into the Buttons Function
// 
// 
////////

// echo buttons($buttons);
// eg. Example Usage: pb-full_width_cta_bar.php

function buttons($buttons = null)
{
    // Get Buttonsx
    $buttons = func_get_args();



    // Get Button Alignment
    $buttonAlignment = isset($buttons[0]["button_alignment"]) ? $buttons[0]["button_alignment"] : get_sub_field('button_alignment');

    // Get Buttons
    if ($buttons) {
        // If there are buttons passed into the function, run them
        $buttons = $buttons[0]["ctas"];
    } else {
        // Otherwise, just the general "ctas" that's currently in memory 
        $buttons = get_sub_field("ctas") ? get_sub_field("ctas") : get_field("ctas");
    }


    ob_start();

?>

<?php
    // Make a new array for the buttons to sit in
    $buttonsModified = [];
    if ($buttons) {
        foreach ($buttons as &$button) {

            if (isset($button["button"]["title"]) && isset($button["button"]["url"])) {
                // if there's no title or no link
                // don't display the button
                $button_color = isset($button['button_style']) ? $button['button_style'] : "blue";
                $button_icon = isset($button['icon']) ? $button['icon'] : "";
                $button = [$button["button"]["title"], $button["button"]["url"], $button_color, "a", $button["button"]["target"], $button_icon];

                array_push($buttonsModified, $button);
            }
        }
    }


    // Only output buttons if there are any to show
    if ($buttons) {
?>
<?php
        echo button($buttonAlignment, ...$buttonsModified)
?>
<?php
    }
?>
<?php

    return ob_get_clean();
}
?>