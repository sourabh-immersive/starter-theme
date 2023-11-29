<?php
$social_networks = get_field("social_networks", "options");
// var_dump($social_networks);

if (count($social_networks) > 0) {
    // only run if there is content in the array
?>
<div class="socials">
    <ul>

        <?php
            foreach ($social_networks as $social_network) {
                // var_dump($social_network);
                $serviceName = $social_network["social_network"];
                $url = $social_network["url"];
            ?>
        <li>
            <a href="<?php echo ($serviceName === "email" ? "mailto:" .  $url :  $url) ?>">
                <img
                    alt="<?php echo ucfirst($serviceName) ?> Logo"
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/<?php echo $serviceName ?>.svg"
                />
            </a>
        </li>
        <?php
            }
            ?>


    </ul>
</div>
<?php
}
?>