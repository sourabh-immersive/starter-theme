<?php
/**
 * The template for displaying the archive page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
<div class="row">
    <div class="max-width wrapper">

    <div class="title-container">
        <h1><?php the_archive_title(); ?></h1>
    </div>

        <?php if (have_posts()) :
            // Do we have any posts in the databse that match our query?
            // In the case of the home page, this will call for the most recent posts 
        ?>

            <?php while (have_posts()) : the_post();
                // If we have some posts to show, start a loop that will display each one the same way


            ?>
        <div class="small-12 medium-4 columns">
            <div class="pic-box">
                <a class="link" href="<?php the_permalink(); ?>" target="<?php echo esc_attr($link_target); ?>">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                        } else { ?>
                    <?php
                    $imageArray = get_field('default_news_image', 'options');
                    $imageAlt = $imageArray['alt'];
                    $imageTitle = $imageArray['title'];
                    $imageURL = $imageArray['url'];
                    $imageThumbURL = $imageArray['sizes']['medium']; ?>
                    <img class="article-image" src="<?php echo $imageThumbURL; ?>" alt="<?php the_title(); ?>" Title="<?php echo $imageTitle; ?> " />
                    <?php } ?>
                </a>
            </div>
            <div class="txt-col">
                <div class="the-content">
                    <a class="link" href="<?php the_permalink(); ?>" target="<?php echo esc_attr($link_target); ?>">
                        <h2> <?php echo $title = wp_trim_words(get_the_title(), $num_words = 8, $more = '...'); ?></h2>
                    </a>
                </div>
                <div class="cta">
                    <a class="link" href="<?php the_permalink(); ?>" target="<?php echo esc_attr($link_target); ?>">
                        <button class="curved green">Read More</button>
                    </a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

        <?php endif; ?>
        
    </div>
</div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>