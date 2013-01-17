<?php
/*
Template Name: Search Page
*/
?>


<?php get_header(); ?>
            
			<h2 id="post-<?php the_ID(); ?>"><?php printf( 'Search Results for: %s' , '<span>' . get_search_query() . '</span>' ); ?></h2>
            
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<h3 class="searchresult"><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h3>
                       <?php the_excerpt("read more.."); 
                endwhile; ?>
				
				<?php else : ?>
				
				<h4><?php echo 'Nothing Found'; ?></h4>
				<div>
					<p><?php echo 'Sorry, but nothing matched your search criteria. <br /> Please try again with some different keywords.'; ?></p>
				</div>
           <?php endif;?>
        
<?php get_footer(); ?>