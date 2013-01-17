<?php
/*
  Template Name: Single post
 */
?>

<?php get_header(); ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h2 class="post-title"> <?php  the_title(); ?></h2>

				<p class="post-metadata">by <?php the_author(); ?> on <?php the_time('M j, Y') ?> &bull; <?php comments_number( 'No comments', '1 comment', '% comments' ); ?></p>

				<div class="post-content">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				</div>

				<h5>Comments (<?php comments_number('0', '1', '%'); ?>)</h5>
				<?php comments_template( '', true ); ?>
			
			<?php
                endwhile;
            endif;
            ?>
			
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			
<?php get_footer(); ?>