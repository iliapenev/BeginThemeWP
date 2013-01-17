<?php get_header(); ?>
          
<?php
	wp_get_recent_posts();
	if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . 'Reply' . '</span>', '1','%' ); ?>
				</div>
				<p class="postmetadata">
					<?php the_time('F jS, Y') ?> by <?php the_author() ?>
					<?php the_tags('Tags: ', ', ', '<br />'); ?>  |
					<?php edit_post_link('Edit', '', ' | '); ?>  
					<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
				</p>
				<div class="entry">
					<?php	the_content('Read the rest of this entry'); ?>
				</div>
			</div>		
		<?php endwhile; ?>

			<div class="navigation">
		<?php
			$prev_link = get_previous_posts_link(__('Newer Entries'));
			$next_link = get_next_posts_link(__('Previous Entries'));
			if ($prev_link || $next_link) {
				if ($prev_link){
					echo '<div class="newer">'.$prev_link .'</div>';
				}
				if ($next_link){
					echo '<div class="previous">'.$next_link .'</div>';
				}
			} ?>
			</div>
		
		<?php else : ?>
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
		<?php endif; ?>

		<?php get_sidebar(); ?>

<?php get_footer(); ?>