<div class="row bg-teal cta">
    <div class="max-width pad-content">
        <div class="title-container">
            <h2>Get in touch</h2>
        </div>
        <div class="get-container">
            <p>To find out more please call or email us and we will be happy to help.</p>
        </div>
        <div class="cta-block">
            <a class="link" href="tel:<?php echo str_replace(' ', '', get_field('phone_number', 'options')); ?>">
                <span class="phone"></span>
                <button><?php the_field('phone_number', 'options'); ?></button>
            </a>
            <a class="link" href="mailto:<?php the_field('email', 'options'); ?>">
                <span class="mail"></span>
                <button><?php the_field('email', 'options'); ?></button>
            </a>
        </div>
    </div>
</div>