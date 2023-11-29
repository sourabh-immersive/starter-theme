<?php



?>

<div class="contact-info">





    <div class="contact-info-wrapper">





        <div class="contact-details">
            <h1>Find Us</h1>
            <ul>
                <li>
                    Tel:
                    <a href="tel:<?php echo str_replace(' ', '', get_field('phone_number', 'options')); ?>">
                        <?php the_field('phone_number', 'options'); ?>
                    </a>
                </li>
                <li>
                    Mobile:
                    <a href="tel:<?php echo str_replace(' ', '', get_field('mobile_phone_number', 'options')); ?>">
                        <?php the_field('mobile_phone_number', 'options'); ?>
                    </a>
                </li>
                <li>
                    UK:
                    <a href="tel:<?php echo str_replace(' ', '', get_field('uk_phone_number', 'options')); ?>">
                        <?php the_field('uk_phone_number', 'options'); ?>
                    </a>
                </li>
                <li>Email:
                    <a href="mailto:<?php the_field('email', 'options'); ?>">
                        <?php the_field('email', 'options'); ?>
                    </a>
                </li>
            </ul>

            <div class="contact-details-address">
                <?php the_field('address', 'options') ?>
                <a href="<?php the_field('map_link', 'options'); ?>" target="_blank">
                    Locate Us
                </a>
            </div>

        </div>


        <div>
            <h2 class="h1">Opening Times</h1>
                <?php the_field('opening_hours', 'options') ?>
        </div>

    </div>
</div>