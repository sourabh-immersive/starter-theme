<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>
 

<!--
<div class="row band-blue news-page">
    <div class="band-title-blue">
        <h1>Search Results</h1>
    </div>
</div>
-->


<div class="row">
    
    <div class="max-width">

        <div class="blog-index-nav">


                <div class="blog-search">

                       <?php get_search_form(); ?> 

                </div>

            </div>
        
    </div>    

</div>

<div class="row">
    
    <div class="max-width">
           
        <div class="small-12 medium-12 large-12 columns blog-listing">
        
            
                <div class="page-block">

                <?php if ( have_posts() ) : ?>
                    
                    <div class="small-12 medium-12 large-12 columns no-pad news-block">

                        <div class="results-message">
                        
                            <h2>Search Results</h2>

                            <p>Below are the results relating to your search query.</p>
                            
                        </div>

                        
                    </div>
        
                    <div class="clear"></div>    
                    
                    
                <?php while ( have_posts() ) : the_post(); ?>
                    
                    

                    
                    
                     <a class="story" href="<?php the_permalink(); ?>">
                    
                       <div class="small-12 medium-3 large-3 columns no-pad news-block">

                            <div class="post-image">

                                <?php if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('post-thumbnail');
                                            } else { ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/images/image-default.jpg" alt="<?php the_title(); ?>" />
                                <?php } ?>

                            </div>

                            <div class="news-text">
                            <span class="date"><?php the_time('m.d.Y'); ?></span>    
                           
                                <h3><?php echo wp_trim_words( get_the_title(), 18 ); ?></h3>
                           
                           <span class="read-more">Read more...</span>
                            <hr class="dash-green-sm">
                            </div>
                        </div>
                         
                    </a>     
                    

                <?php endwhile; ?>
                    
                    
                    <?php else: ?> 
                   
                    <div class="no-results">
                    
                    <h2>No results</h2>   
                      
                        <p>Unfortunately there is no content relevant to your search.</p>
                    
                        <p>Please search again.</p>
                    
                    </div>
                    
                   
                 <?php wp_reset_postdata(); ?>
                    
                <?php endif; ?>

                </div>
            
        
        </div>

        
</div>        
        
</div>
    
    
<div class="clear"></div>


<?php get_footer(); // This fxn gets the footer.php file and renders it ?>