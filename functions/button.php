<?php
// Echos out a nice button/s
// Pass in array of items 
// Can pass in multiple arrays button([title, url, type], [title2, url2, type2]);

// "light" by default, "dark" and "alt" also available 

// Also allows alignment options: "left" / "right" / "center"
// Add as First parameter
// can be blank, default is "left"

// Button text
// Link
// classnames
// element type a | button
// target

/*
eg:

echo button("right", [$buttonText, $link]);
echo button([$buttonText, "https://www.google.com", "alt"]);
echo button([$buttonText, $link , "dark", "a"]);
echo button([$buttonText, $link , "dark", "button"]);
echo button([$buttonText, $link , "dark", "button", "_blank"]);

// Supports multiple arrays
echo button([$buttonText, $link], [$buttonText2, $link2]);
*/


function button()
{
    // Get Buttons
    $buttons = func_get_args();

    // Grab the first parameter - if not an array, assume it's alignment
    $alignment = is_array($buttons[0]) ? "" : $buttons[0];

    ob_start();

?>
    <div class="button_wrapper <?php echo $alignment ?>">
        <?php


        foreach ($buttons as $button) {

            // Only output if it's an array (a button)
            if (is_array($button)) {

                $title = $button[0];

                // Check the item has been passed in!
                $link  = isset($button[1]) ?  $button[1] : "";
                $buttonAlt  = isset($button[2]) ?  $button[2] : "";
                $buttonEl = isset($button[3]) ?  $button[3] : "a";
                $buttontarget = isset($button[4]) ?  $button[4] : "";
                $buttonIcon = null;

                $buttonIconClass = ""; // empty by default
                if (isset($button[5]) && $button[5] !== "none") {
                    $buttonIconClass = "icon-" . $button[5];

                    if ($button[5] == "play") {
                        $buttonIcon = '
                        <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 8L0.249999 15.3612L0.25 0.638783L13 8Z" fill="var(--text-color, white)"/>
                        </svg>
                        ';
                    }
                }

                $invalidLink = "";
                if ($link === "" || $link === "#null") {
                    $invalidLink = "invalid-link";
                }



        ?>
                <<?php echo $buttonEl ?> target="<?php echo $buttontarget ?>" href="<?php echo $link; ?>" class="button <?php echo "$buttonAlt $invalidLink $buttonIconClass"; ?>">
                    <?php echo ($buttonIconClass && $buttonIcon ? "<span class='icon'>$buttonIcon</span>" : null); ?>
                    <?php echo $title; ?>

                </<?php echo $buttonEl ?>>
        <?php


            }
        }

        ?>
    </div>
<?php

    return ob_get_clean();
}
?>