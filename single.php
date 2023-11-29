<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>



	<div class="row">
		<div class="max-width pad-content">

            <div class="small-12 medium-10 columns single-p">
            
			<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a post to show, start a loop that will display it
				?>

					<article class="post">
					
						<div class="post-meta">
                            <div class="time">
							     <?php the_time('m.d.Y'); // Display the time it was published ?>
                            </div>
                            
                            <div class="p-cat">
                                <?php the_category();?>
                            </div>
                            
						
						</div><!--/post-meta -->
						
						<div class="the-content">
							<?php the_content(); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags
							?>
							
						</div><!-- the-content -->
						

						
					</article>
            

				<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
				

            <!-- pagintation -->
            <div id="pagination" class="clearfix blog-posts pg-<?php echo get_the_ID(); ?>">
                <div class="newer"><?php next_post_link( '<strong>%link</strong>' ); ?></div>

                <div class="older">
                <?php previous_post_link( '<strong>%link</strong>' ); ?>
                </div>

                <div class="clear"></div>

            </div><!-- ./pagination -->	

                

			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>                
                
            </div>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
