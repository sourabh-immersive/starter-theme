<?php
/**
* A Simple Category Template
*/

get_header(); ?> 

<div class="row">
    <div class="max-width wrapper">      

        <div class="title-container">
            <h1><?php single_cat_title(); ?></h1>
        </div>

        <?php
        $currCat = get_category(get_query_var('cat'));
        $cat_name = $currCat->name;
        $cat_id   = get_cat_ID( $cat_name );
        ?>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $temp = $wp_query;
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query('showposts=10&post_type=post&paged='.$paged.'&cat='.$cat_id);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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
        <!-- pagintation -->
        <div id="pagination" class="clearfix blog-posts pg-<?php echo get_the_ID(); ?>">
            <div class="newer">
                <?php previous_posts_link('Next', 0); ?>
            </div>
            <div class="numbered">
                <?php wplift_pagination(); ?>
            </div>
            <div class="older">
                <?php next_posts_link('Previous', 0); ?>
            </div>
        </div>
        <!-- ./pagination -->
        <?php wp_reset_query(); ?>
    </div>
</div>

<?php get_footer(); ?>